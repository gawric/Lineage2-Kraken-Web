<?php

 namespace App\Service\PersonalArea\AdminStatistics;

   
 use Config;
 use App\Models\Temp\InfoAdminDashboard;
 use Lang;  
 use Illuminate\Database\Eloquent\ModelNotFoundException;
 use App\Service\Utils\FunctionSupport;
 use App\Service\Utils\FunctionOtherUser;
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

        public function getDataUserAllCountMounth(){
            return  $this->sql_support->getDataInfoUserStatisticsFilterRangeDay(
                Carbon::now()->startOfMonth()->format('Y-m-d'), 
                Carbon::now()->endOfMonth()->format('Y-m-d'));
        }

        public function getDataOnlyAllIp(){
            $collection = $this->sql_support->getDataInfoVisitStatisticsOnlyIp();
            //dd($collection);
            return $this->convertCollection($collection);
        }

        public function getDataUserOnlyAllIp(){
            $collection = $this->sql_support->getDataInfoUserStatisticsOnlyIp();
           // dd($collection);
            return $this->convertCollection($collection);
        }

        public function getDataVisitByIpAndDate($ip_address , $date){
                return $this->sql_support->getDataInfoVisitByIpAndDate($ip_address , $date);
        }

        public function getDataUserByIpAndDate($ip_address , $date , $accounts_expansion_id){
            return $this->sql_support->getDataInfoUserByIpAndDate($ip_address , $date , $accounts_expansion_id);
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
                if($item->count > 1){
                    if(isset($item->accounts_expansion_id)){

                        $user = $this->sql_support->getAccountExpansionById($item->accounts_expansion_id);
                        
                        if(isset($user) and !is_array($user)){
                            $this->add($temp , $index , $item , $user->login , $item->accounts_expansion_id);
                        }
                        
                    }
                    else{
                        $this->add($temp , $index , $item , "non" , -1);
                    }
                }
               }

           return $temp;
        }

        private function add(&$temp , &$index , $item , $login , $accounts_expansion_id){
            $model = FunctionSupport::createModelInfoTableStatistics($index++ , $item->ip_address , $item->count , $item->day , $login , $accounts_expansion_id);
            array_push($temp , $model) ;
        }

      

    }
?>