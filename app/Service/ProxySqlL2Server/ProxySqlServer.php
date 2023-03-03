<?php

namespace App\Service\ProxySqlL2Server;

use Config;
use App\Service\ProxySqlL2Server\RusAcisProxy\ProxyServerAcis;


   class ProxySqlServer
   {
        public function regUser($modelAccountDb , $login , $password , $server_id , $email){
            $acis = new ProxyServerAcis();
            $acis->save($modelAccountDb , $login , $password , $server_id , $email);
        }

        public function isUserExistServer($modelAccountDb , $login){
            $acis = new ProxyServerAcis();
            $acis->isUserExistServer($modelAccountDb , $login);
        }

        public function getPkServerCharacters($current_server_characters){
            $acis = new ProxyServerAcis();
            $acis->getPkServerCharacters($current_server_characters);
        }

        public function getPvpServerCharacters($current_server_characters){
            $acis = new ProxyServerAcis();
            $acis->getPvpServerCharacters($current_server_characters);
        }

        public function saveAllCharacters($allModelCharactersPvp , $allModelCharactersPk){
            $acis = new ProxyServerAcis();
            $acis->saveAllCharacters($allModelCharactersPvp , $allModelCharactersPk);
        }
   }
?>