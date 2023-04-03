<?php

namespace App\Providers\Listeners;

use Illuminate\Auth\Events\Authenticated;
use Request;
use App\Service\Utils\FunctionAuthUser;
use App\Service\PersonalArea\AccessIp\DetectedIp;
use App\Service\Utils\FunctionSupport;
use Illuminate\Auth\Events\Login;


class SendLogAutentificationUser
{
  
   private DetectedIp $detected;

    public function __construct(DetectedIp $detected_singlton)
    {
       $this->detected = $detected_singlton;
    }

  
    public function handle(Login $event)
    {
      //info(FunctionAuthUser::getAllAccounts_ip());
      if($this->detected->getAllowAccess(FunctionAuthUser::getAllAccounts_ip() , Request::ip())){
        info("DetectedIp->>>getAllowAccess success access detected ip " . Request::ip());
      }
      else{
        info("DetectedIp->>>getAllowAccess deniend access detected ip " . Request::ip());
        $this->detected->blockedAccess(Request::ip());
      }
     // info("Auth user SendLogAutentificationUser  " . Request::ip());
    }

    
}
