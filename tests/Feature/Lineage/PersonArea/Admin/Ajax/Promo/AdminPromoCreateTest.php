<?php

namespace Tests\Feature\Lineage\PersonArea\Admin\Ajax\Promo;


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


class AdminPromoCreateTest extends TestCase
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

     }

    // post /adminPromo/create
    // 'itemsnumber' => 'required|integer|max:1000',
    // 'itemspromonumber' => 'required|integer|max:1000',
    // 'selectitem' => 'required|integer',
    public function test_create_admin_promo(){
        $admin_user = Utils::createAdmin($this->role_name_admin);
        $response = $this->createAccountsData($admin_user , 5 , 5 , 4037);

        if(count($response['data_result']['data']) > 0){
            $this->assertTrue(true);
        }
        else{
            $this->assertTrue(false);
        }
    }

     // post /adminPromo/create
    // 'itemsnumber' => 'required|integer|max:1000',
    // 'itemspromonumber' => 'required|integer|max:1000',
    // 'selectitem' => 'required|integer',
    public function test_create_admin__fail_valid(){
        $admin_user = Utils::createAdmin($this->role_name_admin);
        $response = $this->createAccountsData($admin_user , "eqweqweqwe" , "asdasdasd" , "dsfwerwer");
      //  dd($response);
        $response->assertStatus(302);
    }



    public function test_create_admin__fail_valid_number_0(){
        $admin_user = Utils::createAdmin($this->role_name_admin);
        $response = $this->createAccountsData($admin_user , 0, 0 , 0);
        $response->assertStatus(200);
    }



    public function test_create_admin__fail_valid_string_empty(){
        $admin_user = Utils::createAdmin($this->role_name_admin);
        $response = $this->createAccountsData($admin_user , "", "" , "");
        $response->assertStatus(302);
    }



    private function createAccountsData($admin_user , $itemsnumber , $itemspromonumber , $selectitem){
        return $this->actingAs($admin_user)->post('/adminPromo/create', [
            'itemsnumber' => $itemsnumber ,
            'itemspromonumber' => $itemspromonumber ,
            'selectitem' =>  $selectitem,
        ]);
       
     }

  

    
    

}
