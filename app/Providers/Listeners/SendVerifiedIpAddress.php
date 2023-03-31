<?php

namespace App\Providers\Listeners;

use Illuminate\Auth\Events\Authenticated;
use Request;
use App\Service\Utils\FunctionAuthUser;
use Illuminate\Auth\Events\Verified;
use App\Models\Accounts_ip;


class SendVerifiedIpAddress
{
  


    public function __construct()
    {
       
    }

  
    public function handle(Verified $event)
    {
      info(FunctionAuthUser::getAuthUserId());
      info("Verified user ip  " . Request::ip());
      $model = $this->createModel(Request::ip() , FunctionAuthUser::getAuthUserId());
      $model->save(); 
      info("SendVerifiedIpAddress save model ip");
    }

    private function createModel($ip_address , $accounts_expansion_id){
        $model = new Accounts_ip();
        $model->ip_address = $ip_address;
        $model->email_verified_at = now();
        $model->accounts_expansion_id = $accounts_expansion_id;

        return $model;
    }
}
