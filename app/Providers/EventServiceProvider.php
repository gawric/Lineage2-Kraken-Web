<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Providers\Events\L2PasswordReset;
use App\Providers\Events\L2AddItem;
use App\Providers\Listeners\L2AddItemListener;
use App\Providers\Events\L2AddArrayItemsAjax;
use App\Providers\Events\WebStatistics;
use App\Providers\Listeners\L2AddArrayItemListener;
use App\Providers\Listeners\WebStatisticsListener;
use App\Providers\Listeners\SendCharactersResetPassword;

//use Illuminate\Auth\Events\Authenticated;
use Illuminate\Auth\Events\Login;
use App\Providers\Listeners\SendLogAutentificationUser;
use App\Providers\Listeners\SendVerifiedIpAddress;
use Illuminate\Auth\Events\Verified;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        L2PasswordReset::class => [
            SendCharactersResetPassword::class,
        ],
        Login::class => [
            SendLogAutentificationUser::class,
        ],

        Verified::class => [
            SendVerifiedIpAddress::class,
        ],

        L2AddItem::class => [
	        L2AddItemListener::class,
	    ],
        L2AddArrayItemsAjax::class => [
	        L2AddArrayItemListener::class,
	    ],
        WebStatistics::class => [
	        WebStatisticsListener::class,
	    ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
