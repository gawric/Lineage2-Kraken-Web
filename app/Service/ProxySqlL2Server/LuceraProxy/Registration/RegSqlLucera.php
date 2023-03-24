<?php

namespace App\Service\ProxySqlL2Server\LuceraProxy\Registration;

 use Log;
 use App\Models\Accounts_expansion;
 use App\Service\ProxySqlL2Server\Support\ProxyFilters\GeneralFilters;
 use App\Service\ProxySqlL2Server\Template\Acis\AcisTemplateRegSql;

    //такая же генерация пароля, как и у pwsoft(но это старая сборка в будущем возможны изменения!)
    class RegSqlLucera extends AcisTemplateRegSql
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