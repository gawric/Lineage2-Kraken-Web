<?php

namespace App\Service\ProxySqlL2Server\RusAcisProxy;

use Config;
use App\Service\ProxySqlL2Server\RusAcisProxy\Registration\RegSql;
use App\Service\ProxySqlL2Server\RusAcisProxy\Sheldure\CharactersSql;
use App\Service\ProxySqlL2Server\IProxy;
use App\Service\ProxySqlL2Server\RusAcisProxy\Sheldure\TopClanSql;
use App\Models\Temp\InfoDashboard;

   class ProxyServerAcis implements IProxy
   {
        private RegSql $reg;
        private CharactersSql $charactersSql;
        private TopClanSql $topclansql;


        public function __construct() {
             $this->reg = new RegSql();
             $this->charactersSql = new CharactersSql();
             $this->topclansql = new TopClanSql();
        }

        
        public function regUser($modelAccountDb , $login , $password , $server_id , $email){
            return $this->reg->saveRusAcis($modelAccountDb , $login , $password , $server_id , $email);
        }

        public function changePassAccount($modelAccountDb , $login, $old_password , $new_password){
           
        }

        public function createAccount($modelAccountDb , $auth_user_id , $account_name , $password , $server_id , $server_name ): InfoDashboard{

        }

        public function isUserExistServer($modelAccountDb , $login){
           return  $this->reg->isUserExistServerRusAcis($modelAccountDb , $login);
        }

        public function getPkPvpServerCharacters($current_server_characters){
            return $this->charactersSql->getPkPvpServerCharactersRusAcis($current_server_characters);
        }


        public function saveAllCharacters($allModelCharactersPvp , $allModelCharactersPk){
            $this->charactersSql->saveAllCharactersRusAcis($allModelCharactersPvp , $allModelCharactersPk);
        }

        public function getClanCountCharactersLimit($resultCol , $current_server_characters , $countLimit){
            return $this->topclansql->getClanCountCharactersLimitRusAcis($resultCol , $current_server_characters , $countLimit);
        }
        public function getClanAllCountCharacters($current_server_characters){
            //info("RUNNING RUSAcis getClanAllCountCharacters");
            return $this->topclansql->getClanAllCountCharactersRusAcis($current_server_characters);
        }
        public function saveClanSql($modelArr){
            $this->topclansql->saveClanSqlRusAcis($modelArr);
        }
        public function getClanIdToClanName($unique_clan_id , $current_clandata_db_model){
            return $this->topclansql->getClanIdToClanNameRusAcis($unique_clan_id , $current_clandata_db_model);
        }


      

 
   }
?>