<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Service\Sheldure\Info\SheldureServers;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            info("Запуск CronJob schedule ");
            $sheldureservers = new SheldureServers();
            $sheldureservers->calcInfoServers();
            $sheldureservers->calcStaticCharacters();
            $sheldureservers->calcStaticClans();
        })->everyMinute();

    }

  

   
    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
