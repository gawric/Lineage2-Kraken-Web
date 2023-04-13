<?php

namespace App\Service\ProxySqlL2Server\LuceraProxy\Sheldure;

use Config;
use App\Service\ProxySqlL2Server\Support\ProxyFilters\GeneralFilters;
use App\Service\ProxySqlL2Server\Template\Acis\AcisTemplateCharactersSql;


   class CharactersSqlLucera  extends AcisTemplateCharactersSql
   {
       
            public function getPkPvpServerCharactersLucera($current_server_characters){
                $filtersPk = new GeneralFilters(['toppkpvpfilter'] , []);
                $result =  $current_server_characters::filter($filtersPk)->get(['charId as obj_id', 'char_name' , 'classid' , 'clanid' , 'level' , 'pvpkills' , 'pkkills' , 'onlinetime' , 'online']);
                $this->convertNullTo0($result);
                return $result;
            }



            public function getClanIdToClanNameLucera($unique_clan_id , $current_clandata_db_model){
               return $this->getClanIdToClanName($unique_clan_id , $current_clandata_db_model);
            }

          

    
            public function saveAllCharactersLucera($allModelCharactersPvp , $allModelCharactersPk){
                    $this->saveAllCharacters($allModelCharactersPvp , $allModelCharactersPk);
            }


            private function convertNullTo0($modelArr){
                if(count($modelArr) > 0){
                    $arr_field_clear = ['onlinetime' , 'online' ,  'pvpkills' , 'pkkills' , 'clanid' ];
                    $this->clearNull($arr_field_clear , $modelArr);
                }
            }
    
            private function clearNull($arr_field_clear , $modelArr){
                foreach($arr_field_clear as $field_name){
                    foreach($modelArr as $model){
                        if(is_null($model[$field_name])){
                            $model[$field_name] = 0;
                        }
                    }
                }
            }

   }
?>

