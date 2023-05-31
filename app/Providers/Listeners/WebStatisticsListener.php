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
use App\Models\Statistics\User\Accounts_ExpansionStatistics;

class WebStatisticsListener
{
    

    private StatisticsVisit $visit;
    private $collection_of_statistics;
    private $number_to_clear_tables;

    public function __construct()
    {
    
        //будем ли собирать статистику или отключим ее. Меняем в конфиге statistics
        $this->collection_of_statistics = Config::get('lineage2.statistics.collection_of_statistics');
        $this->number_to_clear_tables = Config::get('lineage2.statistics.number_to_clear_tables');
        
        $this->visit = new StatisticsVisit();
    }

   
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

            $this->visit->clearTableVisit($this->number_to_clear_tables);

            $allStatisticsModel =  $this->visit->getAllStatisticsModelByDate(now());
            $this->visit->addVisitStatistics($allStatisticsModel->id , $item);
       }
       else if($item instanceof Accounts_ExpansionStatistics){

            $this->visit->clearTableUser($this->number_to_clear_tables);

            $allStatisticsModel =  $this->visit->getAllStatisticsModelByDate(now());
            $this->visit->addUserStatistics($allStatisticsModel->id , $item);

       }
    }



}
