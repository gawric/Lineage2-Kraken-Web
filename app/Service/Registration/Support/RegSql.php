<?php

namespace App\Service\Registration\Support;

 use Log;
 use App\Models\Accounts_expansion;
 use App\Models\Server\ServerAccounts;
 use Illuminate\Support\Facades\Hash;
 use App\Models\Accounts_server_id;

     class RegSql
     {
        public function saveAE($email , $login , $server_id , $password) : Accounts_expansion{
            //Log::info("save model Ok->RegSql");
            $model = $this->createModelAE($email , $login , $server_id , $password);
            $model->save();
            $model_server_id = $this->createModelServerIds($server_id , $model['id']);
            $model->accounts_server_id()->save($model_server_id);
            
            return $model;
        }

        public function saveAS($login , $password , $modelAccountDb) : void {
            $model = $this->createModelSa($login , $password , $modelAccountDb);
            $model->save();
        }

        private function createModelSa($login , $password , $modelAccountDb){
            $sa = new $modelAccountDb;
            $sa->login = $login;
            $sa->password = $this->getServerHashPassword($password);
            return $sa;
        }

        private function createModelAE($email , $login , $server_id , $password) : Accounts_expansion{
            $ae = new Accounts_expansion;
            $ae->login = $login;
            $ae->email = $email;
            $ae->password = $this->getLaravelHashPassword($password);
            return $ae;
        }

        private function createModelServerIds($server_id , $model_id) : Accounts_server_id{
            $accounts_server_id = new Accounts_server_id();
            $accounts_server_id->server_id = $server_id;
            $accounts_server_id->accounts_expansion_id = $model_id;
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