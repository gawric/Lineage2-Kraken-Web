<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ClanStaticFactory extends Factory
{
   // protected $model = ClanStatic::class;

    //['clan_id', 'clan_name','server_id','clan_level', 'reputation_score' , 'hasCastle' , 'ally_id', 'ally_name', 'member'];
    public function definition()
    {
        return [
            'clan_id' => fake()->randomElement([1, 2, 3]),
            'clan_name' => fake()->randomElement(['test_clan_1']),
            'server_id' => 3,
            'clan_level' =>  fake()->randomElement([1, 2, 3]),
            'reputation_score' =>  fake()->randomElement([100, 200, 300]), 
            'hasCastle' => fake()->randomElement([0, 1]),
            'ally_id' =>  0, 
            'ally_name' =>  null, 
            'member' => fake()->randomElement([0, 5 , 25 , 35]),
        ];
    }
}
