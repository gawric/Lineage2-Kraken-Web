<?php

namespace App\Service\Sheldure\Info\Clan;

use App\Service\ProxyFilters\GeneralFilters;
use App\Models\Server\ServerCharacters;

use Config;

    class CalcClan
    {
        private $listclassid;

        public function __construct() {
            $this->listclassid = Config::get('lineage2.class_id.list_class_id');

        }
     
       
        public function run(){
            info("Runnng CalcClan!!!!!");
            $this->getTopUsersClan();
        }


        private function getTopUsersClan(){
            $filtersPk = new GeneralFilters(['topusersclansfilter'] , []);
            ServerCharacters::filter($filtersPk)->get();
        }

    }

?>