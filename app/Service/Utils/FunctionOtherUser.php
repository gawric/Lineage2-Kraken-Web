<?php

namespace App\Service\Utils;

use Lang;
use Config;
use App\Models\Accounts_expansion;
use App\Models\Accounts_server_id;
use Illuminate\Database\Eloquent\ModelNotFoundException;

 class FunctionOtherUser
 { 
 
    public static function getAccountsUserByServerId($user , $search_server_id){
        if(isset($search_server_id) and !is_array($search_server_id)){
            return  $user->accountsServerFilterById($search_server_id);

        }
        info("Критическая ошибка не правильно переданные данные: FunctionOtherUser>getAccountsUserByServerId: data>> ");
        info($search_server_id);
        return [];
    }

    public static function getUserById($account_expansion){
        try{
            return Accounts_expansion::findOrFail($account_expansion);
        }
        catch(ModelNotFoundException $e){
            return [];
        }
       
    }

    public static function getAccountByAccountNameAndServerId($account_name , $server_id){
        return Accounts_server_id::where('account_name', $account_name)->where('server_id', $server_id);
    }

 }
?>