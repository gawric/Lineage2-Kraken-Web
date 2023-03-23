<?php

namespace App\Service\Utils;

use Auth;

 class FunctionAuthUser
 { 

   
    
    public static  function getAuthLogin(){
        return Auth::user()->login;
    }

    public static function getAuthUserId(){
        return Auth::user()->id;
    }

    public static function getAllAccountsUser(){
        return Auth::user()->accounts_server_id();
    }
   

    
 }
?>