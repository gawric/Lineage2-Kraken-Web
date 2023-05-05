<?php

namespace App\Service\PersonalArea\AdminDashboard\Support;

use App\Service\ProxySqlL2Server\Support\ProxyFilters\GeneralFilters;
use App\Models\Temp\InfoDashboard;
use App\Service\Utils\FunctionSupport;
use App\Models\Accounts_expansion;
use Config;


    class AdminSqlSupport
    {
        private $role_blocked_name;
        private $role_name_user;

        public function __construct()
        {
            $this->role_blocked_name = Config::get('lineage2.server.role_name_blocked');
            $this->role_name_user = Config::get('lineage2.server.role_name_user');
        }
       
        public  function isExistAccountExpansion($account_expansion_id){
            return Accounts_expansion::find($account_expansion_id);
        }

        public function blockAccountExpansion($account_expansion){
            $this->changeRoleAccauntExpansion($account_expansion , $this->role_blocked_name);
        }

        public function unblockAccountExpansion($account_expansion){
            $this->changeRoleAccauntExpansion($account_expansion , $this->role_name_user);
        }


        private function changeRoleAccauntExpansion($account_expansion , $role_name){
            $role = $account_expansion->accounts_role->first();
            $role->name = $role_name;
            $role->save();

            info("changeRoleAccauntExpansion-> ". $account_expansion->id . " accountName " . $account_expansion->login . " roleName " . $role->name);
        }
    }

?>