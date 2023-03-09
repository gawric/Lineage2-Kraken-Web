<?php

namespace App\Service\ProxySqlL2Server\RusAcisProxy\Registration;

 use Log;
 use App\Models\Accounts_expansion;
 use App\Models\Server\ServerAccounts;
 use Illuminate\Support\Facades\Hash;
 use App\Models\Accounts_server_id;
 use App\Service\ProxySqlL2Server\Support\ProxyFilters\GeneralFilters;
     class RegSql
     {

        public function isUserExistServer($modelAccountDb , $username){
            $filtersPk = new GeneralFilters(['simplefilter'] , [['login', '=', $username]]);
            $resultmodel =  $modelAccountDb::filter($filtersPk)->get()->first();
            if(isset($resultmodel)){
                return true;
            }

            return false;
        }

        public function save($modelAccountDb , $login , $password , $server_id , $email) : Accounts_expansion{
            if(!empty($modelAccountDb)) {
                   $this->saveAccountServer($login , $password , $modelAccountDb);
                   return $user_account_expan =  $this->saveAccountExpansion($email , $login , $server_id , $password);
            }
          return new Accounts_expansion();
        }


        public function saveAccountExpansion($email , $login , $server_id , $password) : Accounts_expansion{
            //Log::info("save model Ok->RegSql");
            $model = $this->createModelAccountsExpansion($email , $login , $server_id , $password);
            $model->save();
            $model_server_id = $this->createModelServerIds($server_id , $model['id'] , $login);
            $model->accounts_server_id()->save($model_server_id);
            
            return $model;
        }

        public function saveAccountServer($login , $password , $modelAccountDb) : void {
            $model = $this->createModelServerAccount($login , $password , $modelAccountDb);
            $model->save();
        }

        private function createModelServerAccount($login , $password , $modelAccountDb){
            $sa = new $modelAccountDb;
            $sa->login = $login;
            $sa->password = $this->getServerHashPassword($password);
            return $sa;
        }

        private function createModelAccountsExpansion($email , $login , $server_id , $password) : Accounts_expansion{
            $ae = new Accounts_expansion;
            $ae->login = $login;
            $ae->email = $email;
            $ae->password = $this->getLaravelHashPassword($password);
            return $ae;
        }

        private function createModelServerIds($server_id , $model_id , $default_account_name) : Accounts_server_id{
            $accounts_server_id = new Accounts_server_id();
            $accounts_server_id->server_id = $server_id;
            $accounts_server_id->accounts_expansion_id = $model_id;
            $accounts_server_id->account_name = $default_account_name;

            return $accounts_server_id;
        }

        //приходиться заменять 2y на 2a т.к в серверах old salt version
        private function getServerHashPassword($password): string {
           $ham =  bcrypt($password);
           return str_replace('$2y', '$2a', $ham);
        }

        private function getLaravelHashPassword($password):string{
            return bcrypt($password);
        }
        
     }
?>