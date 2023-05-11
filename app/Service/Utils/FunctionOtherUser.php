<?php

namespace App\Service\Utils;

use Lang;
use Config;
use App\Models\Accounts_expansion;

 class FunctionOtherUser
 { 
 
    public static function getAccountsUserByServerId($user , $search_server_id){
        return $user->accountsServerFilterById($search_server_id);
    }

    public static function getUserById($account_expansion){
        return Accounts_expansion::findOrFail($account_expansion);
    }

 }
?>