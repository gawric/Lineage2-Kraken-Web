<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InfoServer>
 */
class InfoServerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'server_id' => 1,
            'status' => 'offline',
            'online' => 0,
            'last_update_at' =>  now(),
            'updated_at' =>  now(),  
            'created_at' =>  now(), 
        ];
    }
}
