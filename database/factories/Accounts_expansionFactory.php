<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Accounts_expansionFactory extends Factory
{
   // protected $model = ClanStatic::class;

    //['clan_id', 'clan_name','server_id','clan_level', 'reputation_score' , 'hasCastle' , 'ally_id', 'ally_name', 'member'];
    public function definition()
    {
        return [
            'id' => fake()->randomElement([1]),
            'login' => fake()->randomElement(['gawrictest']),
            'email' => 'gawric@mail.ru',
            'password' =>  fake()->randomElement([bcrypt('12345678')]),
            'email_verified_at' => now(),
        ];
    }
}
