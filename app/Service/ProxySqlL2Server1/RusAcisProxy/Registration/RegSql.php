<?php

namespace App\Service\ProxySqlL2Server\RusAcisProxy\Registration;

 use Log;
 use App\Models\Accounts_expansion;
 use App\Models\Server\ServerAccounts;
 use Illuminate\Support\Facades\Hash;
 use App\Models\Accounts_server_id;
 use App\Service\ProxySqlL2Server\Support\ProxyFilters\GeneralFilters;
 use App\Service\ProxySqlL2Server\Template\Acis\AcisTemplateRegSql;

    class RegSql extends AcisTemplateRegSql
    {
        public function isUserExistServerRusAcis($modelAccountDb , $username){
            return $this->isUserExistServer($modelAccountDb , $username);
        }

        public function saveRusAcis($modelAccountDb , $login , $password , $server_id , $email) : Accounts_expansion{
          return $this->save($modelAccountDb , $login , $password , $server_id , $email);
        }

        public function saveAccountExpansionRusAcis($email , $login , $server_id , $password) : Accounts_expansion{
            return $this->saveAccountExpansion($email , $login , $server_id , $password);
        }

        public function saveAccountServerRusAcis($login , $password , $modelAccountDb) : void {
            $this->saveAccountServerRusAcis($login , $password , $modelAccountDb);
        }

        private function createModelServerAccountRusAcis($login , $password , $modelAccountDb){
            return $this->createModelServerAccount($login , $password , $modelAccountDb);
        }

        private function createModelAccountsExpansionRusAcis($email , $login , $server_id , $password) : Accounts_expansion{
            return $this->createModelAccountsExpansion($email , $login , $server_id , $password);
        }

        private function createModelServerIdsRusAcis($server_id , $model_id , $default_account_name) : Accounts_server_id{
            return $this->createModelServerIds($server_id , $model_id , $default_account_name);
        }    
     }
?>