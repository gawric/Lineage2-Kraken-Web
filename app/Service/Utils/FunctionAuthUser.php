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

    public static function getAllAccounts_ip(){
        return Auth::user()->accounts_ip;
    }
    public static function getAccountsUserByServerId($search_server_id){
        return Auth::user()->accountsServerFilterById($search_server_id);
    }

    public static function getAccountExpansionById($auth_user_id){
        $filters = new GeneralFilters(['simplefilter'] , [['id', '=', $auth_user_id]]);
        return Accounts_expansion::filter($filters)->get()->first();
    }

    public static function isFindByAccounts_ipAndNull($ip_address){
        return self::isEqualsAccounts_ip_AndNull(self::getAllAccounts_ip() , $ip_address);
    }

    public static function isFindByAccounts_ip($ip_address){
        return self::isEqualsAccounts_ip(self::getAllAccounts_ip() , $ip_address);
    }

    public static function getFindByAccounts_ip($ip_address){
        return self::getEqualsElement(self::getAllAccounts_ip()  , $ip_address);
    }
    public static function setActivateEmail($activate){
        Auth::user()->is_activate_detected_ip = $activate;
    }

    public static function setUnknowAuthIp($unknow_ip){
        Auth::user()->unknow_ip = $unknow_ip;
    }

    public static function sendActivateEmail(){
        Auth::user()->sendEmailVerificationNotification();
    }

    public static function resetActivateEmailUser(){
        Auth::user()->email_verified_at = null;
        Auth::user()->save();
    }

    private static function isEqualsAccounts_ip_AndNull($allow_ip , $user_ip){
        $element = self::getEqualsElement($allow_ip , $user_ip);
        if($element->count() > 0 and $element->first()->email_verified_at != null){
            return true;
        }            
        return false;
    }

    private static function isEqualsAccounts_ip($allow_ip , $user_ip){
        $element = self::getEqualsElement($allow_ip , $user_ip);
        if($element->count() > 0){
            return true;
        }            
        return false;
    }


    private static function getEqualsElement($allow_ip , $user_ip){
        return  $allow_ip->filter(function ($item)use ($user_ip) {
           if(strcmp($item->ip_address, $user_ip) == 0){
                   return $item;
               }
       });
   }
   

    
 }
?>