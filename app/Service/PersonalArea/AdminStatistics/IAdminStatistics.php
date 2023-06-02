<?php

 namespace App\Service\PersonalArea\AdminStatistics;


    interface IAdminStatistics
    {
        public function getArrayDays():array;
        public function getDataAllCountMounth();
        public function getDataOnlyAllIp();
        public function getDataVisitByIpAndDate($ip_address , $date);
    }

?>