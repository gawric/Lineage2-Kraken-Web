<?php

 namespace App\Service\PersonalArea\Dashboard;
 use App\Models\Temp\InfoDashboard;

    interface IDashboard
    {
        public function getAllowedAccountsCount() : int;
        public function getUsernameAuth() : string;
        public function createAccountAjax($auth_user_id , $account_name , $password , $server_id): InfoDashboard;
        public function changePasswordToAccounts($account_name , $old_password, $new_password , $server_id): void;
    }

?>