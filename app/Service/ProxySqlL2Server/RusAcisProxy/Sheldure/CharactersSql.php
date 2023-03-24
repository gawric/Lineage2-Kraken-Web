<?php

namespace App\Service\ProxySqlL2Server\RusAcisProxy\Sheldure;

use Config;
use App\Service\ProxySqlL2Server\Support\ProxyFilters\GeneralFilters;
use App\Service\ProxySqlL2Server\Template\Acis\AcisTemplateCharactersSql;

   class CharactersSql extends AcisTemplateCharactersSql
   {
       
            public function getPkPvpServerCharactersRusAcis($current_server_characters){
                return $this->getPkPvpServerCharacters($current_server_characters);
            }

            public function getClanIdToClanNameRusAcis($unique_clan_id , $current_clandata_db_model){
                return getClanIdToClanName($unique_clan_id , $current_clandata_db_model);
            }

          
            public function saveAllCharactersRusAcis($allModelCharactersPvp , $allModelCharactersPk){

              //  info('CharactersSql->saveAllCharacters');
              //  info(count($allModelCharactersPvp));
              //  info(count($allModelCharactersPk));

                $this->saveAllCharacters($allModelCharactersPvp , $allModelCharactersPk);
            }

   }
?>



