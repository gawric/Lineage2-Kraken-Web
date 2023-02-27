<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CharactersStatic>
 */
class CharactersStaticFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
            //$table->integer('obj_id')->unsigned();
           // $table->integer('server_id')->unique();
        //$table->string('name');
        //$table->string('class');
       // $table->string('clan');
       // $table->integer('lvl');
        //$table->integer('pvp');
        //$table->integer('pk');
       // $table->integer('onlinetime');
       // $table->boolean('online');
     public function definition()
     {
         return [
             'obj_id' => fake()->randomElement([658568, 568345, 324876]),
             'server_id' => fake()->randomElement([1]),
             'name' => fake()->randomElement(['test_username']),
             'class' => fake()->randomElement(['Human Fighter' , 'Dark Elf' , 'Dwarf']),
             'clan' =>  fake()->randomElement(['Test_clan_1' , 'Test_clan_2' , 'Test_clan_3']),
             'lvl' =>  fake()->randomElement([10, 15, 25]), 
             'pvp' => fake()->randomElement([45]), 
             'pk' =>  fake()->randomElement([9]),  
             'onlinetime' =>  fake()->randomElement([546, 88, 195]),  
             'online' => fake()->randomElement([0,1,1]),
         ];
     }
}
