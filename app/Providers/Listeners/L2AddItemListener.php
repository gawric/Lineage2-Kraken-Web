<?php

namespace App\Providers\Listeners;

use App\Providers\Events\L2AddItem;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Config;
use App\Service\Utils\FunctionSupport;
use App\Service\Utils\FunctionPayments;
use App\Service\ProxySqlL2Server\ProxySqlServer;


class L2AddItemListener
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
    public function handle(L2AddItem $event)
    {
        if (isset($event->order_item)){
            info(" L2AddItemListener>>>>>>> " . $event->order_item);

            $server_id = $event->order_item->server_id;
           
            $modelItemsDb = FunctionSupport::getModelOtherDbByName($server_id , $this->list_servers , "items_db_model");
            $developer_id = FunctionSupport::getDeveloperId($server_id , $this->list_servers);
            $proxy = $this->getProxySqlServerObject($developer_id);

            $char_name = $event->order_item->char_name;
            $item_id = FunctionPayments::getPaymentsItemIdByName("coin_of_luck");
            $count_item = ceil($event->order_item->sum); 
           // info($event->order_item);
            $this->addItem($proxy , $modelItemsDb , $char_name , $count_item , $item_id);
        }
    }

    private function getProxySqlServerObject($developer_id){
        return  new ProxySqlServer($developer_id);
    }

    private function addItem($proxy , $modelItemsDb , $char_name , $count_item , $item_id){
        $proxy->addL2Item($modelItemsDb , $char_name , $item_id, $count_item);
    }
}
