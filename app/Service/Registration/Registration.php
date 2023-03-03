<?php

namespace App\Service\Registration;

    use Config;
   // use App\Service\Registration\Support\RegSql;
    use App\Models\Accounts_expansion;
    use App\Service\Registration\Support\ChangeL2Password;

    class Registration implements IRegistration
    {
       // private RegSql $reg;
        private ChangeL2Password $change_password;
        
        public function __construct() {

            $this->change_password = new ChangeL2Password();
        }

       // public function saveAS($login , $password , $modelAccountDb ){
       //     $this->reg->saveAS($login , $password , $modelAccountDb );
       // }

       // public function saveAE($email , $login , $server_id , $password ) : Accounts_expansion{
       //     return $this->reg->saveAE($email , $login , $server_id , $password );
        //}

        public function changePasswordAllAccounts($login , $new_pasword){
            $this->change_password->change($login , $new_pasword);
        }
   
    }
?>