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
      
   
         $this->calcCharacters = new CalcCharacters();
         $this->calcClan = new CalcClan();
     }


    //Общая логика теста:
    //заполняем базу фейками по всем серверам
    //запускаем sheldure  characters
    //проверяем таблицу  characters_static и сравниваем данные с полученными данными из characters серверов
    //example ['count'=> количество совпадений на сервере игры , 'server_id'=> id выбранного сервера]
     public function testServerTopCharactersAllServers()
     {
          array_walk($this->list_server, "self::startWork");

          $all_Expected_Result = $this->getEndCharactersResult($this->list_server);
          $this->assertEquals(true  , $this->isEqualsResult($all_Expected_Result));
          
     }


    //Общая логика теста:
    //заполняем базу фейками по всем серверам
    //запускаем sheldure  clan
     //забираем все id сгенерированных нашими фейками из clan_data
     //создаем запрос проверить есть ли у полученных кланов юзеры с таким id_клана в таблице characters
     //запоминаем сколько юзеров у каждого клана. Сравниваем ClanStatic с полученным результатом
     //ВНИМАНИЕ в финале мы не сравниваем сколько мемберов у клана только проверяем, что он попал в конечный итог!
     public function testServerTopClanAllServers(){
        array_walk($this->list_server, "self::startWorkClan");
        $all_Expected_Result_clan =$this->getEndClanResult($this->list_server);
        $this->assertEquals(true  , $this->isEqualsResultClan($all_Expected_Result_clan));
     }

     private  function getEndClanResult($list_server){
        $all_clan_Finish_list = [];
        foreach($list_server as $server){
            array_push($all_clan_Finish_list , $this->getValidClan($server));
        }
        return $all_clan_Finish_list ;
     }

     private function getValidClan($server){

        $clandata_model =  $server['clandata_db_model'];
        $character_model =  $server['server_db_model'];

        $server_id =  $server['id'];
        $all_clan_server = $clandata_model::select("*")->where('clan_id', '>',0)->get();

        $temp = [];
        $f = 0;

        foreach ($all_clan_server as $clan) {
            $count_clan = $character_model::select("*")->where('clanid', '=', $clan->clan_id)->get()->count();

            if($count_clan > 0){
                array_push($temp , ['count' => $f++, 'clan_id'=>$clan->clan_id, 'server_id' =>$server_id]);
            }
        }
         return $temp;
     }

     private function isEqualsResultClan($all_Expected_Result_clan ){
        return $this->forEachEqualsClan($all_Expected_Result_clan );
     }


     private function forEachEqualsClan($all_Expected_Result_clan ){
        foreach($all_Expected_Result_clan as $arr_expected){

          

            $all_server_clan = 0;
            $count = count($arr_expected);

            foreach($arr_expected as $item_clan_expected){
                
                $count_static_clan = $this->getCountFinalResultClan($item_clan_expected['clan_id'] , $item_clan_expected['server_id']);

                if($count_static_clan >0){
                    $all_server_clan++;
                }
            }

            if($count != $all_server_clan){
                //dd($clan_id ."  - " .  $server_id . " result " . $all_server_clan . " expected " . $count);
                return false;
            }
            
        }

        return true;
     }

     private function getEndCharactersResult($list_server){
        $all_Finish_list = [];
        foreach($list_server as $server){
            array_push($all_Finish_list , $this->getValidChars($server));
        }

        return $all_Finish_list;
     }

     //ищем чаров у которых есть или pvp или pk
     //если их нет мы выкидываем из топа
     private function getValidChars($server){
        $character_model =  $server['server_db_model'];
        $server_id =  $server['id'];
        $all_chars = $character_model::select("*")->where('pvpkills', '>',0)->orWhere('pkkills', '>' ,0)->get();
        //dd($all_chars->count());
        return ['count' => $all_chars->count(), 'server_id' =>$server_id];
     }

     private function isEqualsResult($all_Expected_Result ){
        return $this->forEachEquals($all_Expected_Result );
     }


     private function forEachEquals($all_Expected_Result ){
        foreach($all_Expected_Result as $item_expected){
            $count = $item_expected['count'];
            $server_id = $item_expected['server_id'];
            $result_count =  $this->getCountFinalResult($server_id);
         

            if($count != $result_count){
                return false;
            }
        }

        return true;
     }

     private function getCountFinalResult($server_id){
        return $result = CharactersStatic::select("*")->where('server_id', '=', $server_id)->get()->count();
     }

     private function getCountFinalResultClan($clan_id , $server_id){
        $test = [['server_id', '=', $server_id] , ['clan_id', '=', $clan_id]];
        return $result = ClanStatic::select("*")->where($test)->get()->count();
     }


     public function startWorkClan(&$item, $key)
     {  
         $this->calcClan->run($item);
     }


     public function startWork(&$item, $key)
     {  
         $this->calcCharacters->run($item);
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
     
   
    

}