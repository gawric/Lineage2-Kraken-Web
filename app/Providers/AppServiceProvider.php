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
use App\Service\Payments\Enot\EnotIoService;
use App\Service\Payments\IPaymentsService;
use App\Service\PersonalArea\AdminDashboard\AdminDashboard;
use App\Service\PersonalArea\AdminDashboard\IAdminDashboard;
use App\Service\PersonalArea\AdminStatistics\IAdminStatistics;
use App\Service\PersonalArea\AdminStatistics\AdminStatistics;

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
        $this->app->bind(IPaymentsService::class, EnotIoService::class);
        $this->app->bind(IAdminDashboard::class, AdminDashboard::class);
        $this->app->bind(IAdminStatistics::class, AdminStatistics::class);
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
