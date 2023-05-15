<?php

namespace App\Service\ProxySqlL2Server\PwSoftProxy\PersonArea\Accounts;

 use Log;
 use App\Models\Accounts_expansion;
 use App\Service\ProxySqlL2Server\LuceraProxy\PersonArea\Accounts\AccountsSqlLucera;
 use Lang;
 use App\Models\Temp\InfoDashboard;

    //Благодаря наследованию мы переиспользуем класс Lucera 
    //для регистрации и смены паролья у сервера Pwsoft т.к таблицы Accounts очень схожие
    class AccountsSqlPwSoft extends AccountsSqlLucera {

        public function changePassAccountPwSoft($modelAccountDb , $login, $old_password , $new_password){
            $this->changePassAccountLucera($modelAccountDb , $login, $old_password , $new_password);
        }

        public function createAccountPwSoft($modelAccountDb , $auth_user_id , $account_name , $password , $server_id , $server_name ): InfoDashboard{
            return $this->createAccountLucera($modelAccountDb , $auth_user_id , $account_name , $password , $server_id , $server_name );
        }

        public function blockAccountPwSoft($modelAccounts , $blockLogin , $access_level){
            $this->blockAccountLucera($modelAccounts , $blockLogin , $access_level);
        }

        public function unblockAccountPwSoft($modelAccounts , $blockLogin , $access_level){
            $this->blockAccountLucera($modelAccounts , $blockLogin , $access_level);
        }

        public function getInfoAccountServerPwSoft($login , $account_db_model){
            return $this->getInfoAccountServerLucera($login , $account_db_model);
        }

    }
?>