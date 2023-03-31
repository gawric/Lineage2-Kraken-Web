<?php

namespace App\Providers\Listeners;

use Illuminate\Auth\Events\Authenticated;
use Request;
use App\Service\Utils\FunctionAuthUser;

class SendLogAutentificationUser
{
  


    public function __construct()
    {
       
    }

  
    public function handle(Authenticated $event)
    {
      info(FunctionAuthUser::getAuthUserId());
      info("Auth user SendLogAutentificationUser  " . Request::ip());
    }
}
