<?php

namespace App\Service\ProxySqlL2Server\RusAcisProxy\Sheldure;

use Config;
use App\Service\ProxySqlL2Server\Support\ProxyFilters\GeneralFilters;


   class CharactersSql 
   {
       
            public function getPkServerCharacters($current_server_characters){
                $filtersPk = new GeneralFilters(['toppkfilter'] , [['pkkills', '>', 0] , ['accesslevel', '=', 0]]);
                return $current_server_characters::filter($filtersPk)->get(['obj_id', 'char_name' , 'classid' , 'clanid' , 'level' , 'pvpkills' , 'pkkills' , 'onlinetime' , 'online']);
            }

            public function getPvpServerCharacters($current_server_characters){
                $filtersPvp = new GeneralFilters(['toppvpfilter'] , [['pvpkills', '>', 0] , ['accesslevel', '=', 0]]);
                return $current_server_characters::filter($filtersPvp)->get(['obj_id', 'char_name' , 'classid' , 'clanid' , 'level' , 'pvpkills' , 'pkkills' , 'onlinetime' , 'online']);
            }

      



            public function getClanIdToClanName($unique_clan_id , $current_clandata_db_model){
                $clanidfilter = new GeneralFilters(['clandatafilter'] , $unique_clan_id);
                return  $current_clandata_db_model::filter($clanidfilter)->get(['clan_name' ,'clan_id']);
            }

          

            //insert массовая запись не сработала. Но теперь это и не нужно т.к мы ограничиваем сколько записей 
            //мы получим из игровой базы (настраиваем в конфиге!)
            private function saveSql(&$modelArr){
                if(count($modelArr) > 0){
                    foreach($modelArr as $model){
                        $model->save();
                    }
                }
            }

            public function saveAllCharacters($allModelCharactersPvp , $allModelCharactersPk){
                $this->saveSql($allModelCharactersPvp);
                $this->saveSql($allModelCharactersPk);
            }


            private function  clearTableCharactersStatic(){
                CharactersStatic::truncate();
            }
    
 
   }
?>



