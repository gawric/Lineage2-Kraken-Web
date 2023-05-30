<?php

   namespace App\Service\Statistics\Visit;


    interface IStatisticsVisit
    {
        public function getStatisticsIdByDate($date);
        public function createStatistics($date);
    }

?>