<?php

namespace App\Service\ProxySqlL2Server\LuceraProxy;

use Config;
use App\Service\ProxySqlL2Server\LuceraProxy\Registration\RegSqlLucera;
use App\Service\ProxySqlL2Server\IProxy;

use App\Service\ProxySqlL2Server\LuceraProxy\Sheldure\CharactersSqlLucera;
use App\Service\ProxySqlL2Server\LuceraProxy\Sheldure\TopClanSqlLucera;


   class ProxyLucera implements IProxy
   {
        private RegSqlLucera $reg;
        private CharactersSqlLucera $charactersSql;
        private TopClanSqlLucera $topclansql;


        public function __construct() {
            $this->reg = new RegSqlLucera();
            $this->charactersSql = new CharactersSqlLucera();
            $this->topclansql = new TopClanSqlLucera();
        }

        
        public function regUser($modelAccountDb , $login , $password , $server_id , $email){
            return $this->reg->save($modelAccountDb , $login , $password , $server_id , $email);
        }

        public function isUserExistServer($modelAccountDb , $login){
            return  $this->reg->isUserExistServer($modelAccountDb , $login);
        }

        public function getPkPvpServerCharacters($current_server_characters){
            info("RUNNING Lucera getPkPvpServerCharacters");
            return $this->charactersSql->getPkPvpServerCharactersLucera($current_server_characters);
        }

        public function saveAllCharacters($allModelCharactersPvp , $allModelCharactersPk){
            info("RUNNING Lucera saveAllCharacters");
            $this->charactersSql->saveAllCharactersLucera($allModelCharactersPvp , $allModelCharactersPk);
        }

        public function getClanCountCharactersLimit($resultCol , $current_server_characters , $countLimit){
            info("RUNNING Lucera getClanCountCharactersLimit");
            return $this->topclansql->getClanCountCharactersLimitLucera($resultCol , $current_server_characters , $countLimit);
        }
        public function getClanAllCountCharacters($current_server_characters){
            info("RUNNING Lucera getClanAllCountCharacters");
            return $this->topclansql->getClanAllCountCharactersLucera($current_server_characters);
        }
        public function saveClanSql($modelArr){
            info("RUNNING Lucera saveClanSql");
            $this->topclansql->saveClanSqlLucera($modelArr);
        }
        public function getClanIdToClanName($unique_clan_id , $current_clandata_db_model){
            info("RUNNING Lucera getClanAllCountCharacters");
            return $this->topclansql->getClanIdToClanNameLucera($unique_clan_id , $current_clandata_db_model);
        }


      

 
   }
?>