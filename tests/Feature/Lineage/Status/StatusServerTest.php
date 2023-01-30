<?php

namespace Tests\Feature;

use App\Service\Status\StatusServer;
use App\Models\InfoServer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;
use Config;
use App\Service\Status\Support\SupportFuncStatus;


class StatusServerTest extends TestCase
{
     use RefreshDatabase;

     public $infoserver;

     //создание тестовой модели
     public function setUp(): void
     {
         parent::setUp();
         //$is = InfoServer::factory()->make();
         $this->infoserver = InfoServer::factory()->create();
     }

 
     public function test_a_get_info_server()
     {
          $response = $this->get('/status/server');
         // $response->dd();
          $response->assertStatus(200)
                     ->assertJsonFragment([
                        'name' => 'X50 Nightmare',
                     ]);
     }

     public function test_func_cron_1_min_get_online_players(){
          $timeout = Config::get('lineage2.server.timeout_socket');
          $list_server = Config::get('lineage2.server.list_server');
          
          $this->ss = new StatusServer($timeout);  
          $this->sf = new SupportFuncStatus($this->ss);
         
          $complete_server = $this->sf->getStatusServersFunct($list_server);
          $this->assertEquals(3 , count($complete_server) );

     }    

}
