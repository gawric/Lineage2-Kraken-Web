<?php

   namespace App\Service\Statistics\Visit;
   use App\Models\Statistics\InfoVisitStatistics;

    interface IStatisticsVisit
    {
        public function getAllStatisticsModelByDate($date);
        public function addVisitStatistics($all_statistics_id , InfoVisitStatistics $visit_statistics);
 
    }

?>