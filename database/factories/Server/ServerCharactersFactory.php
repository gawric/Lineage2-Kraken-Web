<?php

namespace Database\Factories\Server;

use Illuminate\Database\Eloquent\Factories\Factory;

//Фейковые данные для тестирования RusAcis Characters
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
             'obj_id' => fake()->unique()->numberBetween(0,3999),
             'account_name' => fake()->randomElement(['account_name_test_acis']),
             'char_name' => fake()->unique()->randomElement(['test_user_1_acis' , 'test_user_2_acis' , 'test_user_3_acis' , 'test_user_4_acis']),
             'pvpkills' => fake()->randomElement([0 , 20]),
             'pkkills' =>  fake()->randomElement([0 , 30]),
             'classid' =>  fake()->randomElement([11, 99, 16 , 15]), 
             'level' =>  fake()->randomElement([11, 99, 16 , 15]), 
             'onlinetime' =>  fake()->randomElement([11, 99, 16 , 15]), 
             'online' =>  fake()->randomElement([0,1]), 
             //clan_id - генерируем в таблиц ServerClanData
             'clanid' => fake()->randomElement([1, 2, 3]), 
         ];
     }
}