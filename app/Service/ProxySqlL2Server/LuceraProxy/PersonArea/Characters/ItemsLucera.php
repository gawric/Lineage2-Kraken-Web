<?php

namespace App\Service\ProxySqlL2Server\LuceraProxy\PersonArea\Characters;

 use Config;
 use Log;
 use App\Service\ProxySqlL2Server\Template\Chars\CharactersTemplateChars;
 use App\Service\ProxySqlL2Server\Template\Lucera\LuceraTemplateItemsSql;

    //похоже подходит от Acis Шаблона добавление item
    class ItemsLucera extends LuceraTemplateItemsSql {

        private $inventory_name;

        public function __construct() {
            $this->inventory_name = Config::get('lineage2.server.inventory_item');
        }

        public function addL2itemLucera($modelItemsDb , $char_name , $item_id, $count , $owner_id){
            $new_obj_id = $this->getMaxIdItems($modelItemsDb , "object_id") + 1;
            //info();
            $this->addItemToSql($modelItemsDb , $owner_id , $new_obj_id , $item_id , $count , $this->inventory_name);
            info("addL2itemLucera>>> зачислен итем char_name " . $char_name . " id item " . $item_id . " количество " . $count);
        }

        public function getL2itemLucera($modelItemsDb , $char_name , $item_id, $obj_id_char){
           return $this->getItemToSql($modelItemsDb , $obj_id_char , $item_id);
        }

    }
?>