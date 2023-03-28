<?php

    namespace App\Service\PersonalArea\Dashboard;

    use App\Service\PersonalArea\Dashboard\Support\SqlSupport;
    use Config;
    use Auth;
    use App\Service\PersonalArea\Dashboard\Ajax\DashboardAjax;
    use App\Service\Utils\FunctionAuthUser;
    use App\Models\Temp\InfoDashboard;
    
    class DashboardChars implements IDashboard
    {

        private $list_server;
        private ProxySqlServer $proxy;

        public function __construct() {
            $this->list_server = Config::get('lineage2.server.list_server');
        }

        //здесь реализация не нужна реализовывается в dashboard
        public function getAllowedAccountsCount() : int{}

       //здесь реализация не нужна реализовывается в dashboard
        public function getUsernameAuth() : string{}

        //здесь реализация не нужна реализовывается в dashboard
        public function createAccountAjax($auth_user_id , $account_name , $password , $server_id): InfoDashboard{}

         //здесь реализация не нужна реализовывается в dashboard
        public function changePasswordToAccounts($account_name , $old_password, $new_password , $server_id):void{}

        public function getAllCharsAllServers(): InfoDashboardChars{
            foreach($this->list_servers as $server){
                $server_id = $server['id'];
                $developer_id = FunctionSupport::getDeveloperId($server_id , $this->list_servers);
                $this->proxy = new ProxySqlServer($developer_id);
            }
            
        }
    
    }
?>