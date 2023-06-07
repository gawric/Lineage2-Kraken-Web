<?php

 namespace App\Service\PersonalArea\AdminStatistics;


    interface IAdminStatistics
    {
        public function getArrayDays():array;
        public function getDataAllCountMounth();
        public function getDataOnlyAllIp();
        public function getDataVisitByIpAndDate($ip_address , $date);

        public function getDataUserAllCountMounth();
        public function getDataUserOnlyAllIp();
        public function getDataUserByIpAndDate($ip_address , $date , $accounts_expansion_id);
    }

?>