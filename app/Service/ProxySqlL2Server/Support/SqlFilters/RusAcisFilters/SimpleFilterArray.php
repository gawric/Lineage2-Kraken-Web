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
           // $data = [];
            if(count($dataOr)> 0){
                return $query->where(function ($query) use ($dataOr) {
                  //  info("SimpleFilterArray>>>>DataOr+++++++++++++++++++++++++++++++++++++++++++++++++");
                  //  info($dataOr);
                    foreach ($dataOr as $keyword) {
                       $query->orWhere($keyword['field'], $keyword['comparison'], $keyword['data']);
                    }
                
                });
            }
     
           // info("SimpleFilterArray>>>> resullllllllllllllllllllllllllt ");
           // info($data);

        }

       
    }
}
?>