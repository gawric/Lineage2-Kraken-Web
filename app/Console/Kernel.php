<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Config;
use App\Service\Status\StatusServer;
use App\Service\Status\Support\SupportFuncStatus;
use App\Models\InfoServer;

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
            info("Запуск планировщика задач! ");

            $timeout = Config::get('lineage2.server.timeout_socket');
            $this->ss = new StatusServer($timeout);  
            $this->sf = new SupportFuncStatus($this->ss);
            $list_server = Config::get('lineage2.server.list_server');
            $complete_server = $this->sf->getStatusServersFunct($list_server);
            $this->ss->delAllInfoServer();
            $this->ss->saveAllInfoServer($complete_server);
            
            info($complete_server);
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
