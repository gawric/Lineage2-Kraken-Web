<?php

namespace App\Service\ProxySqlL2Server\RusAcisProxy\Sheldure;

use Config;
use App\Service\ProxySqlL2Server\Support\ProxyFilters\GeneralFilters;
use App\Service\ProxySqlL2Server\Template\Acis\AcisTemplateTopClanSql;


   class TopClanSql extends AcisTemplateTopClanSql
   {

        public function getClanAllCountCharactersRusAcis($current_server_characters){
          return $this->getClanAllCountCharacters($current_server_characters);
        }

        public function getClanCountCharactersLimitRusAcis( $resultCol , $current_server_characters , $countLimit){
           return $this->getClanCountCharactersLimit( $resultCol , $current_server_characters , $countLimit);
        }   

        public  function saveClanSqlRusAcis(&$modelArr){
          $this->saveClanSql($modelArr);
        }

        public function getClanIdToClanNameRusAcis($unique_clan_id , $current_clandata_db_model){
           return $this->getClanIdToClanName($unique_clan_id , $current_clandata_db_model);
        }

   }
?>