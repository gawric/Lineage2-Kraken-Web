<?php

namespace App\Service\ProxySqlL2Server\LuceraProxy\PersonArea\Accounts;

 use Log;
 use App\Models\Accounts_expansion;
 use App\Service\ProxySqlL2Server\Support\ProxyFilters\GeneralFilters;
 use App\Service\ProxySqlL2Server\RusAcisProxy\Registration\RegSql;

    //здесь реализация функций не регистрации
    //т.е добавление учеток через лк или смена пароля 
    //отдельная работа с accounts помимо регистрации
    class AccountsSqlLucera extends RegSql  {
        public function changePassAccountLucera($modelAccountDb , $login, $old_password , $new_password){
            info("AccountsSqlLucera>>>>>");
            $old_password_hash  = $this->getServerHashSha1($old_password);
            $current_password_hash = $this->getHashPassword($modelAccountDb , $login );
            $new_hash_password = $this->getServerHashSha1($new_password);

            if($this->isEqualsOldPassword($old_password_hash , $current_password_hash )){
                $this->setNewPassword($modelAccountDb , $login , $new_hash_password);
            }
            else{
                //error not equals old password and current_password;
                info("error not equals old password and current_password");
            }
        }

    
        private function isEqualsOldPassword($old_password_hash , $current_password_hash ){
            if(hash_equals($old_password_hash, $current_password_hash)){
                return true;
            }
            return false;
        }

        private function getHashPassword($modelAccountDb , $login ){
            $filtersPk = new GeneralFilters(['simplefilter'] , [['login', '=', $login]]);
            $first = $modelAccountDb::filter($filtersPk)->get(['password'])->first();
            return $first['password'];
        }

        private function setNewPassword($modelAccountDb , $login , $new_hash_password){
            $filtersPk = new GeneralFilters(['simplefilter'] , [['login', '=', $login]]);
            $firstModel = $modelAccountDb::filter($filtersPk)->get()->first();
            $firstModel->password = $new_hash_password;
            $firstModel->save();
        }
    }
?>