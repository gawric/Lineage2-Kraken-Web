<?php

    namespace App\Service\PersonalArea\Dashboard\Ajax;

    use Config;
    use Auth;
    use App\Service\ProxySqlL2Server\ProxySqlServer;
    use App\Service\Utils\FunctionSupport;
    use App\Service\Utils\FunctionAuthUser;
    use Illuminate\Database\Eloquent\ModelNotFoundException;
    use Lang;
    use App\Models\Temp\InfoDashboard;

    class DashboardAjax 
    {

       private $allowed_accounts_count;
       private $list_servers;
       private ProxySqlServer $proxy;

        public function __construct(){
            $this->list_servers = Config::get('lineage2.server.list_server');
            $this->allowed_accounts_count = Config::get('lineage2.server.allowed_accounts');
        }

        public function createAccount($auth_user_id , $account_name , $password , $server_id): InfoDashboard{
            $server_name = FunctionSupport::getServerNameById($server_id , $this->list_servers);
            $developer_id = FunctionSupport::getDeveloperId($server_id , $this->list_servers);
            $this->proxy = new ProxySqlServer($developer_id);
            $modelAccountDb = FunctionSupport::getModelAccountDb($server_id , $this->list_servers);

            if(!$this->proxy->isUserExistServer($modelAccountDb , $account_name)){
                //возможно нужно будет переделать в массив слишком много аргументов
                return $this->proxy->createAccount($modelAccountDb , $auth_user_id , $account_name , $password , $server_id , $server_name );
            }
            else{
                throw new ModelNotFoundException(Lang::get('validation.enter_use_db') . " " . $account_name);
            }

           
        }


        public function changePasswordToAccounts($account_name , $old_password, $new_password , $server_id){

            $all_accounts_server_id = FunctionAuthUser::getAllAccountsUser();

            if($this->isAccessChangePass($all_accounts_server_id  , $account_name , $server_id)){

                    $developer_id = FunctionSupport::getDeveloperId($server_id , $this->list_servers);
                    $this->proxy = new ProxySqlServer($developer_id);
                    $modelAccountDb = FunctionSupport::getModelAccountDb($server_id , $this->list_servers);
                    //$result_exist_server =  $this->proxy->isUserExistServer($modelAccountDb , $account_name);
                    if($this->proxy->isUserExistServer($modelAccountDb , $account_name)){
                        $this->proxy->changePassAccount($modelAccountDb , $account_name, $old_password , $new_password);
                    }
                    else{
                        throw new ModelNotFoundException(Lang::get('validation.not_fount_account') . " " . $account_name);
                    }

            }
            else{
                throw new ModelNotFoundException(Lang::get('validation.not_access') . " "  . $account_name);
            }
        
        }

        //проверяем что запрос на смену пароля соответствует его учетной записи
        //что-бы нельзя была послать запрос с левой учетки на смену пароля друкого пользователя!
        private function isAccessChangePass($all_accounts_server_id  , $auth_account_name , $auth_server_id){
            
           $result = false;

            $all_accounts_server_id->each(function($account_server, $key) use ($auth_server_id , $auth_account_name , &$result)  {

                $server_id_account= $account_server['server_id'];
                if($this->isEqualsServerId($server_id_account , $auth_server_id)){

                    $account_name = $account_server['account_name'];
                    if($this->isEqualsAccountName($account_name , $auth_account_name)){
                        $result =  true;
                    }
                }
               
            });

            return $result;
        }

        private function isEqualsServerId($server_id_account , $auth_server_id){
            if($server_id_account ==  $auth_server_id){
                return true;
            }
            return false;
        }

        private function isEqualsAccountName($account_name , $auth_account_name){
            if(strcmp($account_name, $auth_account_name) == 0){
                return true;
            }
            return false;
        }

        
    
    }
?>