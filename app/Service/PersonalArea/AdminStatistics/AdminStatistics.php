<?php

 namespace App\Service\PersonalArea\AdminStatistics;

   
 use Config;
 use App\Models\Temp\InfoAdminDashboard;
 use Lang;  
 use Illuminate\Database\Eloquent\ModelNotFoundException;
 use App\Service\Utils\FunctionSupport;
 use Carbon\Carbon;
 use App\Service\PersonalArea\AdminStatistics\Support\AdminStatisticsSqlSupport;

    class AdminStatistics implements IAdminStatistics
    {

        private $sql_support;

        public function __construct() {
                $this->sql_support = new AdminStatisticsSqlSupport();
        }

        public function getArrayDays():array{
            $size = Carbon::now()->daysInMonth;
          return $this->parceDays($size);
        }

        
        public function getDataAllCountMounth(){
            return  $this->sql_support->getDataInfoVisitStatisticsFilterRangeDay(
                Carbon::now()->startOfMonth()->format('Y-m-d'), 
                Carbon::now()->endOfMonth()->format('Y-m-d'));
        }

        public function getDataOnlyAllIp(){
            $collection = $this->sql_support->getDataInfoVisitStatisticsOnlyIp();
            return $this->convertCollection($collection);
        }

        public function getDataVisitByIpAndDate($ip_address , $date){
                return $this->sql_support->getDataInfoVisitByIpAndDate($ip_address , $date);
        }



        private function parceDays($size){
            $temp = [];
             $date = Carbon::now()->format('Y-m');

             for ($x = 1; $x <= $size; $x++) {
                 $end_data = $this->convertData($x , $date);
                 array_push($temp,$end_data);
             }

           return $temp;
        }

        private function convertData($x , $date){
            if($x < 10){
                return $enddata = $date . "-"."0".$x;
            }
            else{
                return $enddata = $date . "-".$x;
            }
        }

        private function convertCollection($collection){
           $temp =[];
           if(isset($collection) and $collection->isNotEmpty()){
                $index = 0;
                $temp = $this->push($temp , $index , $collection);
           }
            return $temp;
        }

        private function push($temp , $index , $collection){
              foreach($collection as $item){
                  $model = FunctionSupport::createModelInfoTableStatistics($index++ , $item->ip_address , $item->count , $item->day);
                  array_push($temp , $model) ;
               }

           return $temp;
        }

      

    }
?>