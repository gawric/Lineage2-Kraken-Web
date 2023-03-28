<?php

namespace App\Service\Utils;

use Auth;
use App\Models\Accounts_expansion;
use App\Service\ProxySqlL2Server\Support\ProxyFilters\GeneralFilters;


 class FunctionAuthUser
 { 

   public static function getCountAccounts(){
    return Auth::user()->getCountAccounts();
   }
    
    public static  function getAuthLogin(){
        return Auth::user()->login;
    }

    public static function getAuthUserId(){
        return Auth::user()->id;
    }

    public static function getAllAccountsUser(){
        return Auth::user()->accounts_server_id();
    }

    public static function getAccountsUserByServerId($search_server_id){
        return Auth::user()->accountsServerFilterById($search_server_id);
    }

    public static function getAccountExpansionById($auth_user_id){
        $filters = new GeneralFilters(['simplefilter'] , [['id', '=', $auth_user_id]]);
        return Accounts_expansion::filter($filters)->get()->first();
    }
   

    
 }
?>