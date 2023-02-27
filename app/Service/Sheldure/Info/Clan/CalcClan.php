<?php

namespace App\Service\Sheldure\Info\Clan;

use App\Service\ProxyFilters\GeneralFilters;
use App\Models\Server\ServerCharacters;
use App\Service\Sheldure\Info\Clan\SupportFunc\SupportFunc;
use Config;

    class CalcClan
    {
        private $listclassid;
        private $top_count;
        private $support;

        public function __construct() {
            $this->listclassid = Config::get('lineage2.class_id.list_class_id');
            $this->top_count = Config::get('lineage2.server.top_count');
            $this->support = new SupportFunc();
        }
     
       
        public function run($current_servers){
            //info("Runnng CalcClan!!!!!");
            $current_server_characters = $current_servers['server_db_model'];
            $current_clandata_db_model = $current_servers['clandata_db_model'];
            $current_server_id = $current_servers['id'];
            $this->getTopUsersClan($current_server_id , $current_server_characters , $current_clandata_db_model);
        }


        private function getTopUsersClan($current_server_id , $current_server_characters , $current_clandata_db_model){
           $filtersPk = new GeneralFilters(['topusersclansfilter'] , []);
           $resultCol =  $current_server_characters::filter($filtersPk)->get()->sortBy('count');
           $resultLimit = $resultCol->take($this->top_count);
           $unique_clan_id = $this->getAllUniqueClanid($resultCol);
           $arr_clan_data = $this->getClanIdToClanName($unique_clan_id , $current_clandata_db_model);
           $modelArr = $this->support->createModel($current_server_id , $resultLimit , $arr_clan_data);
           $this->saveSql($modelArr);
           //info($arr_clan_data);
         //  info($resultLimit);
           info($resultCol);
           
        } 
        private function getAllUniqueClanid($resultArr){
            return $resultArr->unique('clanid')->pluck('clanid');
        }

        private function getClanIdToClanName($unique_clan_id , $current_clandata_db_model){
            $clanidfilter = new GeneralFilters(['clandatafilter'] , $unique_clan_id);
            return  $current_clandata_db_model::filter($clanidfilter)->get(['clan_name' ,'clan_id' , 'ally_id' , 'ally_name', 'reputation_score', 'clan_level' , 'hasCastle']);
        }

        private function saveSql(&$modelArr){
            if(count($modelArr) > 0){
                foreach($modelArr as $model){
                    $model->save();
                }
            }
        }

    }

?>