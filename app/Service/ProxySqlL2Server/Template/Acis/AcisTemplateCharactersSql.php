<?php

namespace App\Service\ProxySqlL2Server\Template\Acis;

use Config;
use App\Service\ProxySqlL2Server\Support\ProxyFilters\GeneralFilters;


   class AcisTemplateCharactersSql 
   {
       
            public function getPkPvpServerCharacters($current_server_characters){
                $filtersPk = new GeneralFilters(['toppkpvpfilter'] , []);
                return $current_server_characters::filter($filtersPk)->get(['obj_id', 'char_name' , 'classid' , 'clanid' , 'level' , 'pvpkills' , 'pkkills' , 'onlinetime' , 'online']);
            }




            public function getClanIdToClanName($unique_clan_id , $current_clandata_db_model){
                $clanidfilter = new GeneralFilters(['clandatafilter'] , $unique_clan_id);
                return  $current_clandata_db_model::filter($clanidfilter)->get(['clan_name' ,'clan_id']);
            }

          

    
            public function saveAllCharacters($allModelCharactersPvp , $allModelCharactersPk){

              //  info('CharactersSql->saveAllCharacters');
              //  info(count($allModelCharactersPvp));
              //  info(count($allModelCharactersPk));

                $this->saveSql($allModelCharactersPk);
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



            private function  clearTableCharactersStatic(){
                CharactersStatic::truncate();
            }
    
 
   }
?>