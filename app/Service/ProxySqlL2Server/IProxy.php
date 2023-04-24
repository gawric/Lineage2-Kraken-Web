<?php

 namespace App\Service\ProxySqlL2Server;
 use App\Models\Temp\InfoDashboard;
 
    interface IProxy
    {
        //регистрация
        public function regUser($modelAccountDb , $login , $password , $server_id , $email);
        public function isUserExistServer($modelAccountDb , $login);
        public function changePassAccount($modelAccountDb , $login, $old_password , $new_password);
        public function createAccount($modelAccountDb , $auth_user_id , $account_name , $password , $server_id , $server_name ): InfoDashboard;

        //статистика
        public function getPkPvpServerCharacters($current_server_characters);
        public function saveAllCharacters($allModelCharactersPvp , $allModelCharactersPk);

        //статистика по кланам
        public function getClanCountCharactersLimit($resultCol , $current_server_characters , $countLimit);
        public function getClanAllCountCharacters($current_server_characters);
        public function saveClanSql($modelArr);
        public function getClanIdToClanName($unique_clan_id , $current_clandata_db_model);
        public function getAllChars($server_name, $auth_user_id , $modelCharactersDb , $server_id);
        //public function clearTableClanStatic();

        //доп функции проверка есть ли char на сервере
        public function getAccountsExpansionByCharName($modelAccountDb , $modelCharactersDb , $char_name);
        public function addL2Item($modelItemsDb , $char_name , $item_id, $count);
        

    }

?>