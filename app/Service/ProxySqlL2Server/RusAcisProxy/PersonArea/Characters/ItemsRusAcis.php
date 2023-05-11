<?php

namespace App\Service\ProxySqlL2Server\RusAcisProxy\PersonArea\Characters;

 use Log;
 use App\Service\ProxySqlL2Server\Support\ProxyFilters\GeneralFilters;
 use App\Service\ProxySqlL2Server\Template\Acis\AcisTemplateCharactersSql;
 use App\Service\ProxySqlL2Server\Template\Acis\AcisTemplateItemsSql;
 use config;

    class ItemsRusAcis extends AcisTemplateItemsSql {

        private $inventory_name;

        public function __construct() {
            $this->inventory_name = Config::get('lineage2.server.inventory_item');
        }


        public function addL2itemRusAcis($modelItemsDb , $char_name , $item_id, $count , $owner_id){
            $new_obj_id = $this->getMaxIdItems($modelItemsDb , "object_id") + 1;
           // dd($owner_id);
            $this->addItemToSql($modelItemsDb , $owner_id , $new_obj_id , $item_id , $count , $this->inventory_name);
   
            info("ItemsRusAcis>>> зачислен итем char_name " . $char_name . " id item " . $item_id . " количество " . $count);
        }

        public function getL2itemAcis($modelItemsDb , $char_name , $item_id, $obj_id_char){
            $result =  $this->getItemToSql($modelItemsDb , $obj_id_char , $item_id);
            return $result;
         }


    }
?>