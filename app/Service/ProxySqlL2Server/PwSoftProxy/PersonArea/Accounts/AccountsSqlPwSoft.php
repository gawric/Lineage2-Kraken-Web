<?php

namespace App\Service\ProxySqlL2Server\PwSoftProxy\PersonArea\Accounts;

 use Log;
 use App\Models\Accounts_expansion;
 use App\Service\ProxySqlL2Server\LuceraProxy\PersonArea\Accounts\AccountsSqlLucera;
 use Lang;
 use App\Models\Temp\InfoDashboard;

    //Благодаря наследования мы переиспользуем класс Lucera 
    //для регистрации и смены паролья у сервера Pwsoft т.к таблцы Accounts очень схожие
    class AccountsSqlPwSoft extends AccountsSqlLucera {

        public function changePassAccountPwSoft($modelAccountDb , $login, $old_password , $new_password){
            $this->changePassAccountLucera($modelAccountDb , $login, $old_password , $new_password);
        }

        public function createAccountPwSoft($modelAccountDb , $auth_user_id , $account_name , $password , $server_id , $server_name ): InfoDashboard{
            return $this->createAccountLucera($modelAccountDb , $auth_user_id , $account_name , $password , $server_id , $server_name );
        }

    }
?>