<?php

namespace Database\Factories\Server\PwSoft;

use Illuminate\Database\Eloquent\Factories\Factory;

//Фейковые данные для тестирования PwSoft
class PwSoftServerCharactersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // `account_name` VARCHAR(45) DEFAULT NULL,
    // `obj_Id` INT UNSIGNED NOT NULL DEFAULT 0,
    // `char_name` VARCHAR(35) NOT NULL,
    // `pvpkills` SMALLINT UNSIGNED DEFAULT NULL,
    // `pkkills` SMALLINT UNSIGNED DEFAULT NULL,
    // `classid` TINYINT UNSIGNED DEFAULT NULL,
    // `clanid` INT UNSIGNED DEFAULT NULL,
     public function definition()
     {
         return [
             'obj_id' => fake()->unique()->numberBetween(0,3999),
             'account_name' => fake()->randomElement(['account_name_test_pwsoft']),
             'char_name' => fake()->unique()->randomElement(['test_user_1_pwsoft' , 'test_user_2_pwsoft' , 'test_user_3_pwsoft' , 'test_user_4_pwsoft']),
             'pvpkills' => fake()->randomElement([0 , 20]),
             'pkkills' =>  fake()->randomElement([0 , 30]),
             'classid' =>  fake()->randomElement([11, 99, 16 , 15]), 
             'level' =>  fake()->randomElement([11, 99, 16 , 15]), 
             'onlinetime' =>  fake()->randomElement([11, 99, 16 , 15]), 
             'online' =>  fake()->randomElement([0,1]), 
             //clan_id - генерируем в таблиц ServerClanData
             'clanid' => fake()->randomElement([4, 5, 6]), 
         ];
     }
}