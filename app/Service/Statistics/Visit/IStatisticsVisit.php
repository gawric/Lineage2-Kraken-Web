<?php

   namespace App\Service\Statistics\Visit;
   use App\Models\Statistics\InfoVisitStatistics;
   use App\Models\Statistics\User\Accounts_ExpansionStatistics;

    interface IStatisticsVisit
    {
        public function getAllStatisticsModelByDate($date);
        
        public function addVisitStatistics($all_statistics_id , InfoVisitStatistics $visit_statistics);
        public function addUserStatistics($all_statistics_id , Accounts_ExpansionStatistics $user_statistics);

        public function clearTableVisit($number_clear);
        public function clearTableUser($number_clear);
 
    }

?>