<?php

namespace App\Service\ProxySqlL2Server\RusAcisProxy\Sheldure;

use Config;
use App\Service\ProxySqlL2Server\Support\ProxyFilters\GeneralFilters;


   class TopClanSql 
   {

        public function getClanAllCountCharacters($current_server_characters){
            $filtersPk = new GeneralFilters(['topusersclansfilter'] , []);
            $resultCol =  $current_server_characters::filter($filtersPk)->get()->sortBy('count');
           // info("TopClanSql->getClanAllCountCharacters");
            //info( $resultCol );
            //info("current_server_characters  $current_server_characters" );
            return $resultCol;
        }
        public function getClanCountCharactersLimit( $resultCol , $current_server_characters , $countLimit){
            if(isset($resultCol)){
                return  $resultLimit = $resultCol->take($countLimit);
            }
           
            return [];
        }   

        public  function saveClanSql(&$modelArr){
           // info('TopClanSql->');
           // info(count($modelArr));
           // info($modelArr);
            if(count($modelArr) > 0){
                foreach($modelArr as $model){
                    $model->save();
                }
            }
            info("Save Clan Sql Done");
        }

        public function getClanIdToClanName($unique_clan_id , $current_clandata_db_model){
            $clanidfilter = new GeneralFilters(['clandatafilter'] , $unique_clan_id);
            return  $current_clandata_db_model::filter($clanidfilter)->get(['clan_name' ,'clan_id' , 'ally_id' , 'ally_name', 'reputation_score', 'clan_level' , 'hasCastle']);
        }

        private function  clearTableClanStatic(){
            ClanStatic::truncate();
        }

    
   }
?>