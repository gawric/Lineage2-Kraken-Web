<?php

namespace App\Providers\Listeners;

use App\Providers\Events\L2AddItem;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Config;
use App\Service\Utils\FunctionSupport;
use App\Service\Utils\FunctionPayments;
use App\Service\ProxySqlL2Server\ProxySqlServer;
use Exception;
use App\Providers\Events\WebStatistics;
use App\Models\Statistics\InfoVisitStatistics;


class WebStatisticsListener
{
    
    private $list_servers;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        $this->list_servers = Config::get('lineage2.server.list_server');
    }

    /**
     * Handle the event.
     *
     * @param  \App\Providers\L2AddItem  $event
     * @return void
     */
    public function handle(WebStatistics $event)
    {
        if(isset($event->statistic_item)){
           $this->detectedType($event->statistic_item);
        }

    }

    private function detectedType($item){
      
       if ($item instanceof InfoVisitStatistics) {
        info("detected type");
        info($item);
       }
    }



}
