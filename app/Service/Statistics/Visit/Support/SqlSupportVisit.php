<?php

   namespace App\Service\Statistics\Visit\Support;

   use App\Models\Statistics\InfoAllStatistics;



    class SqlSupportVisit
    {
      
        public function getStatisticsByDate($date){
            $result = InfoAllStatistics::whereDate('created_at', '=', $date)->get();
            return $this->parceResult($result);
        }

        private function parceResult($result){
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

                return $model->id;
        }


       
    }
?>