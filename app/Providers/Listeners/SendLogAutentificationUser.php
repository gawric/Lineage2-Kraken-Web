<?php

namespace App\Providers\Listeners;

use Illuminate\Auth\Events\Authenticated;
use Request;
use App\Service\Utils\FunctionAuthUser;
use App\Service\PersonalArea\AccessIp\DetectedIp;
use App\Service\Utils\FunctionSupport;
use Illuminate\Auth\Events\Login;
use Config;
use App\Providers\Events\WebStatistics;
use App\Models\Statistics\User\Accounts_ExpansionStatistics;

class SendLogAutentificationUser
{
  
   private DetectedIp $detected;
   private $status_user_blocked_ip;


    public function __construct(DetectedIp $detected_singlton)
    {
       $this->detected = $detected_singlton;
       $this->status_user_blocked_ip = Config::get('lineage2.statistics.status_user_blocked_ip');
    }

  
    public function handle(Login $event)
    {

        $ip_address = Request::ip();
        //$ip_address = "192.168.0.54";
        //info(FunctionAuthUser::getAllAccounts_ip());
       
        if($this->detected->getAllowAccess(FunctionAuthUser::getAllAccounts_ip() , $ip_address)){
          info("DetectedIp->>>getAllowAccess success access detected ip " . $ip_address);
        }
        else{
          info("DetectedIp->>>getAllowAccess deniend access detected ip " . $ip_address);
          $this->detected->blockedAccess($ip_address);
          event(new WebStatistics(FunctionSupport::createModelUserStatistic($ip_address , "/login user" , $this->status_user_blocked_ip  , FunctionAuthUser::getAuthUserId())));
        }
       // info("Auth user SendLogAutentificationUser  " . Request::ip());
      
    
    }

    
}
