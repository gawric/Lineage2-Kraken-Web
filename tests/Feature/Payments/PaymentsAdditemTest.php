<?php

namespace Tests\Feature;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;
use Config;
use App\Models\Server\ServerAccounts;
use App\Service\Utils\FunctionSupport;
use App\Service\Utils\FunctionPayments;
use App\Providers\Events\L2AddItem;;
use App\Models\Accounts_expansion;
use Illuminate\Support\Facades\Schema;


//Проверка добавление итемов после того как платежный сервер отправит нам уведомление о зачислении средств!
class PaymentsAdditemTest extends TestCase
{

     public $list_server;
     public $role_name_user;
 
     public function setUp(): void
     {
         parent::setUp();
         $this->list_server = Config::get('lineage2.server.list_server');
         $this->addFakerAccountExpansion();
         $this->addFakerData($this->list_server);
     }


     public  function testAddItem(){
        $count_success = 0;
        $account_expansion = $this->getAccountExpansion();
        foreach($this->list_server as $server){
            $server_id =  $server['id'];
            $character_model =  $server['server_db_model'];
            $items_model =  $server['items_db_model'];
            $char = $this->getChar($character_model);
            $model = FunctionPayments::createOrders("444" , "paid" , $char->char_name , $account_expansion->id , now() , now() ,  $server_id  , "gawric_login");
           // dd($model);
            event(new L2AddItem($model));
           // dd($items_model::all());
            $count_success = $count_success + $items_model::all()->count();
         }
       
        // $expect = count($this->list_server);
       //  dd($expect);
         $this->assertCount($count_success , $this->list_server);
     }

     private function addFakerData($list_server){
        foreach($list_server as $server){
            $server_id =  $server['id'];
            $character_model =  $server['server_db_model'];
            $items_model =  $server['items_db_model'];

            $character_model::truncate();
            $items_model::truncate();

            $character_model::factory()->count(1)->create();
         }
     }

     private function addFakerAccountExpansion(){
        Schema::disableForeignKeyConstraints();
        Accounts_expansion::truncate();
        Accounts_expansion::factory()->count(1)->create();
        Schema::enableForeignKeyConstraints();
     }

     private function getChar($character_model){
        return $character_model::take(1)->first();
     }

     private function getAccountExpansion(){
        return Accounts_expansion::take(1)->first();
     }
     

   

}