<?php

namespace App\Service\Utils;

use Lang;
use Config;
use App\Models\Accounts_expansion;
use App\Models\Accounts_server_id;

 class FunctionOtherUser
 { 
 
    public static function getAccountsUserByServerId($user , $search_server_id){
        return $user->accountsServerFilterById($search_server_id);
    }

    public static function getUserById($account_expansion){
        return Accounts_expansion::findOrFail($account_expansion);
    }

    public static function getAccountByAccountNameAndServerId($account_name , $server_id){
        return Accounts_server_id::where('account_name', $account_name)->where('server_id', $server_id);
    }

 }
?>