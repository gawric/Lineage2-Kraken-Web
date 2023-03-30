<?php

namespace Database\Factories\Server\Lucera;

use Illuminate\Database\Eloquent\Factories\Factory;

//Фейковые данные для тестирования Lucera
class LuceraServerCharactersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // `account_name` VARCHAR(45) DEFAULT NULL,
    // `charId` INT UNSIGNED NOT NULL DEFAULT 0,
    // `char_name` VARCHAR(35) NOT NULL,
    // `pvpkills` SMALLINT UNSIGNED DEFAULT NULL,
    // `pkkills` SMALLINT UNSIGNED DEFAULT NULL,
    // `classid` TINYINT UNSIGNED DEFAULT NULL,
    // `clanid` INT UNSIGNED DEFAULT NULL,
     public function definition()
     {
         return [
             'charId' => fake()->unique()->numberBetween(0,3999),
             'account_name' => fake()->randomElement(['account_name_test_lucera']),
             'char_name' => fake()->unique()->randomElement(['test_user_1_lucera' , 'test_user_2_lucera' , 'test_user_3_lucera' , 'test_user_4_lucera']),
             'pvpkills' => fake()->randomElement([0 , 20]),
             'pkkills' =>  fake()->randomElement([0 , 30]),
             'classid' =>  fake()->randomElement([11, 99, 16 , 15]), 
             'level' =>  fake()->randomElement([11, 99, 16 , 15]), 
             'onlinetime' =>  fake()->randomElement([11, 99, 16 , 15]), 
             'online' =>  fake()->randomElement([0,1]), 
             //clan_id - генерируем в таблиц ServerClanData
             'clanid' => fake()->randomElement([7, 8, 9]), 
         ];
     }
}