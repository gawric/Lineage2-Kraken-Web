<?php

 namespace App\Service\Registration;
 
  use App\Models\Accounts_expansion;

    interface IRegistration
    {
       // function saveAE($email , $login , $server_id , $password): Accounts_expansion;
       // function saveAS($login , $password , $modelAccountDb );
        function changePasswordAllAccounts($login , $new_pasword);
    }

?>