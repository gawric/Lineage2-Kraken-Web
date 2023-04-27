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

use App\Models\Accounts_expansion;
use Illuminate\Support\Facades\Schema;
use App\Models\Accounts_server_id;
use App\Service\ProxySqlL2Server\ProxySqlServer;

class PaymentsExistsAccountExpansionTest extends TestCase
{


 
     public function setUp(): void
     {
         parent::setUp();
         $this->list_server = Config::get('lineage2.server.list_server');
         $this->truncateAccountServerIds();
         $this->addFakerAccountExpansion();
         $this->addFakerData($this->list_server , $this->getAccountExpansion());
        
     }


     public function testExistAccountExpansionByCharName(){
         $count_success = 0;
         foreach($this->list_server as $server){
            $character_model =  $server['server_db_model'];
            $server_id =  $server['id'];
            $char_name = $this->getChar($character_model)->char_name;
            $account_expansion_model =  $this->getAccountsExpansionId($server_id , $this->list_server , $char_name);
            if(isset($account_expansion_model)){
               if(!is_array($account_expansion_model)){
                  $count_success = $count_success + 1;
               }
            }
         
         }

         $this->assertCount($count_success , $this->list_server);
     }

     public function testFailExistAccountExpansionByCharName(){
      $count_success = 0;
      foreach($this->list_server as $server){
         $character_model =  $server['server_db_model'];
         $server_id =  $server['id'];
         $char_name  = "char_name_test";
         $account_expansion_model =  $this->getAccountsExpansionId($server_id , $this->list_server , $char_name);
         if(isset($account_expansion_model)){
            if(!is_array($account_expansion_model)){
               $count_success = $count_success + 1;
            }
         }
      
      }
      $this->assertEquals($count_success , 0 );
  }







     private function getAccountsExpansionId($server_id , $list_servers , $char_name){
       $developer_id = FunctionSupport::getDeveloperId($server_id , $list_servers);
       if( $developer_id != -1){
           $this->proxy = new ProxySqlServer($developer_id);
           return $this->proxy->getAccountsExpansionByCharName(FunctionSupport::getModelAccountDb($server_id , $list_servers),  FunctionSupport::getModelCharactersDb($server_id , $list_servers), $char_name);
        }
     }


     private function addFakerData($list_server , $accouts_expansion_model){
         
        foreach($list_server as $server){
            $server_id =  $server['id'];
            $character_model =  $server['server_db_model'];
            $accounts_db_model =  $server['accounts_db_model'];

            $character_model::truncate();
            $accounts_db_model::truncate();

            $model_account = $accounts_db_model::factory()->count(1)->create();
            $model_character = $character_model::factory()->count(1)->create();
            //dd($model_account);
            $character_user = $this->getChar($character_model);
            $character_user->account_name =  $model_account->first()->login;
            $character_user->save();

            //dd($character_user);
            $model_server_ids = $this->createModelServerIds($server_id , $accouts_expansion_model->id , $model_account->first()->login);    
            $model_server_ids->save();               
         }
     }

     private function addFakerAccountExpansion(){
        Schema::disableForeignKeyConstraints();
        Accounts_expansion::truncate();
        Accounts_expansion::factory()->count(1)->create();
        Schema::enableForeignKeyConstraints();
     }

     //перед этим очищаем таблицу в конструкторе
     //берет первую запись из базы(мы добавляем только 1 поэтому она всегда нужная нам)
     private function getChar($character_model){
        return $character_model::take(1)->first();
     }

     //перед этим очищаем таблицу в конструкторе
      //берет первую запись из базы(мы добавляем только 1 поэтому она всегда нужная нам)
     private function getAccountExpansion(){
        return Accounts_expansion::take(1)->first();
     }

     public function truncateAccountServerIds(){
      Accounts_server_id::truncate();
     }
     public function createModelServerIds($server_id , $model_id , $default_account_name) : Accounts_server_id{
         $accounts_server_id = new Accounts_server_id();
         $accounts_server_id->server_id = $server_id;
         $accounts_server_id->accounts_expansion_id = $model_id;
         $accounts_server_id->account_name = $default_account_name;

         return $accounts_server_id;
   }

     

   

}