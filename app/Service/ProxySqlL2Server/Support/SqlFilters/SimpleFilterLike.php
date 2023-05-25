<?php

namespace App\Service\ProxySqlL2Server\Support\SqlFilters;
use Log;

class SimpleFilterLike
{
   // $results = User::where([
      //  ['column_name1', '=', $value1],
      //  ['column_name2', '<', $value2],
      //  ['column_name3', '>', $value3]
    //])->get();

    function __invoke($query, $categorySlug)
    {
          return  $query->whereLike($categorySlug);
    }
}
?>