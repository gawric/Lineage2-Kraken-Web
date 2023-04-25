<?php

namespace App\Service\ProxySqlL2Server\Template\Acis;

use Config;
use App\Service\ProxySqlL2Server\Support\ProxyFilters\GeneralFilters;


   class AcisTemplateItemsSql 
   {
        public function getOwnerIdToCharName($unique_clan_id , $current_clandata_db_model){
            $clanidfilter = new GeneralFilters(['clandatafilter'] , $unique_clan_id);
            return  $current_clandata_db_model::filter($clanidfilter)->get(['clan_name' ,'clan_id']);
        }

        public function getMaxIdItems($modelItemsDb , $name_column){
           return  $modelItemsDb::max($name_column);
        }

        public function createModelItemAcis($modelItemsDb , $owner_id , $object_id , $item_id , $count , $loc){
            $modelItems = new $modelItemsDb();
            $modelItems->owner_id = $owner_id;
            $modelItems->object_id = $object_id;
            $modelItems->item_id = $item_id;
            $modelItems->count = $count;
            $modelItems->loc = $loc;
            //info("AcisTemplateItemsSql>createModelItemAcis> Create Model " . $modelItems);
            return  $modelItems;
        }

        public function addItemToSql($modelItemsDb , $owner_id , $object_id , $item_id , $count , $loc){
            $model = $this->createModelItemAcis($modelItemsDb , $owner_id , $object_id , $item_id , $count , $loc);
            $model->save();
        }

        
    }
?>