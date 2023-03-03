<?php

namespace App\Service\ProxySqlL2Server\RusAcisProxy;

use Config;
use App\Service\ProxySqlL2Server\RusAcisProxy\Registration\RegSql;
use App\Service\ProxySqlL2Server\RusAcisProxy\Sheldure\CharactersSql;
use App\Service\ProxySqlL2Server\IProxy;

   class ProxyServerAcis implements IProxy
   {
        private RegSql $reg;
        private CharactersSql $charactersSql;
        private TopClanSql $topclansql;


        public function __construct() {
             $this->reg = new RegSql();
             $this->charactersSql = new CharactersSql();
        }

        public function regUser($modelAccountDb , $login , $password , $server_id , $email){
            $this->reg->save($modelAccountDb , $login , $password , $server_id , $email);
        }

        public function isUserExistServer($modelAccountDb , $login){
           return  $this->reg->isUserExistServer($modelAccountDb , $login);
        }




        public function getPkServerCharacters($current_server_characters){
            $this->charactersSql->getPkServerCharacters($current_server_characters);
        }

        public function getPvpServerCharacters($current_server_characters){
            $this->charactersSql->getPvpServerCharacters($current_server_characters);
        }

        public function saveAllCharacters($allModelCharactersPvp , $allModelCharactersPk){
            $this->charactersSql->saveAllCharacters($allModelCharactersPvp , $allModelCharactersPk);
        }




        public function getClanCountCharactersLimit($current_server_characters , $countLimit){
            $this->topclansql->getClanCountCharactersLimit($current_server_characters , $countLimit);
        }
        public function getClanAllCountCharacters(){
            $this->topclansql->getClanAllCountCharacters();
        }
        public function saveClanSql($modelArr){
            $this->topclansql->saveClanSql($modelArr);
        }
        public function getClanIdToClanName($unique_clan_id , $current_clandata_db_model){
            $this->topclansql->getClanIdToClanName($unique_clan_id , $current_clandata_db_model);
        }
 
   }
?>