<?php

namespace Database\Factories\Server;

use Illuminate\Database\Eloquent\Factories\Factory;

//Фейковые данные для тестирования RusAcis Accounts
class ServerAccountsFactory extends Factory
{
  
     public function definition()
     {
         return [
            'login' => fake()->randomElement(['gawrictest_acis']),
            'password' =>  fake()->randomElement([bcrypt('12345678')]),
         ];
     }
}