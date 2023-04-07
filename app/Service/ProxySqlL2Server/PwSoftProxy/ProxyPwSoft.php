<?php

namespace App\Service\ProxySqlL2Server\PwSoftProxy;

use Config;
use App\Service\ProxySqlL2Server\PwSoftProxy\Registration\RegSqlPwSoft;
use App\Service\ProxySqlL2Server\IProxy;
use App\Service\ProxySqlL2Server\PwSoftProxy\Sheldure\CharactersSqlPwSoft;
use App\Service\ProxySqlL2Server\PwSoftProxy\Sheldure\TopClanSqlPwSoft;
use App\Models\Temp\InfoDashboard;
use App\Service\ProxySqlL2Server\PwSoftProxy\PersonArea\Accounts\AccountsSqlPwSoft;
use App\Service\ProxySqlL2Server\PwSoftProxy\PersonArea\Characters\CharactersPwSoft;
use App\Service\ProxySqlL2Server\Support\CommonFunction\CommonSql;

    //этот класс как и все прокси являются синглтонами
   class ProxyPwSoft implements IProxy
   {
        private RegSqlPwSoft $reg;
        private CharactersSqlPwSoft $charactersSql;
        private TopClanSqlPwSoft $topclansql;
        private AccountsSqlPwSoft $accountssql;
        private CharactersPwSoft $characters;
        private CommonSql $commonSql;

        public function __construct() {
            $this->reg = new RegSqlPwSoft();
            $this->charactersSql = new CharactersSqlPwSoft();
            $this->topclansql = new TopClanSqlPwSoft();
            $this->accountssql = new AccountsSqlPwSoft();
            $this->characters = new CharactersPwSoft();
            $this->commonSql = new CommonSql();
        }

        
        public function regUser($modelAccountDb , $login , $password , $server_id , $email){
            return $this->reg->save($modelAccountDb , $login , $password , $server_id , $email);
        }

        public function changePassAccount($modelAccountDb , $login, $old_password , $new_password){
            $this->accountssql->changePassAccountLucera($modelAccountDb , $login, $old_password , $new_password);
        }

        public function createAccount($modelAccountDb , $auth_user_id , $account_name , $password , $server_id , $server_name ): InfoDashboard{
            return  $this->accountssql->createAccountLucera($modelAccountDb , $auth_user_id , $account_name , $password , $server_id , $server_name);
        }

        public function isUserExistServer($modelAccountDb , $login){
            return  $this->reg->isUserExistServer($modelAccountDb , $login);
        }

        public function getPkPvpServerCharacters($current_server_characters){
           // info("RUNNING ProxyPwSoft getPkPvpServerCharacters");
            return $this->charactersSql->getPkPvpServerCharactersPwSoft($current_server_characters);
        }

        public function saveAllCharacters($allModelCharactersPvp , $allModelCharactersPk){
            //info("RUNNING ProxyPwSoft saveAllCharacters");
            $this->charactersSql->saveAllCharactersPwSoft($allModelCharactersPvp , $allModelCharactersPk);
        }

        public function getClanCountCharactersLimit($resultCol , $current_server_characters , $countLimit){
           // info("RUNNING ProxyPwSoft getClanCountCharactersLimit");
            return $this->topclansql->getClanCountCharactersLimitPwSoft($resultCol , $current_server_characters , $countLimit);
        }
        public function getClanAllCountCharacters($current_server_characters){
            //info("RUNNING ProxyPwSoft getClanAllCountCharacters");
            return $this->topclansql->getClanAllCountCharactersPwSoft($current_server_characters);
        }
        public function saveClanSql($modelArr){
            //info("RUNNING ProxyPwSoft saveClanSql");
            $this->topclansql->saveClanSqlPwSoft($modelArr);
        }
        public function getClanIdToClanName($unique_clan_id , $current_clandata_db_model){
           // info("RUNNING ProxyPwSoft getClanAllCountCharacters");
            return $this->topclansql->getClanIdToClanNamePwSoft($unique_clan_id , $current_clandata_db_model);
        }

        public function getAllChars($server_name, $auth_user_id , $modelCharactersDb , $server_id){
           return  $this->characters->getAllCharsPwSoft($server_name , $auth_user_id , $modelCharactersDb , $server_id);
        }

        public function getAccountsExpansionByCharName($modelAccountDb , $modelCharactersDb , $char_name){
            return $this->commonSql->getAccountsExpansionByCharNameCommon($modelAccountDb , $modelCharactersDb , $char_name);
        }

 
   }
?>