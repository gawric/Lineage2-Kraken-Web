<?php

namespace App\Providers\Listeners;

use App\Providers\Events\L2AddArrayItemsAjax;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Config;
use App\Service\Utils\FunctionSupport;
use App\Service\Utils\FunctionPayments;
use App\Service\ProxySqlL2Server\ProxySqlServer;
use Exception;

class L2AddArrayItemListener
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
     * @param  \App\Providers\L2AddArrayItemsAjax  $event
     * @return void
     */
    public function handle(L2AddArrayItemsAjax $event)
    {
        if (isset($event->arrayData)){
            if(is_array($event->arrayData)){
                $array = $event->arrayData;
                $this->pushData($array , $this->list_servers);
            }
        }
    }
    
    //Ожидаем данные
    //char_name
    //count
    //item_id
    //server_name
    //пример [['char_name'=>'char_name','count'=>'1','item_id'=>'1','server_name'=>'1',]]
    private function pushData($array , $list_servers){
        foreach($array as $item){

            $server_id = FunctionSupport::getServerNameToServerId($list_servers , $item['server_name']);
            $developer_id = FunctionSupport::getDeveloperId($server_id , $this->list_servers);
            $proxy = $this->getProxySqlServerObject($developer_id);

            $modelItemsDb = FunctionSupport::getModelOtherDbByName($server_id , $this->list_servers , "items_db_model");
            $charactersDb = FunctionSupport::getModelCharactersDb($server_id , $this->list_servers);

            $this->addItem($proxy , $modelItemsDb ,$charactersDb ,$item['char_name'] , $item['count'], $item['item_id']);
        }
    }

    private function getProxySqlServerObject($developer_id){
        return  new ProxySqlServer($developer_id);
    }

    private function addItem($proxy , $modelItemsDb ,$charactersDb ,$char_name , $count_item , $item_id){
        $proxy->addL2Item($modelItemsDb ,$charactersDb ,$char_name , $item_id, $count_item);
    }
   
}
