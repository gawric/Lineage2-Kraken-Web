<?php

namespace App\Service\ProxySqlL2Server\RusAcisProxy;

use Config;
use App\Service\ProxySqlL2Server\RusAcisProxy\Registration\RegSql;
use App\Service\ProxySqlL2Server\RusAcisProxy\Sheldure\CharactersSql;
use App\Service\ProxySqlL2Server\IProxy;
use App\Service\ProxySqlL2Server\RusAcisProxy\Sheldure\TopClanSql;
use App\Models\Temp\InfoDashboard;
use App\Service\ProxySqlL2Server\RusAcisProxy\PersonArea\Accounts\AccountsSqlRusAcis;
use App\Service\ProxySqlL2Server\RusAcisProxy\PersonArea\Characters\CharactersRusAcis;
use App\Service\ProxySqlL2Server\RusAcisProxy\PersonArea\Characters\ItemsRusAcis;
use App\Service\ProxySqlL2Server\Support\CommonFunction\CommonSql;

   class ProxyServerAcis implements IProxy
   {
        private RegSql $reg;
        private CharactersSql $charactersSql;
        private TopClanSql $topclansql;
        private AccountsSqlRusAcis $accountssql;
        private CharactersRusAcis $characters;
        private CommonSql $commonSql;
        private ItemsRusAcis $itemssql;

        public function __construct() {
             $this->reg = new RegSql();
             $this->charactersSql = new CharactersSql();
             $this->topclansql = new TopClanSql();
             $this->accountssql = new AccountsSqlRusAcis();
             $this->characters = new CharactersRusAcis();
             $this->commonSql = new CommonSql();
             $this->itemssql = new ItemsRusAcis();
        }

        
        public function regUser($modelAccountDb , $login , $password , $server_id , $email){
            return $this->reg->saveRusAcis($modelAccountDb , $login , $password , $server_id , $email);
        }

        public function changePassAccount($modelAccountDb , $login, $old_password , $new_password){
           $this->accountssql->changePassAccountRusAcis($modelAccountDb , $login, $old_password , $new_password);
        }

        public function createAccount($modelAccountDb , $auth_user_id , $account_name , $password , $server_id , $server_name ): InfoDashboard{
            return $this->accountssql->createAccountRusAcis($modelAccountDb , $auth_user_id , $account_name , $password , $server_id , $server_name );
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
        public function getAllChars($server_name, $auth_user_id , $modelCharactersDb , $server_id){
            return $this->characters->getAllCharsRusAcis($server_name , $auth_user_id , $modelCharactersDb , $server_id);
        }


        public function getAccountsExpansionByCharName($modelAccountDb , $modelCharactersDb , $char_name){
            return $this->commonSql->getAccountsExpansionByCharNameCommon($modelAccountDb , $modelCharactersDb , $char_name);
        }

        public function addL2Item($modelItemsDb , $charactersDb , $char_name , $item_id, $count){
            $owner_id  = $this->commonSql->getObjIdByCharName($charactersDb , $char_name);
            info("addL2Item" .  $owner_id);
            if(isset($owner_id) and isset($owner_id->obj_Id)){
                $this->itemssql->addL2itemRusAcis($modelItemsDb , $char_name , $item_id, $count , $owner_id->obj_Id);
            }
            
        }

      

 
   }
?>