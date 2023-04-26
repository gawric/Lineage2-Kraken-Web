<?php

namespace Database\Factories\Server\PwSoft;

use Illuminate\Database\Eloquent\Factories\Factory;

//Фейковые данные для тестирования PwSoft
class PwSoftServerClanDataFactory extends Factory
{

     public function definition()
     {
         return [
             'clan_id' => fake()->unique()->randomElement([4 , 5 , 6]),
             'clan_name' => fake()->unique()->randomElement(['clan_test_name_1_pwsoft' , 'clan_test_name_2_pwsoft' , 'clan_test_name_3_pwsoft']),
             'clan_level' => fake()->randomElement([1 , 2 , 3]),
             'reputation_score' => fake()->randomElement([10 , 20 , 5 , 3]),
             'hasCastle' =>  fake()->randomElement([0 , 1 , 0 , 0]),
         ];
     }
}