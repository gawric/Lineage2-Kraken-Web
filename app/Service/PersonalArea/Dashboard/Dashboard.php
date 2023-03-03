<?php

    namespace App\Service\PersonalArea\Dashboard;

    use App\Service\PersonalArea\Dashboard\Support\SqlSupport;
    use Config;
    use Auth;

    class Dashboard implements IDashboard
    {

       private $allowed_accounts_count;
       private $list_server;
       private SqlSupport $sql_support;

        public function __construct() {

            $this->list_server = Config::get('lineage2.server.list_server');
            $this->allowed_accounts_count = Config::get('lineage2.server.allowed_accounts');
            $this->sql_support = new SqlSupport();
        }

        public function getInfoAccountsServer($username){
            $list_user_server_accounts = Auth::user()->accounts_server_id();
           return  $this->sql_support->getInfoAllCharacters($this->list_server , $username , $list_user_server_accounts);
        }

        public function getAllowedAccountsCount() : int{
            return $this->allowed_accounts_count;
        }

        public function getUsernameAuth() : string{
            return Auth::user()->login;
        }
    
    }
?>