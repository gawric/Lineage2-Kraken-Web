<?php

 namespace App\Service\PersonalArea\Dashboard;


    interface IDashboard
    {
        public function getAllowedAccountsCount() : int;
        public function getUsernameAuth() : string;
        public function createAccount($account_name , $password , $server_id): void;
        public function changePasswordToAccounts($account_name , $old_password, $new_password , $server_id): void;
    }

?>