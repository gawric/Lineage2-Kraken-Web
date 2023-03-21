<?php

namespace App\Service\ProxySqlL2Server\LuceraProxy\Sheldure;

use Config;
use App\Service\ProxySqlL2Server\Support\ProxyFilters\GeneralFilters;
use App\Service\ProxySqlL2Server\RusAcisProxy\Sheldure\TopClanSql;


   class TopClanSqlLucera  extends TopClanSql
   {
        public function getClanAllCountCharactersLucera($current_server_characters){
           return $this->getClanAllCountCharacters($current_server_characters);
        }
        public function getClanCountCharactersLimitLucera( $resultCol , $current_server_characters , $countLimit){
         return $this->getClanCountCharactersLimit( $resultCol , $current_server_characters , $countLimit);
        }   

        public  function saveClanSqlLucera(&$modelArr){
            $this->convertNullToFalse($modelArr);
            $this->saveClanSql($modelArr);
        }

        private function convertNullToFalse($modelArr){
            if(count($modelArr) > 0){
                $arr_field_clear = ['hasCastle' , 'ally_id' ,  'clan_level' , 'clan_name' ];
                $this->clearNull($arr_field_clear , $modelArr);
            }
        }

        private function clearNull($arr_field_clear , $modelArr){
            foreach($arr_field_clear as $field_name){
                foreach($modelArr as $model){
                    if(is_null($model[$field_name])){
                        $model[$field_name] = false;
                    }
                }
            }
        }

        
        public function getClanIdToClanNameLucera($unique_clan_id , $current_clandata_db_model){
            return $this->getClanIdToClanName($unique_clan_id , $current_clandata_db_model);
        }

   }
?>