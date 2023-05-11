<?php

namespace App\Service\ProxySqlL2Server;

use Config;
use App\Service\ProxySqlL2Server\RusAcisProxy\ProxyServerAcis;
use App\Service\ProxySqlL2Server\Support\SelectServerById;
use App\Models\Temp\InfoDashboard;

   class ProxySqlServer
   {
        private $developer_id;
        private $select_server;
        private $proxy_server;

        public function __construct($developer_id) {
            $this->developer_id = $developer_id;
           // info("Id номер созданного обьекта!");
            $this->proxy_server = $this->getProxy($this->developer_id);
           // info("developer_id $developer_id");
           // info(get_class($this->proxy_server));
           // info(spl_object_id($this->proxy_server));
        }
    
        public function regUser($modelAccountDb , $login , $password , $server_id , $email){
            return $this->proxy_server->regUser($modelAccountDb , $login , $password , $server_id , $email);
        }

        public function isUserExistServer($modelAccountDb , $login){
           return $this->proxy_server->isUserExistServer($modelAccountDb , $login);
        }

        public function changePassAccount($modelAccountDb , $login, $old_password , $new_password){
            $this->proxy_server->changePassAccount($modelAccountDb , $login, $old_password , $new_password);
        }

        public function createAccount($modelAccountDb , $auth_user_id , $account_name , $password , $server_id , $server_name ): InfoDashboard{
         return $this->proxy_server->createAccount($modelAccountDb , $auth_user_id , $account_name , $password , $server_id , $server_name );
     }

        public function getPkPvpServerCharacters($current_server_characters){
           // info("developer_id $this->developer_id" );
            //info("getPkPvpServerCharacters -> RUNNING");
            //info(spl_object_id($this->proxy_server));

          return  $this->proxy_server->getPkPvpServerCharacters($current_server_characters);
        }

        public function saveClanSql($modelArr){
           $this->proxy_server->saveClanSql($modelArr);
        }
        public function saveAllCharacters($allModelCharactersPvp , $allModelCharactersPk){
           $this->proxy_server->saveAllCharacters($allModelCharactersPvp , $allModelCharactersPk);
        }

        public function getClanIdToClanName($unique_clan_id , $current_clandata_db_model){
            return $this->proxy_server->getClanIdToClanName($unique_clan_id , $current_clandata_db_model);
        }

        public function getClanAllCountCharacters($current_server_characters){
           return $this->proxy_server->getClanAllCountCharacters($current_server_characters);
        }

        public function getClanCountCharactersLimit($resultCol , $current_server_characters , $countLimit){
           return  $this->proxy_server->getClanCountCharactersLimit($resultCol , $current_server_characters , $countLimit);
        }

        public function getAllChars($server_name, $auth_user_id , $modelCharactersDb , $server_id){
         return  $this->proxy_server->getAllChars($server_name , $auth_user_id , $modelCharactersDb , $server_id);
        }

        public function getAccountsExpansionByCharName($modelAccountDb , $modelCharactersDb , $char_name){
         return  $this->proxy_server->getAccountsExpansionByCharName($modelAccountDb , $modelCharactersDb , $char_name);
        }

        public function clearTableClanStatic(){
            $proxy_server->clearTableClanStatic();
        }

        public function addL2Item($modelItemsDb , $charactersDb ,$char_name , $item_id, $count){
            $this->proxy_server->addL2Item($modelItemsDb , $charactersDb ,$char_name , $item_id, $count);
        }
        public function getL2Item($modelItemsDb , $charactersDb , $char_name , $item_id){
         $this->proxy_server->getL2Item($modelItemsDb , $charactersDb , $char_name , $item_id);
        }

        public function blockAccount($modelAccounts , $blockLogin){
         return  $this->proxy_server->blockAccount($modelAccounts , $blockLogin);
        }

         public function unblockAccount($modelAccounts , $unblockLogin){
         return  $this->proxy_server->unblockAccount($modelAccounts , $unblockLogin);
        }

        private function getProxy($developer_id){
           return SelectServerById::choose($developer_id);
        }
    

        public function getUseProxy($run_class){
       //  info("Запущен из класса $run_class");
        // info("developer_id $this->developer_id");
        // info(get_class($this->proxy_server));
        // info(spl_object_id($this->proxy_server));
        }
      

   }
?>