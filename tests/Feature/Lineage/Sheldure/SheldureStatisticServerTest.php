<?php

namespace Tests\Feature\Lineage\Sheldure;


use App\Models\Server\ServerCharacters;
use App\Models\Server\ServerClanData;
use App\Models\CharactersStatic;
use App\Models\ClanStatic;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;
use Config;
use App\Service\Sheldure\Info\Characters\Support\CalcCharacters;
use App\Service\Sheldure\Info\Clan\CalcClan;


class SheldureStatisticServerTest extends TestCase
{
    //не очищается базу с другим подключением!
    // use RefreshDatabase;

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
         $this->list_server = Config::get('lineage2.server.list_server');
         $this->addFakerData($this->list_server);
      
        // dd("Model complete");
         $this->calcCharacters = new CalcCharacters();
         $this->calcClan = new CalcClan();
     }



     public function testServerTopCharactersRusAcis()
     {
          array_walk($this->list_server, "self::startWork");
         // dd(CharactersStatic::all());
          $this->getEndResult($this->list_server);
          $this->assertEquals($finish_expected_records  , $count_finish_table);
          
     }

       

     private function addFakerData($list_server){
        foreach($list_server as $server){
            $server_id =  $server['id'];
            $character_model =  $server['server_db_model'];
            $clan_model =  $server['clandata_db_model'];

            $character_model::truncate();
            $clan_model::truncate();
        
            $character_model::factory()->count(4)->create();
            $clan_model::factory()->count(3)->create();
         }
     }
     

     public function startWork(&$item, $key)
     {  
         $this->calcCharacters->run($item);
     }

     private function getEndResult($list_server){
        foreach($list_server as $server){
            $this->getValidChars($server);
        }
     }
     //ищем чаров у которых есть или pvp или pk
     //если их нет мы выкидываем из топа
     private function getValidChars($server){
        $character_model =  $server['server_db_model'];
        $all_chars = $character_model::select("*")->where('pvpkills', '>',0)->orWhere('pkkills', '>' ,0)->get();
        dd($all_chars->count());
        return $result2;
     }

     private function getCountCharacters($finishtable){
        $count = 0;
        foreach($finishtable as $item){
             if($item['server_id'] == 1){
                $count++;
             }
        }

        return $count;
     }

     //0 - в конфиге это RusAcis 
     private function getServerRusAcis($list_server){
        $temp = [];
        foreach($list_server as $item){
            if($item['developer_id'] == 0){
                array_push($temp , $item);
            }
        }

        return $temp;
     }

     public function startWorkClan(&$item, $key)
     {  
         $this->calcClan->run($item);
     }
   
    

}