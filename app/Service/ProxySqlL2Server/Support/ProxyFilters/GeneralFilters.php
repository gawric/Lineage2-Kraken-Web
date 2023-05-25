<?php

namespace App\Service\ProxySqlL2Server\Support\ProxyFilters;

use Log;
use App\Service\ProxySqlL2Server\Support\SqlFilters\RusAcisFilters\SimpleFilter;
use App\Service\ProxySqlL2Server\Support\SqlFilters\RusAcisFilters\TopPkPvpFilter;
use App\Service\ProxySqlL2Server\Support\SqlFilters\RusAcisFilters\ClanDataByIdFilter;
use App\Service\ProxySqlL2Server\Support\SqlFilters\RusAcisFilters\TopUsersClansFilter;
use App\Service\ProxySqlL2Server\Support\SqlFilters\RusAcisFilters\SimpleFilterArray;
use App\Service\ProxySqlL2Server\Support\SqlFilters\SimpleFilterLike;
use Request;

    class GeneralFilters
    {
     
        private $access_list_filter;
        private $slugtest;

        public function  __construct($list_filter_in , $slugtest){
            $this->access_list_filter = $list_filter_in;
            $this->slugtest = $slugtest;
        }

        protected $filters = [
            'clandatafilter' => ClanDataByIdFilter::class,
            'simplefilter' => SimpleFilter::class,
            'toppkpvpfilter' => TopPkPvpFilter::class,
            'topusersclansfilter' => TopUsersClansFilter::class,
            'simplefilterarray' => SimpleFilterArray::class,
            'simplefilterlike' => SimpleFilterArray::class,
        ];

        public function apply($query)
        {
         
            foreach ($this->filters as $name => $value) {
                //если есть в разрешенных мы его запускаем
                if($this->inArray($this->access_list_filter , $name)){
                    $filterInstance =  $this->createObj($name);
                    return $this->query($query ,$filterInstance , $this->slugtest);
                }
          
            }

        return $query;
    }


 
    private function inArray($access_list_filter , $search_value){
        if (in_array($search_value, $access_list_filter)){
                return true;
        }
        return false;
    }
  
    private function createObj($name){
       // info("ProductFilters>apply>createObj $name");
        return $filterInstance = new $this->filters[$name];
    }

    private function query($query , $filterInstance , $slugtest){
        $query = $filterInstance($query, $slugtest);
    }



    



}

?>