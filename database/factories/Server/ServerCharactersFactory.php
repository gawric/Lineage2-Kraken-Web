<?php

namespace Database\Factories\Server;

use Illuminate\Database\Eloquent\Factories\Factory;

//Фейковые данные для тестирования RusAcis
class ServerCharactersFactory extends Factory
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
             'obj_id' => fake()->unique()->numberBetween(0,2),
             'account_name' => fake()->randomElement(['account_name_test']),
             'char_name' => fake()->unique()->randomElement(['test_user_1' , 'test_user_2' , 'test_user_3' , 'test_user_4']),
             'pvpkills' => fake()->randomElement([0 , 5 , 9 , 3]),
             'pkkills' =>  fake()->randomElement([0 , 10 , 20, 30]),
             'classid' =>  fake()->randomElement([11, 99, 16 , 15]), 
             'level' =>  fake()->randomElement([11, 99, 16 , 15]), 
             'onlinetime' =>  fake()->randomElement([11, 99, 16 , 15]), 
             'online' =>  fake()->randomElement([0,1]), 
             //clan_id - генерируем в таблиц ServerClanData
             'clanid' => fake()->randomElement([1, 2, 3]), 
         ];
     }
}