<?php

namespace App\Service\ProxySqlL2Server\LuceraProxy\PersonArea\Accounts;

 use Log;
 use App\Models\Accounts_expansion;
 use App\Service\ProxySqlL2Server\Support\ProxyFilters\GeneralFilters;
 use App\Service\ProxySqlL2Server\Template\Acis\AcisTemplateRegSql;
 use Illuminate\Database\Eloquent\ModelNotFoundException;
 use Lang;
 use App\Models\Temp\InfoDashboard;
 use App\Service\Utils\FunctionSupport;
 use App\Service\Utils\FunctionAuthUser;

    //здесь реализация функций не регистрации
    //т.е добавление учеток через лк или смена пароля 
    //отдельная работа с accounts помимо регистрации
    class AccountsSqlLucera extends AcisTemplateRegSql {


        public function changePassAccountLucera($modelAccountDb , $login, $old_password , $new_password){
          //  info("AccountsSqlLucera>>>>>");
            $old_password_hash  = $this->getServerHashSha1($old_password);
            $current_password_hash = $this->getHashPassword($modelAccountDb , $login );
            $new_hash_password = $this->getServerHashSha1($new_password);
         

            if($this->isEqualsOldPassword($old_password_hash , $current_password_hash )){
                $this->setNewPassword($modelAccountDb , $login , $new_hash_password);
            }
            else{
                throw new ModelNotFoundException(Lang::get('validation.password_does_not_match') . " " . $login);
            }
        }

        public function createAccountLucera($modelAccountDb , $auth_user_id , $account_name , $password , $server_id , $server_name ): InfoDashboard{
            $auth_user_model = FunctionAuthUser::getAccountExpansionById($auth_user_id);
            //сохраняем логин в laravel, accounts_server_id хранит всех юзеров наших серверов
            $this->addAccountsServerId($server_id , $auth_user_id , $account_name ,  $auth_user_model);
            //сохраняем логин и пароль в базе выбранного сервера
            $this->saveAccountServerSha1($account_name , $password , $modelAccountDb);
           
           return  FunctionSupport::createModelInfoDashBoard(0 , $account_name , 0 , 0 , $server_name , $server_id);
        }

        public function addAccountsServerId($server_id , $auth_user_id , $account_name ,  $auth_user_model){
            $accounts_server_id_model = $this->createModelServerIds($server_id , $auth_user_id , $account_name);
            $auth_user_model->accounts_server_id()->save($accounts_server_id_model);
        }

        public function blockAccountLucera($modelAccounts , $blockLogin , $access_level){
            $this->accountAcceessLevel($modelAccounts , $blockLogin , $access_level);
        }

        public function unblockAccountLucera($modelAccounts , $unblockLogin , $access_level){
            $this->accountAcceessLevel($modelAccounts , $unblockLogin , $access_level);
        }

        public function getInfoAccountServerLucera($login , $account_db_model , $server_name){
            return $this->getAccountServer($login , $account_db_model , $server_name);
        }

  

    
    }
?>