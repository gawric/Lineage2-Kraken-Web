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
         $this->charactersStatics = CharactersStatic::factory()->count(3)->create();
     }

     //server/1 - это статистика по 1 серверу 
     //stats/3 -  это статистика по кланам
     public function test_a_get_top_clan()
     {
          $response = $this->get('/statistic/server/1/stats/3');
         // $response->dd();
          $response->assertStatus(200)
                    ->assertJsonFragment([
                        'clan_name' => 'test_clan_1',
                     ]);
     }

     //server/1 - это по серверу номер 1
     //stats/2 - это статистика топ пвп
     public function test_a_get_top_pvp()
     {
          $response = $this->get('/statistic/server/1/stats/2');
         // $response->dd();
          $response->assertStatus(200)
                    ->assertJsonFragment([
                       'name' => 'test_username',
                       'pvp' => 45,
                    ]);
     }

      //server/1 - это по серверу номер 1
     //stats/1 - это статистика топ пвп
     public function test_a_get_top_pk()
     {
          $response = $this->get('/statistic/server/1/stats/1');
         // $response->dd();
        $response->assertStatus(200)
         ->assertJsonFragment([
             'name' => 'test_username',
             'pk' => 9,
          ]);
     }

     
  

}
