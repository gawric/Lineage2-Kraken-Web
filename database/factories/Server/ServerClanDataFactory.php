<?php

namespace Database\Factories\Server;

use Illuminate\Database\Eloquent\Factories\Factory;

//Фейковые данные для тестирования RusAcis
class ServerClanDataFactory extends Factory
{

     public function definition()
     {
         return [
             'clan_id' => fake()->unique()->randomElement([1 , 2 , 3]),
             'clan_name' => fake()->unique()->randomElement(['clan_test_1_acis' , 'clan_test_2_acis' , 'clan_test_3_acis']),
             'clan_level' => fake()->randomElement([1 , 2 , 3]),
             'reputation_score' => fake()->randomElement([10 , 20 , 5 , 3]),
             'hasCastle' =>  fake()->randomElement([0 , 1 , 0 , 0]),
         ];
     }
}