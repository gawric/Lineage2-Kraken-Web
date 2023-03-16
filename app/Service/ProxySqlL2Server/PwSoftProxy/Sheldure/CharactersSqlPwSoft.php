<?php

namespace App\Service\ProxySqlL2Server\PwSoftProxy\Sheldure;

use Config;
use App\Service\ProxySqlL2Server\Support\ProxyFilters\GeneralFilters;
use App\Service\ProxySqlL2Server\RusAcisProxy\Sheldure\CharactersSql;

    //используем наследование что-бы повторно использовать код из друкого developer_id
    //Этот код взят из RusAcis запросов
   class CharactersSqlPwSoft  extends CharactersSql
   {
       
            public function getPkPvpServerCharactersPwSoft($current_server_characters){
                $result =  $this->getPkPvpServerCharacters($current_server_characters);
                info("CharactersSqlPwSoft>>>>getPkPvpServerCharacters результат->");
                info(count($result));
                return $result;
            }




            public function getClanIdToClanNamePwSoft($unique_clan_id , $current_clandata_db_model){
               return $this->getClanIdToClanName($unique_clan_id , $current_clandata_db_model);
            }

          

    
            public function saveAllCharactersPwSoft($allModelCharactersPvp , $allModelCharactersPk){
                    $this->saveAllCharacters($allModelCharactersPvp , $allModelCharactersPk);
            }

   }
?>



