<?php

namespace App\Service\ProxySqlL2Server\Support\SqlFilters\RusAcisFilters;
use Log;

class SimpleFilterArray
{
   // $results = User::where([
      //  ['column_name1', '=', $value1],
      //  ['column_name2', '<', $value2],
      //  ['column_name3', '>', $value3]
    //])->get();

    function __invoke($query, $dataOr)
    {
        if(isset($query) and isset($dataOr)){
            return $query->where(function ($query) use ($dataOr) {
                foreach ($dataOr as $keyword) {
                   $query->orWhere($keyword['field'], $keyword['comparison'], $keyword['data']);
                }
            });
        }

       
    }
}
?>