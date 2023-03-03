<?php

 namespace App\Service\ProxySqlL2Server;
 
    interface IProxy
    {
        //регистрация
        public function regUser($service_reg , $modelAccountDb , $login , $password , $server_id , $email);
        public function isUserExistServer($modelAccountDb , $login);

        //статистика
        public function getPkServerCharacters($current_server_characters);
        public function getPvpServerCharacters($current_server_characters);
        public function saveAllCharacters($allModelCharactersPvp , $allModelCharactersPk);

        //статистика по кланам
        public function getClanCountCharactersLimit($current_server_characters , $countLimit);
        public function getClanAllCountCharacters();
        public function saveClanSql(&$modelArr);
        public function getClanIdToClanName($unique_clan_id , $current_clandata_db_model);
        

    }

?>