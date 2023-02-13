<?php

namespace App\Service\Registration\Support;

 use Log;
 use App\Models\Accounts_expansion;
 use App\Models\Server\ServerAccounts;
 use Illuminate\Support\Facades\Hash;

     class RegSql
     {
        public function saveAE($email , $login , $server_id , $password) : Accounts_expansion{
            //Log::info("save model Ok->RegSql");
            $model = $this->createModelAE($email , $login , $server_id , $password);
            $model->save();
            return $model;
            //Log::info($model);
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
            $ae->server_id = $server_id;
            $ae->password = $this->getLaravelHashPassword($password);
            return $ae;
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