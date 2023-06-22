<?php

namespace Database\Factories\Promo;

use Illuminate\Database\Eloquent\Factories\Factory;


class PromoCodesFactory extends Factory
{

   // $table->id();
    //$table->string('code')->unique();
   // $table->string('create_name');
   // $table->integer('item_id');
   // $table->integer('count');
   // $table->timestamp('created_at');
    //$table->timestamp('updated_at');
   // $table->boolean('is_used')->default(false);
    public function definition()
    {
        return [
            'code' => fake()->unique()->lexify(),
            'create_name' => fake()->randomElement(['sunilpromo' , 'gawricpromo' , 'testpromoname']),
            'item_id' =>  fake()->randomElement([4037,1253,3369,9645,5543]),
            'count' => fake()->randomElement([12,15,5]),
            'created_at' => now(),
            'updated_at' => now(),
            'is_used' => 0,
        ];
    }
}
