<?php

namespace Database\Factories\Statistics;

use Illuminate\Database\Eloquent\Factories\Factory;


class InfoVisitStatisticsFactory extends Factory
{
 
   
   // $table->id();
   // $table->unsignedBigInteger('all_statistics_id');
   // $table->foreign('all_statistics_id')
   // ->references('id')->on('all_statistics')
   // ->onDelete('cascade');
   // $table->string('ip_address');
   // $table->string('open_url');
   // $table->integer('count_visit');
   // $table->timestamp('created_at');
   // $table->timestamp('updated_at');
     public function definition()
     {
         return [
          //   'id' => fake()->randomElement([1, 2, 3]),
             'all_statistics_id' => fake()->randomElement([1]),
             'ip_address' => fake()->randomElement(['127.0.0.2','192.168.0.12','172.15.34.2']),
             'open_url' => fake()->randomElement(['http://l2kwInfoVisit.ru','http://l2kwInfoVisit.ru/registration','http://l2kwInfoVisit.ru/status']),
             'count_visit' => 10,
             'created_at' =>  now(),
             'updated_at' =>  now()
         ];
     }
}
