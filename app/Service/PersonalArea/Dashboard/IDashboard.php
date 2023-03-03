<?php

 namespace App\Service\PersonalArea\Dashboard;


    interface IDashboard
    {
        public function getAllowedAccountsCount() : int;
        public function getUsernameAuth() : string;
    }

?>