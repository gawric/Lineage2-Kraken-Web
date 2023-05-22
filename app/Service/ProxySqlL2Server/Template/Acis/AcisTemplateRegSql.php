<?php

namespace App\Service\ProxySqlL2Server\Template\Acis;

 use Log;
 use App\Models\Accounts_expansion;
 use App\Models\Server\ServerAccounts;
 use Illuminate\Support\Facades\Hash;
 use App\Models\Accounts_server_id;
 use App\Service\ProxySqlL2Server\Support\ProxyFilters\GeneralFilters;
 use App\Models\Temp\InfoDashboard;
 use App\Models\Temp\InfoAdminL2Accounts;
 use App\Service\Utils\FunctionSupport;
 
    class AcisTemplateRegSql
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


        //генерация пароля 1 bcrypt
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


        //генерация пароля 2 SHA1
        public function saveAccountServerSha1($login , $password , $modelAccountDb) : void {
            $model = $this->createModelServerAccountSha1($login , $password , $modelAccountDb);
            $model->save();
        }

        private function createModelServerAccountSha1($login , $password , $modelAccountDb){
            $sa = new $modelAccountDb;
            $sa->login = $login;
            $sa->password = $this->getServerHashSha1($password);
            return $sa;
        }



        private function createModelAccountsExpansion($email , $login , $server_id , $password) : Accounts_expansion{
            $ae = new Accounts_expansion;
            $ae->login = $login;
            $ae->email = $email;
            $ae->password = $this->getLaravelHashPassword($password);
            return $ae;
        }

        public function createModelServerIds($server_id , $model_id , $default_account_name) : Accounts_server_id{
            $accounts_server_id = new Accounts_server_id();
            $accounts_server_id->server_id = $server_id;
            $accounts_server_id->accounts_expansion_id = $model_id;
            $accounts_server_id->account_name = $default_account_name;

            return $accounts_server_id;
        }

        public function createModelL2Account($intBlocked , $l2account_name , $lockdate , $server_name){
            $l2account = new InfoAdminL2Accounts();
            $l2account->is_blocked = FunctionSupport::parceAccessLevelToBool($intBlocked);
            $l2account->l2account_name = $l2account_name;
            $l2account->lockdate = $lockdate;
            $l2account->server_name = $server_name;
            //info($l2account);
            return $l2account;
        }

        //приходиться заменять 2y на 2a т.к в серверах old salt version
        public function getServerHashPassword($password): string {
           $ham =  bcrypt($password);
           return str_replace('$2y', '$2a', $ham);
        }

        private function getLaravelHashPassword($password):string{
            return bcrypt($password);
        }

        public  function getServerHashSha1(string $password) : string{
           // info("Encode base64");
            return base64_encode(sha1($password, true));
        }


        public  function isEqualsOldPassword($old_password_hash , $current_password_hash ){
            if(hash_equals($old_password_hash, $current_password_hash)){
                return true;
            }
            return false;
        }

        public  function isEqualsBcryptOldPassword($old_password , $current_password_hash ){
            if(password_verify ($old_password, $current_password_hash)){
                return true;
            }
            return false;
        }

        public function getHashPassword($modelAccountDb , $login){
            $filtersPk = new GeneralFilters(['simplefilter'] , [['login', '=', $login]]);
            $first = $modelAccountDb::filter($filtersPk)->get(['password'])->first();
            return $first['password'];
        }

        public function setNewPassword($modelAccountDb , $login , $new_hash_password){
            $filtersPk = new GeneralFilters(['simplefilter'] , [['login', '=', $login]]);
            $firstModel = $modelAccountDb::filter($filtersPk)->get()->first();
            $firstModel->password = $new_hash_password;
            $firstModel->save();
        }

        public function getAccountsExpansionByAccountLogin($login){
            $filtersPk = new GeneralFilters(['simplefilter'] , [['login', '=', $login]]);
            return Accounts_expansion::filter($filtersPk)->get(['id' , 'login'])->first();
        }

        public function getIdAccountExpansionByAccountName($account_name){
            $filtersPk = new GeneralFilters(['simplefilter'] , [['account_name', '=', $account_name]]);
            return Accounts_server_id::filter($filtersPk)->get(['accounts_expansion_id'])->first();
        }

        public function getIdAccountExpansionById($account_expansion_id){
            $filtersPk = new GeneralFilters(['simplefilter'] , [['id', '=', $account_expansion_id]]);
            return Accounts_expansion::filter($filtersPk)->get()->first();
        }

        public function accountAcceessLevel($modelAccountDb , $login , $access_level){
            //info("change accountAcceessLevel  " . $modelAccountDb . "   " . $login . " " . $access_level);
          
            if(isset($login)){

                $filtersPk = new GeneralFilters(['simplefilter'] , [['login', '=', $login]]);
                $account_user = $modelAccountDb::filter($filtersPk)->get()->first();
               // info($account_user);
                if(isset($account_user)){
                    //если в модели есть такое свойство (в разных серверах l2j разные название столбца access_level | accessLevel)
                    if(isset($account_user->accessLevel)){
                        $account_user->accessLevel = $access_level;
                        $account_user->save();
                    }
                    else{
                        $account_user->access_level = $access_level;
                        $account_user->save();
                    }
               
                }
            }
            
        
        }


        public  function getAccountServer($account_name , $current_account_db_model , $server_name){

            $account_user = $this->getDataAccount($account_name , $current_account_db_model);

            if(isset($account_user)){
               return  $this->parceResult($account_user , $server_name);
            }

            return [];
        }

        private function getDataAccount($account_name , $current_account_db_model){
            if(isset($account_name)){
                $filtersPk = new GeneralFilters(['simplefilter'] , [['login', '=', $account_name]]);
                return $current_account_db_model::filter($filtersPk)->get()->first();
            }
        }

        private function parceResult($account_user , $server_name){
            if(isset($account_user->accessLevel)){
                //lucera
                return $this->createModelL2Account($account_user->accessLevel, $account_user->login , now() , $server_name);
            }
            else{
                //other
                return $this->createModelL2Account($account_user->access_level, $account_user->login , now() , $server_name);
            }
        }


        
     }
?>