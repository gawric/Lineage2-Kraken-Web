<?php

namespace Tests\Feature\Lineage\PersonArea\Promo;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;
use Config;
use App\Models\Accounts_expansion;
use App\Models\Accounts_server_id;
use App\Service\Utils\FunctionSupport;
use Tests\Feature\Lineage\PersonArea\Support\Utils;
use Illuminate\Support\Facades\Schema;
use App\Models\Promo\PromoCodes;

//Route::get('/adminPromo', [AdminPromoController::class, 'index'])->name('promo');
class AdminPromoTest extends TestCase
{
     
       use RefreshDatabase;
       public $list_server;
       public $role_name_admin;
       public $role_name_user;


     public function setUp(): void
     {
         parent::setUp();
         $this->list_server = Config::get('lineage2.server.list_server');
         $this->role_name_admin = Config::get('lineage2.server.role_name_admin');
         $this->role_name_user = Config::get('lineage2.server.role_name_user');
         $promoCodes = PromoCodes::factory()->count(3)->create();

     }


     public function test_data_dashboard_admin(){
      $admin_user = Utils::createAdmin($this->role_name_admin);
      $response = $this->actingAs($admin_user)->get('/adminPromo');  

      if(count($response['data_result']->data) > 0){
        $this->assertTrue(true);
      }
      else{
        $this->assertTrue(false);
      }
    }


  

    
    

}
