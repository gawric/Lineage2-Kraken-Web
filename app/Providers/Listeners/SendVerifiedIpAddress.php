<?php

namespace App\Providers\Listeners;

use Illuminate\Auth\Events\Authenticated;
use Request;
use App\Service\Utils\FunctionAuthUser;
use Illuminate\Auth\Events\Verified;
use App\Models\Accounts_ip;
use App\Service\Utils\FunctionSupport;
use App\Service\PersonalArea\AccessIp\DetectedIp;
class SendVerifiedIpAddress
{
  
  private DetectedIp $detected;

  public function __construct(DetectedIp $detected_singlton)
  {
     $this->detected = $detected_singlton;
  }
  
    public function handle(Verified $event)
    {
      $ip_address = Request::ip();
      //$ip_address = "192.168.0.54";
      info(FunctionAuthUser::getAuthUserId());
      info("Verified user ip  " . $ip_address);
      
      $this->detected->saveAccess($ip_address);
      info("SendVerifiedIpAddress save model ip");
    }

   
}
