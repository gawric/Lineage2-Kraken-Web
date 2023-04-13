<?php

namespace App\Service\ProxySqlL2Server\Support\SqlFilters\RusAcisFilters;
use Log;

class SimpleFilter
{
   // $results = User::where([
      //  ['column_name1', '=', $value1],
      //  ['column_name2', '<', $value2],
      //  ['column_name3', '>', $value3]
    //])->get();

    function __invoke($query, $categorySlug)
    {
          return  $query->where($categorySlug);
    }
}
?>