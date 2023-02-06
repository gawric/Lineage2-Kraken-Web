<?php

namespace App\Service\Registration;

    use Config;
    use App\Service\Registration\Support\RegSql;
    use App\Models\Accounts_expansion;

    class Registration implements IRegistration
    {
        private RegSql $reg;

        
        public function __construct() {
            $this->reg = new RegSql();
        }

        public function saveAS($login , $password , $modelAccountDb ){
            $this->reg->saveAS($login , $password , $modelAccountDb );
        }

        public function saveAE($email , $login , $server_id) : Accounts_expansion{
            return $this->reg->saveAE($email , $login , $server_id);
        }
   
    }
?>