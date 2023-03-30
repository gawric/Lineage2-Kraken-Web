<?php

namespace Tests\Feature;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;
use Config;
use App\Models\Accounts_expansion;
use App\Models\Accounts_server_id;


class DashboardTest extends TestCase
{
     //Чистит только подк. ларавел
     use RefreshDatabase;
     public $list_server;

 
     public function setUp(): void
     {
         parent::setUp();
         $this->list_server = Config::get('lineage2.server.list_server');
       //  Accounts_expansion::query()->delete();
         Accounts_server_id::query()->delete();
        
        // Accounts_expansion::factory()->count(1)->create();
 
     }



     public function test_create_l2user_to_dashboard()
     {
        $user = Accounts_expansion::factory()->create();
   
        foreach($this->list_server as $server){

            $server_id = $server['id'];
            $account_model_db = $server['accounts_db_model'];
            $account_model_db::query()->delete();
            $response = $this->actingAs($user)->post('/addL2User', [
                'login' => 'gawric_account_server'.$server_id ,
                'server_id' => $server_id ,
                'password' => '12345678',
                'password_confirmed' => '12345678',
            ]);
           // dd($response);
        }
         
     }  
     

   

}