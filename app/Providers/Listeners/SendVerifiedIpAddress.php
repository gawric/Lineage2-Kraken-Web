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
      info(FunctionAuthUser::getAuthUserId());
      info("Verified user ip  " . Request::ip());
      
      $this->detected->saveAccess(Request::ip());
      info("SendVerifiedIpAddress save model ip");
    }

   
}
