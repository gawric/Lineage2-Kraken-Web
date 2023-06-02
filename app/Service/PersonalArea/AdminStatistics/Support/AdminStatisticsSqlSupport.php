<?php

namespace App\Service\PersonalArea\AdminStatistics\Support;

use App\Service\ProxySqlL2Server\Support\ProxyFilters\GeneralFilters;
use App\Models\Temp\InfoDashboard;
use App\Service\Utils\FunctionSupport;
use App\Models\Accounts_expansion;
use Config;
use App\Models\Statistics\InfoVisitStatistics;
use DB;

    class AdminStatisticsSqlSupport
    {


        public function __construct()
        {

        }
       
        //Группируем по дням и количеству записей в этом дне
        //Фильтруем по заданной дате
        //возвращем к примеру DAY 2023-06-01 COUNT 5,DAY 2023-06-02 COUNT 15
     public function getDataInfoVisitStatisticsFilterRangeDay($begin_data , $end_data){
         if(isset($begin_data) and isset($end_data)){
            return InfoVisitStatistics::select(DB::raw('DATE(created_at) as day'), DB::raw('COUNT(DISTINCT(ip_address)) as count'))
                    ->where('created_at', '>=', $begin_data)
                    ->where('created_at', '<=', $end_data)
                    ->groupBy(DB::raw('DATE(created_at)'))
                    ->orderBy(DB::raw('day'))
                    ->get();
         }

         return collect([]);
     }

     public function getDataInfoVisitStatisticsOnlyIp(){
        return InfoVisitStatistics::select(DB::raw('ip_address'),DB::raw('COUNT(ip_address) as count') , DB::raw('DATE(created_at) as day'))
        ->groupBy(DB::raw('ip_address') , DB::raw('DATE(created_at)'))
        ->orderBy(DB::raw('ip_address'))
        ->orderBy(DB::raw('day'))
        ->get();
     }

     public function getDataInfoVisitByIpAndDate($ip_address , $date){
        return InfoVisitStatistics::where('ip_address', '=', $ip_address)
        ->whereDate('created_at', $date)
        ->orderBy(DB::raw('created_at'))
        ->get();
     }


        
    }

?>