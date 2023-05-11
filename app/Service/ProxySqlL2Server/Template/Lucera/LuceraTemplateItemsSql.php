<?php

namespace App\Service\ProxySqlL2Server\Template\Lucera;

use Config;
use App\Service\ProxySqlL2Server\Support\ProxyFilters\GeneralFilters;


   class LuceraTemplateItemsSql 
   {

        public function getMaxIdItems($modelItemsDb , $name_column){
           return  $modelItemsDb::max($name_column);
        }

        //имеются существенные различия в таблицах между acis и lucera 
        //хотя основная структура схожа. На всякий случай выведу в отдельный класс
        public function createModelItemLucera($modelItemsDb , $owner_id , $object_id , $item_id , $count , $loc){
            $modelItems = new $modelItemsDb();
            $modelItems->owner_id = $owner_id;
            $modelItems->object_id = $object_id;
            $modelItems->item_id = $item_id;
            $modelItems->count = $count;
            $modelItems->loc = $loc;
            $modelItems->first_owner_id = $owner_id;
            info("LuceraTemplateItemsSql>createModelItemAcis> Create Model " . $modelItems);
            return  $modelItems;
        }

        public function addItemToSql($modelItemsDb , $owner_id , $object_id , $item_id , $count , $loc){
            $model = $this->createModelItemLucera($modelItemsDb , $owner_id , $object_id , $item_id , $count , $loc);
            $model->save();
        }

        public function getItemToSql($modelItemsDb , $obj_id_char , $item_id){
            if(isset($item_id) and isset($obj_id_char)){
                $filtersItems = new GeneralFilters(['simplefilter'] , [['owner_id', '=', $obj_id_char] , ['item_id', '=', $item_id]]);
                return $modelItemsDb::filter($filtersItems)->get(['item_id' , 'count']);
            }
            return [];
    
        }

        
    }
?>