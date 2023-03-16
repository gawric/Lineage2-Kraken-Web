<?php

namespace App\Service\ProxySqlL2Server\LuceraProxy;

use Config;
use App\Service\ProxySqlL2Server\LuceraProxy\Registration\RegSql;
use App\Service\ProxySqlL2Server\IProxy;

   class ProxyLucera implements IProxy
   {
        private RegSql $reg;


        public function __construct() {

        }

        
        public function regUser($modelAccountDb , $login , $password , $server_id , $email){
            
        }

        public function isUserExistServer($modelAccountDb , $login){
         
        }

        public function getPkPvpServerCharacters($current_server_characters){
           
        }

        public function saveAllCharacters($allModelCharactersPvp , $allModelCharactersPk){
           
        }

        public function getClanCountCharactersLimit($resultCol , $current_server_characters , $countLimit){
          
        }
        public function getClanAllCountCharacters($current_server_characters){
           
        }
        public function saveClanSql($modelArr){
           
        }
        public function getClanIdToClanName($unique_clan_id , $current_clandata_db_model){
          
        }


      

 
   }
?>