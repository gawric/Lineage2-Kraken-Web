<?php

namespace App\Providers\Listeners;

use App\Providers\Events\L2PasswordReset;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Accounts_expansion;
use App\Service\Registration\Registration;

class SendCharactersResetPassword
{
   private Registration $reg;


    public function __construct()
    {
        $this->reg = new Registration();
    }

  
    public function handle(L2PasswordReset $event)
    {
        $mode_user = $event->getObjectUser();
       // $password = $mode_user->password;
        //$login = $mode_user->login;
        //dd($mode_user);
        $this->reg->changePasswordAllAccounts($mode_user->login , $mode_user->password);
        //dd($event->getObjectUser()->id);
    }
}
