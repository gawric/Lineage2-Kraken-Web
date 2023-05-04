<?php

namespace App\Service\Utils;


use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Config;
use Session;
use Illuminate\Validation\ValidationException;

 class FunctionRedirectUser
 { 


    public static function getRedirect($role_name_auth, $login){

        info("AuthenticatedSessionController  " . $role_name_auth . " login auth " . $login);

        if(strcmp(self::getRoleNameBlock(), $role_name_auth) == 0){
            //info("redirect block " . RouteServiceProvider::LOGIN);
            Session::flush();
            throw ValidationException::withMessages([
                'email' => trans('auth.block'),
            ]);
           // return redirect()->intended(RouteServiceProvider::LOGIN);
        }

        return self::getRedirectAdminOrUser($role_name_auth);
       
    }


    private static function getRedirectAdminOrUser($role_name_auth){
        if(strcmp(self::getRoleNameUser(), $role_name_auth) == 0){
             return redirect()->intended(RouteServiceProvider::HOME);
         }
         else{
           return self::getRedirectAdmin($role_name_auth);
         }
    }

    private static function getRedirectAdmin($role_name_auth){
        if(strcmp(self::getRoleNameAdmin(), $role_name_auth) == 0){
              info("redirect HOME ADMIN");
              info(RouteServiceProvider::HOME_ADMIN);
           
              return redirect()->intended(RouteServiceProvider::HOME_ADMIN);
          }
          else{
              //info("redirect HOME UNKNOW");
              Session::flush();
              return redirect()->intended(RouteServiceProvider::LOGIN);
          }
    }




    private static function getRoleNameAdmin(){
        return  Config::get('lineage2.server.role_name_admin');
    }

    private static function getRoleNameUser(){
        return Config::get('lineage2.server.role_name_user');
    }

    private static function getRoleNameBlock(){
        return Config::get('lineage2.server.role_name_blocked');
    }
 }
?>