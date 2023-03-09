<?php

namespace Tests\Feature\Lineage\Sheldure;


use App\Models\Server\ServerCharacters;
use App\Models\Server\ServerClanData;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;
use Config;
use App\Service\Sheldure\Info\Characters\Support\CalcCharacters;
use App\Service\Sheldure\Info\Clan\CalcClan;


class SheldureStatisticServerTest extends TestCase
{
     use RefreshDatabase;

     public $serverCharacters;
     public $serverClanData;
     public $sheldureservers;
     public $list_server;
     public $calcCharacters;
     public $calcClan;


     //создание тестовой модели
     public function setUp(): void
     {
         parent::setUp();

         ServerCharacters::truncate();
         ServerClanData::truncate();
         $this->serverCharacters = ServerCharacters::factory()->count(3)->create();
         $this->serverClanData = ServerClanData::factory()->count(3)->create();
         $this->list_server = Config::get('lineage2.server.list_server');
         $this->calcCharacters = new CalcCharacters();
         $this->calcClan = new CalcClan();
     }

       
     public function testServerCharacters()
     {
          array_walk($this->list_server, "self::startWork");
          $model = ServerCharacters::all();
          dd($model);
     }

     public function startWork(&$item, $key)
     {  
         $this->calcCharacters->run($item);
     }

    

}