<?php

 namespace App\Service\PersonalArea\AdminDashboard;


    interface IAdminDashboard
    {
        public function getListAllInfoAdminDashboard($all_users):array;
        public function blockAccountExpansionAndAllAccounts($account_expansion_id);
    }

?>