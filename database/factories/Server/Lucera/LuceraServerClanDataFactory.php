<?php

namespace Database\Factories\Server\Lucera;

use Illuminate\Database\Eloquent\Factories\Factory;

//Фейковые данные для тестирования Lucera
class LuceraServerClanDataFactory extends Factory
{
   
     public function definition()
     {
         return [
             'clan_id' => fake()->unique()->randomElement([7 , 8 , 9]),
             'clan_name' => fake()->unique()->randomElement(['clan_test_name_1_lucera' , 'clan_test_name_2_lucera' , 'clan_test_name_3_lucera']),
             'clan_level' => fake()->randomElement([1 , 2 , 3]),
             'reputation_score' => fake()->randomElement([10 , 20 , 5 , 3]),
             'hasCastle' =>  fake()->randomElement([0 , 1 , 0 , 0]),
         ];
     }
}