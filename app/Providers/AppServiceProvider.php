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
use App\Service\PersonalArea\AdminPromo\IAdminPromo;
use App\Service\PersonalArea\AdminPromo\AdminPromo;
use App\Service\PersonalArea\AdminConnect\IAdminConnect;
use App\Service\PersonalArea\AdminConnect\AdminConnect;

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
        $this->app->bind(IAdminPromo::class, AdminPromo::class);
        $this->app->bind(IAdminConnect::class, AdminConnect::class);

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
