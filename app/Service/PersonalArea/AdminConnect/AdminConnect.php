<?php

 namespace App\Service\PersonalArea\AdminConnect;

   
 use Config;
 use Auth;
 use App\Service\Utils\FunctionSupport;
 use App\Service\Utils\FunctionAuthUser;

    class AdminConnect implements IAdminConnect
    {

        private $list_server;

        public function __construct() {

            $this->list_server = Config::get('lineage2.server.list_server');
        }

        public function getDataIpAddress(){
            return FunctionAuthUser::getAllAccounts_ip();
        }
    }
?>