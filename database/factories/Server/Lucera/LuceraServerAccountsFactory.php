<?php

namespace Database\Factories\Server\Lucera;

use Illuminate\Database\Eloquent\Factories\Factory;


class LuceraServerAccountsFactory extends Factory
{

     public function definition()
     {
         return [
            'login' => fake()->randomElement(['gawrictest_lucera']),
            'password' =>  fake()->randomElement(['12345678']),
         ];
     }
}