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
       
        public function forEach($all_users){
            $temp =[];

            foreach($all_users as $user){
               // dd($user);
                $all_accounts = $user->accounts_server_id();
                $first_auth_ip = $user->accounts_ip()->first();
                $array_infoDashboard = $this->sql_support->getInfoAllCharacters($this->list_server , $all_accounts);
                $count_chars = $this->getCountChars($array_infoDashboard);
                $infoAdminDashboard = $this->createInfoAdminDashboard($user->id , count($array_infoDashboard) , $count_chars , $user->login, $user->email , $user->created_at, $first_auth_ip->ip_address , false);
                
                array_push($temp  ,  $infoAdminDashboard);
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

        private function createInfoAdminDashboard($id , $count_accounts , $count_chars , $login , $email , $datager, $last_ip ,$is_blocked){
             $adminDashboardmodel = new InfoAdminDashboard();
             $adminDashboardmodel->id = $id;
             $adminDashboardmodel->username = $login;
             $adminDashboardmodel->email = $email;
             $adminDashboardmodel->datereg = $datager;
             $adminDashboardmodel->count_accounts = $count_accounts;
             $adminDashboardmodel->count_chars = $count_chars;
             $adminDashboardmodel->last_ip = $last_ip;
             $adminDashboardmodel->is_blocked = $is_blocked;
             return $adminDashboardmodel;
        }
    }

?>