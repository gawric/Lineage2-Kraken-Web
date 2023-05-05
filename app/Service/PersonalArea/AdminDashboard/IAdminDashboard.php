<?php

 namespace App\Service\PersonalArea\AdminDashboard;


    interface IAdminDashboard
    {
        public function getListAllInfoAdminDashboard($all_users):array;
        public function blockAccountExpansion($account_expansion_id);
        public function unblockAccountExpansion($account_expansion_id);

        public function blockAllAccountsServer($all_accounts_server);
        public function unblockAllAccountsServer($all_accounts_server);
    }

?>