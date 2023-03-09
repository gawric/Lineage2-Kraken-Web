<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
//use App\Service\ProxySqlL2Server\RusAcisProxy\ProxyServerAcis;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       //
    }

   // public $singletons = [
    //    ProxyServerAcis::class => ProxyServerAcis::class,
    //];

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
