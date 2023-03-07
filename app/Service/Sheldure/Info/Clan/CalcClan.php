<?php

namespace App\Service\Sheldure\Info\Clan;

use App\Models\Server\ServerCharacters;
use App\Service\Sheldure\Info\Clan\SupportFunc\SupportFunc;
use Config;
use App\Service\ProxySqlL2Server\ProxySqlServer;


    class CalcClan
    {
        private $listclassid;
        private $top_count;
        private $support;
        private ProxySqlServer $proxySql;

        public function __construct() {
            $this->listclassid = Config::get('lineage2.class_id.list_class_id');
            $this->top_count = Config::get('lineage2.server.top_count');
            $this->support = new SupportFunc();
            //$this->proxySql = new ProxySqlServer();
        }
     
       
        public function run($current_servers){
            //info("Runnng CalcClan!!!!!");
            $current_server_characters = $current_servers['server_db_model'];
            $current_clandata_db_model = $current_servers['clandata_db_model'];
            $current_server_id = $current_servers['id'];
            $server_developer_id = $current_servers['developer_id'];
            $this->proxySql = new ProxySqlServer($server_developer_id);
            
            $this->getTopUsersClan($current_server_id , $current_server_characters , $current_clandata_db_model);
        }


        private function getTopUsersClan($current_server_id , $current_server_characters , $current_clandata_db_model){
           $resultCol= $this->proxySql->getClanAllCountCharacters($current_server_characters);
           //$resultLimit =  $this->proxySql->getCountCharactersLimit($current_server_characters , $this->top_count);
           $resultLimit =  $this->proxySql->getClanCountCharactersLimit($resultCol , $current_server_characters , $this->top_count);
           $unique_clan_id = $this->getAllUniqueClanid($resultCol);
           $arr_clan_data = $this->proxySql->getClanIdToClanName($unique_clan_id , $current_clandata_db_model);
           $modelArr = $this->support->createModel($current_server_id , $resultLimit , $arr_clan_data);
           $this->proxySql->saveClanSql($modelArr);
           //info($arr_clan_data);
         //  info($resultLimit);
          // info($resultCol);
           
        } 
        private function getAllUniqueClanid($resultArr){
            if(isset($resultArr)){
                return $resultArr->unique('clanid')->pluck('clanid');
            }

            return [];
        }

       

       

    }

?>