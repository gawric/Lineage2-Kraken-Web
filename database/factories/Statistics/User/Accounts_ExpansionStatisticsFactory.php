<?php

namespace Database\Factories\Statistics\User;

use Illuminate\Database\Eloquent\Factories\Factory;


class Accounts_ExpansionStatisticsFactory extends Factory
{
 
   
       // $table->id();
       // $table->string('ip_address');
       // $table->string('url');
       // $table->string('status');
       // $table->integer('count_visit');
       // $table->unsignedBigInteger('accounts_expansion_id');
       // $table->unsignedBigInteger('all_statistics_id');
       // $table->foreign('all_statistics_id')
       // ->references('id')->on('all_statistics')
       //->onDelete('cascade');
       // $table->timestamp('created_at');
        //$table->timestamp('updated_at');
     public function definition()
     {
         return [
           //  'id' => fake()->randomElement([1, 2, 3]),
             'ip_address' => fake()->randomElement(['127.0.0.1' ,'192.168.0.11' , '172.15.34.1' ]),
             'url' => fake()->randomElement(['http://l2kw.ru' , 'http://l2kw.ru/registration' , 'http://l2kw.ru/status']),
             'status' => fake()->randomElement(['status1' , 'status2' , 'status3']),
             'count_visit' =>fake()->randomElement([16, 22, 31]),
             'accounts_expansion_id' =>12, 
             'all_statistics_id' => 1,
             'created_at' =>  now() ,
             'updated_at' =>  now()
         ];
     }
}
