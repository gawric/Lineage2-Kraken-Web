<?php

   namespace App\Service\Statistics\Visit;

   use App\Models\Statistics\InfoAllStatistics;
   use App\Service\Statistics\Visit\Support\SqlSupportVisit;
   use App\Models\Statistics\InfoVisitStatistics;
   use App\Models\Statistics\User\Accounts_ExpansionStatistics;

    class StatisticsVisit implements IStatisticsVisit
    {

        private SqlSupportVisit $sqlvisit;

        public function __construct() {
            $this->sqlvisit = new SqlSupportVisit();
        }

        public function getAllStatisticsModelByDate($date){
            return $this->sqlvisit->getStatisticsByDate($date);
        }

        //не используем поиск по ip или как то еще. Просто вставляем всех кто посетил даже если это тот же ip
        //все ради того что-бы максимально быстро собрать статистику.
        public function addVisitStatistics($all_statistics_id , InfoVisitStatistics $visit_statistics){
            $visit_statistics->count_visit = 1;
            $visit_statistics->all_statistics_id = $all_statistics_id;
            $visit_statistics->save();
        }

         //не используем поиск по ip или как то еще. Просто вставляем всех кто посетил даже если это тот же ip
        //все ради того что-бы максимально быстро собрать статистику.
        public function addUserStatistics($all_statistics_id , Accounts_ExpansionStatistics $user_statistics){
            $user_statistics->all_statistics_id = $all_statistics_id;
            $user_statistics->save();
        }


        public function clearTableVisit($number_clear){
            $this->sqlvisit->clearTableVisit($number_clear);
        }

        public function clearTableUser($number_clear){
            $this->sqlvisit->clearTableUser($number_clear);
        }

   


       
    }
?>