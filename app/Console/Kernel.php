<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Config;
use App\Service\Status\StatusServer;
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

            $list_server = Config::get('lineage2.server.list_server');
            $complete_server = $this->getStatusServersFunct($list_server);
            $this->ss->getCountUsers();
            $this->ss->delAllInfoServer();
            //$this->ss->saveInfoServer(1 , "offline" , "0");
            $this->ss->saveAllInfoServer($complete_server);
           // info($complete_server);
          // $this->delAllModel();
          // $this->saveModel(1 , "offline" , "0" , now());

        })->everyMinute();


        
    }

    

    function getStatusServersFunct($list_server){
        array_walk($list_server, "self::getStatus");
        return $list_server;
    }

    function getStatus(&$item, $key)
    {
            $ip = $item["ip"];
            $login_port = $item["login_port"];
            $game_port = $item["game_port"];
            $data = $this->getData($ip , $login_port , $game_port);
            $this->replaceData($item , $data);
    }

    function replaceData(&$item , $data){
        $item["status"] = $data;
    }

    function getData($ip , $login_port , $game_port){
        return $this->ss->getOnline($ip , $login_port , $game_port);
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
