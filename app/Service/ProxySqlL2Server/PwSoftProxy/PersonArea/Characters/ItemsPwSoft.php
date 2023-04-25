<?php

namespace App\Service\ProxySqlL2Server\PwSoftProxy\PersonArea\Characters;

 use Config;
 use Log;
 use App\Service\ProxySqlL2Server\Template\Chars\CharactersTemplateChars;
 use App\Service\ProxySqlL2Server\Template\Acis\AcisTemplateItemsSql;

    class ItemsPwSoft extends AcisTemplateItemsSql {

        private $inventory_name;

        public function __construct() {
            $this->inventory_name = Config::get('lineage2.server.inventory_item');
        }

        public function addL2itemPwSoft($modelItemsDb , $char_name , $item_id, $count , $owner_id){
            $new_obj_id = $this->getMaxIdItems($modelItemsDb , "object_id") + 1;
           // dd($owner_id);
            $this->addItemToSql($modelItemsDb , $owner_id , $new_obj_id , $item_id , $count , $this->inventory_name);
   
            info("ItemsPwSoft>>> зачислен итем char_name " . $char_name . " id item " . $item_id . " количество " . $count);
        }

    }
?>