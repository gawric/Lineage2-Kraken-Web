<?php

 namespace App\Service\PersonalArea\AdminDashboard;

   
 use Config;
 use Auth;
 use App\Service\PersonalArea\Dashboard\Support\SqlSupport;
 use App\Models\Temp\InfoAdminDashboard;
 use App\Models\Temp\InfoDashboard;
 use App\Service\PersonalArea\AdminDashboard\Support\AdminSqlSupport;
 use App\Service\PersonalArea\AdminDashboard\Support\AdminAllInfoUsers;
 use Lang;  
 use Illuminate\Database\Eloquent\ModelNotFoundException;
 use App\Service\ProxySqlL2Server\ProxySqlServer;
 use App\Service\Utils\FunctionSupport;

    class AdminDashboard implements IAdminDashboard
    {

        private SqlSupport $sql_support;
        private AdminSqlSupport $admin_sql_support;
        private AdminAllInfoUsers $admin_support;
        private $list_server;

        public function __construct() {
            $this->sql_support = new SqlSupport();
            $this->admin_sql_support = new AdminSqlSupport();
            $this->admin_support = new AdminAllInfoUsers();
            $this->list_server = Config::get('lineage2.server.list_server');
        }

        public function getListAllInfoAdminDashboard($all_users):array{
                return $this->admin_support->forEach($all_users , $this->sql_support , $this->list_server);
        }
        public function getListAllL2AccountsByAccountExpansion($all_accounts_server){
                return $this->forEachGetInfoAccountsServer($all_accounts_server);
        }

        public function blockAccountExpansion($account_expansion_id){
            $model_account_expansion = $this->admin_sql_support->isExistAccountExpansion($account_expansion_id);
            if(isset($model_account_expansion)){

                $this->admin_sql_support->blockAccountExpansion($model_account_expansion);
                return $model_account_expansion;
            }


            throw new ModelNotFoundException(Lang::get('validation.not_fount_account') . " " . $account_expansion_id);
        }

        public function unblockAccountExpansion($account_expansion_id){
            $model_account_expansion = $this->admin_sql_support->isExistAccountExpansion($account_expansion_id);
            if(isset($model_account_expansion)){

                $this->admin_sql_support->unblockAccountExpansion($model_account_expansion);
                return $model_account_expansion;
            }


            throw new ModelNotFoundException(Lang::get('validation.not_fount_account') . " " . $account_expansion_id);
            
        }

        public  function blockAllAccountsServer($all_accounts_server){
                $this->forEachBlockAccount($all_accounts_server);
        }

        public function unblockAllAccountsServer($all_accounts_server){
                $this->forEachUnblockAccount($all_accounts_server);
        }   



        private function forEachGetInfoAccountsServer($all_accounts_server){
            $index = 0;
            $temp = [];
            foreach($all_accounts_server as $item){
                $server_id = $item->server_id;
                $l2Login = $item->account_name;

                $developer_id = FunctionSupport::getDeveloperId($server_id , $this->list_server);
                $modelAccounts = FunctionSupport::getModelAccountDb($server_id , $this->list_server);

              
                $this->proxySql = new ProxySqlServer($developer_id);

                $model =  $this->proxySql->getInfoAccountServer($l2Login , $modelAccounts);
                $model->id = $index++;

                array_push($temp  , $model);
            }
            return $temp;
        }
        private function forEachBlockAccount($all_accounts_server){
            foreach($all_accounts_server as $item){
                $server_id = $item->server_id;
                $blockLogin = $item->account_name;

                $developer_id = FunctionSupport::getDeveloperId($server_id , $this->list_server);
                $modelAccounts = FunctionSupport::getModelAccountDb($server_id , $this->list_server);

                $this->proxySql = new ProxySqlServer($developer_id);
                $this->proxySql->blockAccount($modelAccounts , $blockLogin);
            }
        }

        private function forEachUnblockAccount($all_accounts_server){
            foreach($all_accounts_server as $item){
                $server_id = $item->server_id;
                $unblockLogin = $item->account_name;

                $developer_id = FunctionSupport::getDeveloperId($server_id , $this->list_server);
                $modelAccounts = FunctionSupport::getModelAccountDb($server_id , $this->list_server);

                $this->proxySql = new ProxySqlServer($developer_id);
                $this->proxySql->unblockAccount($modelAccounts , $unblockLogin);
            }
        }





      

    }
?>