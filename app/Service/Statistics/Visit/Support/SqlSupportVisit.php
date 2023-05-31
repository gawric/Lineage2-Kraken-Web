<?php

   namespace App\Service\Statistics\Visit\Support;

   use App\Models\Statistics\InfoAllStatistics;
   use App\Models\Statistics\InfoVisitStatistics;
   use App\Models\Statistics\User\Accounts_ExpansionStatistics;



    class SqlSupportVisit
    {
      
        public function getStatisticsByDate($date){
            $result = InfoAllStatistics::whereDate('created_at', '=', $date)->get();
            return $this->parceResult($result , $date);
        }

        private function parceResult($result , $date){
            if($result->isNotEmpty()){
                return $result->first();
            }
            else{
                return $this->createStatistics($date);
            }

        }

        private function createStatistics($date){
                $model = new InfoAllStatistics();
                $model->created_at = $date;
                $model->updated_at = $date;
                $model->save();

                return $model;
        }

        public function clearTableVisit($number_clear){
           // info("clearTableVisit");
           // info(InfoVisitStatistics::count());
           // info($number_clear);

            if(InfoVisitStatistics::count() >= $number_clear){
               // info("clearTableVisit " . " сработало полное очищение статистики");
                InfoVisitStatistics::truncate(); 
            } 
        }

        public function clearTableUser($number_clear){
            if(Accounts_ExpansionStatistics::count() >= $number_clear){
               // info("clearTableUser " . " сработало полное очищение статистики");
                Accounts_ExpansionStatistics::truncate(); 
            } 
        }


       
    }
?>