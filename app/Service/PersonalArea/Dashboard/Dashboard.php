<?php

    namespace App\Service\PersonalArea\Dashboard;

    use App\Service\PersonalArea\Dashboard\Support\SqlSupport;
    use Config;
    use Auth;
    use App\Service\PersonalArea\Dashboard\Ajax\DashboardAjax;
    use App\Service\Utils\FunctionAuthUser;
    use App\Models\Temp\InfoDashboard;
    
    class Dashboard implements IDashboard
    {

       private $allowed_accounts_count;
       private $list_server;
       private SqlSupport $sql_support;
       private DashboardAjax $d_ajax;

        public function __construct() {

            $this->list_server = Config::get('lineage2.server.list_server');
            $this->allowed_accounts_count = Config::get('lineage2.server.allowed_accounts');
            $this->sql_support = new SqlSupport();
            $this->d_ajax = new DashboardAjax();
        }

        public function getInfoAccountsServer($username){
            $list_user_server_accounts = Auth::user()->accounts_server_id();
           return  $this->sql_support->getInfoAllCharacters($this->list_server , $list_user_server_accounts);
        }

        public function getAllowedAccountsCount() : int{
            return $this->allowed_accounts_count;
        }

        public function getUsernameAuth() : string{
            return FunctionAuthUser::getAuthLogin();
        }

        public function createAccountAjax($auth_user_id , $account_name , $password , $server_id): InfoDashboard{
           return  $this->d_ajax->createAccount($auth_user_id , $account_name , $password , $server_id);
        }
        public function changePasswordToAccounts($account_name , $old_password, $new_password , $server_id):void{
            $this->d_ajax->changePasswordToAccounts($account_name , $old_password, $new_password , $server_id);
        }

        //реализация не нужна метод используется в DashboardChars
        public function getAllCharsAllServers($list_servers , $auth_user_id){
            
        }

        //реализация не нужна метод используется в DashboardChars
        public function getItemById($server_id , $item_id , $char_name , $list_servers){

        }
    
    }
?>