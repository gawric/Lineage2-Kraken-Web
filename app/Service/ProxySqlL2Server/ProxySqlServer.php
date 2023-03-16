<?php

namespace App\Service\ProxySqlL2Server;

use Config;
use App\Service\ProxySqlL2Server\RusAcisProxy\ProxyServerAcis;
use App\Service\ProxySqlL2Server\Support\SelectServerById;


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

        public function getPkPvpServerCharacters($current_server_characters){
           // info("developer_id $this->developer_id" );
            info("getPkPvpServerCharacters -> RUNNING");
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

        public function clearTableClanStatic(){
            $proxy_server->clearTableClanStatic();
        }

        private function getProxy($developer_id){
           return SelectServerById::choose($developer_id);
        }

        public function getUseProxy($run_class){
         info("Запущен из класса $run_class");
         info("developer_id $this->developer_id");
         info(get_class($this->proxy_server));
         info(spl_object_id($this->proxy_server));
        }
      

   }
?>