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

         ServerCharacters::truncate();
         ServerClanData::truncate();
         $this->serverCharacters = ServerCharacters::factory()->count(4)->create();
         $this->serverClanData = ServerClanData::factory()->count(3)->create();
         $this->list_server = Config::get('lineage2.server.list_server');
         $this->calcCharacters = new CalcCharacters();
         $this->calcClan = new CalcClan();
     }

       
     public function testServerTopClanRusAcis(){
        array_walk($this->list_server, "self::startWorkClan");
        $result_rusacis = $this->getServerRusAcis($this->list_server);

        $all_count_server_clan = (int)count($result_rusacis);
        $all_valid_model_clan = ServerClanData::all();

        $finishtableclan = count(ClanStatic::all());
        

    
        $resultCharacters = ServerCharacters::all();
        $uniqueidclan = $resultCharacters->unique('clanid')->pluck('clanid')->toArray();
        //dd($uniqueidclan);

        $clear_temp_mode_clan = [];
        //Чистим созданные кланы если в таблице Characters нет не одного юзера с таким id клана 
        //мы его выкидываем из конечного результата в таблице (ClanStatic)!
        foreach($all_valid_model_clan as $item){
            if(in_array($item['clan_id'], $uniqueidclan)){
                    array_push($clear_temp_mode_clan , $item);
            }
        }
      //  dd(count($clear_temp_mode_clan));
        $finish_expected_records_clan = $all_count_server_clan  * count($clear_temp_mode_clan);

        $this->assertEquals($finish_expected_records_clan  ,  $finishtableclan);
     }


     public function testServerTopCharactersRusAcis()
     {
          array_walk($this->list_server, "self::startWork");

          $model = ServerCharacters::all();
          $temp = [];
          $deltemp = [];

          foreach($model as $item){

             if($item['pvpkills'] == 0 and $item['pkkills'] == 0){
                array_push($deltemp , $item);
             }
             else{
                array_push($temp , $item);
             }
          }
          //кол-во серверов с id rusacis
          $result = $this->getServerRusAcis($this->list_server);

          //всего валидных моделей. Нулевые pk/pvp мы отбросили выше
          $all_valid_model = (int)count($temp);
          $all_count_server = (int)count($result);

          $finish_expected_records = $all_count_server  * $all_valid_model;
          //все записи по всем серверам
          $finishtable = CharactersStatic::all();

          //Здесь сравниваем кол-во сгенерированных строк  finish_expected_records (кол-во серверов rusacis мы учитываем их может быть 1 или 2 или 3)
          //С реальным количеством записаных в базу characters_static_servers 
          $this->assertEquals($finish_expected_records  , count($finishtable));
          
     }

     public function startWork(&$item, $key)
     {  
         $this->calcCharacters->run($item);
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