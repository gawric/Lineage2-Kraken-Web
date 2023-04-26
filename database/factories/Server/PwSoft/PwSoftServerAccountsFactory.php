<?php

namespace Database\Factories\Server\PwSoft;

use Illuminate\Database\Eloquent\Factories\Factory;


class PwSoftServerAccountsFactory extends Factory
{

     public function definition()
     {
         return [
            'login' => fake()->randomElement(['gawrictest_pwsoft']),
            'password' =>  fake()->randomElement(['12345678']),
         ];
     }
}