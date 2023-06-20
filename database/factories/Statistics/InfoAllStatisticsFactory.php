<?php

namespace Database\Factories\Statistics;

use Illuminate\Database\Eloquent\Factories\Factory;


class InfoAllStatisticsFactory extends Factory
{
 
   
   // $table->id();
   // $table->timestamp('created_at');
    //$table->timestamp('updated_at');
     public function definition()
     {
         return [
             'id' => 1,
             'created_at' =>  now(),
             'updated_at' =>  now()
         ];
     }
}
