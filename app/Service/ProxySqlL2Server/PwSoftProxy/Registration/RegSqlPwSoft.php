<?php

namespace App\Service\ProxySqlL2Server\PwSoftProxy\Registration;

 use Log;
 use App\Models\Accounts_expansion;
 use App\Models\Server\ServerAccounts;
 use Illuminate\Support\Facades\Hash;
 use App\Models\Accounts_server_id;
 use App\Service\ProxySqlL2Server\Support\ProxyFilters\GeneralFilters;
 use App\Service\ProxySqlL2Server\RusAcisProxy\Registration\RegSql;

    class RegSqlPwSoft extends RegSql 
    {
        public function save($modelAccountDb , $login , $password , $server_id , $email) : Accounts_expansion{
            if(!empty($modelAccountDb)) {
                   $this->saveAccountServer($login , $password , $modelAccountDb);
                   return $user_account_expan =  $this->saveAccountExpansion($email , $login , $server_id , $password);
            }
          return new Accounts_expansion();
        }


        public function saveAccountServer($login , $password , $modelAccountDb) : void {
            $model = $this->createModelServerAccount($login , $password , $modelAccountDb);
            $model->save();
        }

        private function createModelServerAccount($login , $password , $modelAccountDb){
            $sa = new $modelAccountDb;
            $sa->login = $login;
            $sa->password = $this->getServerHashSha1($password);
            return $sa;
        }
  
    }
?>