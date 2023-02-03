<?php

 namespace App\Service\Registration;


    interface IRegistration
    {
        function saveAE($email , $login , $server_id);
        function saveAS($login , $password , $modelAccountDb );
    }

?>