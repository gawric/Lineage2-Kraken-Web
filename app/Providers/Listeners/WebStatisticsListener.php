<?php

namespace App\Providers\Listeners;

//use App\Providers\Events\L2AddItem;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Config;
//use App\Service\Utils\FunctionSupport;
//use App\Service\Utils\FunctionPayments;
//use App\Service\ProxySqlL2Server\ProxySqlServer;
//use Exception;
use App\Providers\Events\WebStatistics;
use App\Models\Statistics\InfoVisitStatistics;
use App\Service\Statistics\Visit\StatisticsVisit;

class WebStatisticsListener
{
    
    private $list_servers;
    private StatisticsVisit $visit;
    private $collection_of_statistics;

    public function __construct()
    {
        $this->list_servers = Config::get('lineage2.server.list_server');
        //будем ли собирать статистику или отключим ее. Меняем в конфиге
        $this->collection_of_statistics = Config::get('lineage2.server.collection_of_statistics');
        $this->visit = new StatisticsVisit();
    }

   //statistic_item
   // $model = new InfoVisitStatistics();
   // $model->ip_address = $ip_address;
   // $model->open_url = $open_url;
    public function handle(WebStatistics $event)
    {
        if($this->collection_of_statistics == true){

            if(isset($event->statistic_item)){
                $this->detectedType($event->statistic_item);
             }
        }
     

    }
    //ищем по текущей дате, что бы в будущем вытаскивать все записи за этот день
    private function detectedType($item){
      
       if ($item instanceof InfoVisitStatistics) {
            $allStatisticsModel =  $this->visit->getAllStatisticsModelByDate(now());
            $this->visit->addVisitStatistics($allStatisticsModel->id , $item);
       }
    }



}
