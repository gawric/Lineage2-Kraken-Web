<?php

namespace App\Service\Utils;

use App\Service\Utils\FunctionAuthUser;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Lang;

 class FunctionEmailActivate
 { 

    public static function toMailText(){
       
        VerifyEmail::toMailUsing(function ($user,$url){
            if($user->is_activate_detected_ip){
                return self::activateUserIp($url , $user->unknow_ip);
            }
            else{
                return self::activateUser($url);
            }
        });
    }

    private static function  activateUser($url){
        $mail = new MailMessage;
        $mail->subject(Lang::get('messages.email_activate_subject') );
        $mail->markdown('emails.verify-email', ['url' => $url]);
        return $mail;
    }

    private static function activateUserIp($url , $unknow_ip){
        $mail = new MailMessage;
        $mail->subject(Lang::get('messages.email_ipaddress_activate_subject') );
        $mail->markdown('emails.verify-email-ipaddress', ['url' => $url , 'unknow_ip' => $unknow_ip]);
        return $mail;
    }
   
 }
?>