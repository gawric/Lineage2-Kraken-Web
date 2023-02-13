<?php

namespace App\Service\Sheldure\Info\Support\SqlFilter;
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
       // info("Категори slug");
       //info($categorySlug);
          // $slugtest = [['obj_id', '=', 268481144]];
          // return  $query->where('pvpkills','>' , 0);
          return  $query->where($categorySlug);

        // $users = $query->select('users.id', 'users.name', 'users.email', 'countries.name as country_name')
       // 	->join('countries', 'countries.id', '=', 'users.country_id')

         //return $query->select('characters.obj_id','clan_data.clan_id as clan_id')->join('clan_data', 'clan_data.clan_id', '=', 'characters.obj_id');
       
    }
}
?>