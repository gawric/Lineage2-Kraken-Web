<?php

namespace App\Service\ProxySqlL2Server\LuceraProxy;

use Config;
use App\Service\ProxySqlL2Server\LuceraProxy\Registration\RegSqlLucera;
use App\Service\ProxySqlL2Server\IProxy;
use App\Service\ProxySqlL2Server\LuceraProxy\PersonArea\Accounts\AccountsSqlLucera;
use App\Service\ProxySqlL2Server\LuceraProxy\Sheldure\CharactersSqlLucera;
use App\Service\ProxySqlL2Server\LuceraProxy\Sheldure\TopClanSqlLucera;
use App\Models\Temp\InfoDashboard;
use App\Service\ProxySqlL2Server\LuceraProxy\PersonArea\Characters\CharactersLucera;
use App\Service\ProxySqlL2Server\Support\CommonFunction\CommonSql;
use App\Service\ProxySqlL2Server\LuceraProxy\PersonArea\Characters\ItemsLucera;
use Exception;

   class ProxyLucera implements IProxy
   {
        private RegSqlLucera $reg;
        private CharactersSqlLucera $charactersSql;
        private TopClanSqlLucera $topclansql;
        private AccountsSqlLucera $accountssql;
        private CharactersLucera $characters;
        private CommonSql $commonSql;
        private ItemsLucera $itemssql;


        public function __construct() {
            $this->reg = new RegSqlLucera();
            $this->charactersSql = new CharactersSqlLucera();
            $this->topclansql = new TopClanSqlLucera();
            $this->accountssql = new AccountsSqlLucera();
            $this->characters = new CharactersLucera();
            $this->commonSql = new CommonSql();
            $this->itemssql = new ItemsLucera();
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
           // info("RUNNING Lucera getPkPvpServerCharacters");
            return $this->charactersSql->getPkPvpServerCharactersLucera($current_server_characters);
        }

        public function saveAllCharacters($allModelCharactersPvp , $allModelCharactersPk){
           // info("RUNNING Lucera saveAllCharacters");
            $this->charactersSql->saveAllCharactersLucera($allModelCharactersPvp , $allModelCharactersPk);
        }

        public function getClanCountCharactersLimit($resultCol , $current_server_characters , $countLimit){
            //info("RUNNING Lucera getClanCountCharactersLimit");
            return $this->topclansql->getClanCountCharactersLimitLucera($resultCol , $current_server_characters , $countLimit);
        }
        public function getClanAllCountCharacters($current_server_characters){
           // info("RUNNING Lucera getClanAllCountCharacters");
            return $this->topclansql->getClanAllCountCharactersLucera($current_server_characters);
        }
        public function saveClanSql($modelArr){
            //info("RUNNING Lucera saveClanSql");
            $this->topclansql->saveClanSqlLucera($modelArr);
        }
        public function getClanIdToClanName($unique_clan_id , $current_clandata_db_model){
            //info("RUNNING Lucera getClanAllCountCharacters");
            return $this->topclansql->getClanIdToClanNameLucera($unique_clan_id , $current_clandata_db_model);
        }

        public function getAllChars($server_name, $auth_user_id , $modelCharactersDb , $server_id){
            return $this->characters->getAllCharsLucera($server_name , $auth_user_id , $modelCharactersDb , $server_id);
        }


        public function getAccountsExpansionByCharName($modelAccountDb , $modelCharactersDb , $char_name){
            return $this->commonSql->getAccountsExpansionByCharNameCommon($modelAccountDb , $modelCharactersDb , $char_name);
        }
        //throw new Exception( 'File not found');  будем выбрасывать если найдем 
        public function addL2Item($modelItemsDb , $charactersDb  , $char_name , $item_id, $count){
            $owner_id  = $this->charactersSql->getObjIdByCharNameLucera($charactersDb , $char_name);
            //info("addL2Item>>>> ProxyLucera " . $owner_id);
            if(isset($owner_id) and isset($owner_id->obj_Id)){
                $this->itemssql->addL2itemLucera($modelItemsDb , $char_name , $item_id, $count , $owner_id->obj_Id);
            }
            else{
                info("ProxyLucera: AddL2item не критическая ошибка. Не смогли найти пользователя для добавления item char_name: " . $char_name);
                throw new Exception( 'characters not found obj_id by char_name'); 
            }
        }

        public function blockAccount($modelAccounts , $blockLogin){
            info("ProxyLucera: blockAccount");
        }

      

 
   }
?>