<?php

namespace Tests\Feature\Lineage\Status;


use App\Models\ClanStatic;
use App\Models\CharactersStatic;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;
use Config;



class StatisticsServerTest extends TestCase
{
     use RefreshDatabase;

     public $clanStatics;
     public $charactersStatics;

     //создание тестовой модели
     public function setUp(): void
     {
         parent::setUp();

         $this->clanStatics = ClanStatic::factory()->count(3)->create();
         $this->charactersStatics = ClanStatic::factory()->count(3)->create();
     }

     //server/3 - это статистика по кланам
     //stats/3 - это статистика по 3 серверу
     public function test_a_get_top_clan()
     {
          $response = $this->get('/statistic/server/3/stats/3');
         // $response->dd();
          $response->assertStatus(200)
                    ->assertJsonFragment([
                        'clan_name' => 'test_clan_1',
                     ]);
     }

     
  

}
