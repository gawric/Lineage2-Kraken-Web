<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Service\PersonalArea\AccessIp\DetectedIp;
use App\Service\PersonalArea\AccessIp\IDetectedIp;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Lang;
use App\Service\Utils\FunctionEmailActivate;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('IDetectedIp', DetectedIp::class);
        FunctionEmailActivate::toMailText();
    }


    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
