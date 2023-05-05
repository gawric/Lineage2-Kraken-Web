<?php

namespace App\Service\PersonalArea\AdminDashboard\Support;

use Config;
use Auth;
use App\Service\PersonalArea\Dashboard\Support\SqlSupport;
use App\Models\Temp\InfoAdminDashboard;
use App\Models\Temp\InfoDashboard;
use App\Service\PersonalArea\AdminDashboard\Support\AdminSqlSupport;
use Lang;  
use Illuminate\Database\Eloquent\ModelNotFoundException;

    class AdminAllInfoUsers
    {
        private $role_blocked_name;
        private $role_name_user;
        private $role_name_admin;

        public function __construct()
        {
            $this->role_name_admin = Config::get('lineage2.server.role_name_admin');
            $this->role_blocked_name = Config::get('lineage2.server.role_name_blocked');
            $this->role_name_user = Config::get('lineage2.server.role_name_user');
        }
       
        public function forEach($all_users , $sql_support , $list_server){
            $temp =[];

            foreach($all_users as $user){
               // dd($user);
                $all_accounts = $user->accounts_server_id();
                $first_auth_ip = $user->accounts_ip()->first();
                $role_model = $user->accounts_role->first();
                $array_infoDashboard = $sql_support->getInfoAllCharacters($list_server , $all_accounts);
                $count_chars = $this->getCountChars($array_infoDashboard);
                $infoAdminDashboard = $this->createInfoAdminDashboard($user->id , count($array_infoDashboard) , $count_chars , $user->login, $user->email , $user->created_at, $first_auth_ip->ip_address , $role_model->name);
               
                if(!$this->isAdminRole($role_model->name)){
                    array_push($temp  ,  $infoAdminDashboard);
                }
                
            }
                
            return $temp;
        }

        private function getCountChars($array_infoDashboard){
            $count_chars = 0;
            foreach($array_infoDashboard as $infoDashboard){
               // dd($infoDashboard->count_characters);
                $count_chars = $count_chars + (int)$infoDashboard->count_characters;
            }

            return $count_chars;
        }

        private function createInfoAdminDashboard($id , $count_accounts , $count_chars , $login , $email , $datager, $last_ip ,$role_name){
             $adminDashboardmodel = new InfoAdminDashboard();
             $adminDashboardmodel->id = $id;
             $adminDashboardmodel->username = $login;
             $adminDashboardmodel->email = $email;
             $adminDashboardmodel->datereg = $datager;
             $adminDashboardmodel->count_accounts = $count_accounts;
             $adminDashboardmodel->count_chars = $count_chars;
             $adminDashboardmodel->last_ip = $last_ip;
             $adminDashboardmodel->is_blocked = $this->convertBlockedNameToBool($role_name);
             return $adminDashboardmodel;
        }

        private function isAdminRole($role_name){
            if (strcmp($this->role_name_admin, $role_name) == 0) {
                return true;
            }

            return false;
        }
        private function convertBlockedNameToBool($role_name){
            if (strcmp($this->role_blocked_name, $role_name) == 0) {
                return true;
            }

            return false;
        }
    }

?>