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
use App\Models\Promo\PromoCodes;




class AdminPromoInfoTest extends TestCase
{
     
    use RefreshDatabase;
    public $list_server;
    public $role_name_admin;
    public $role_name_user;
    public $promoCodes;

     public function setUp(): void
     {
         parent::setUp();
         $this->list_server = Config::get('lineage2.server.list_server');
         $this->role_name_admin = Config::get('lineage2.server.role_name_admin');
         $this->role_name_user = Config::get('lineage2.server.role_name_user');
         $this->promoCodes = PromoCodes::factory()->count(3)->create();

     }

   //adminPromo/promo_info?code=XYZ-RELMPGUBIAPZXQK
    public function test_get_info_promo_code(){
        $this->createPromoUsedArray($this->promoCodes);
        $admin_user = Utils::createAdmin($this->role_name_admin);
        $response = $this->actingAs($admin_user)->get('/adminPromo/promo_info?code='.$this->promoCodes[0]->code);

        if(count($response['data_result']) > 0){
            $this->assertTrue(true);
        }
        else{
            $this->assertTrue(false);
        }
    }

    public function test_valid_info_promo_code(){
        $this->createPromoUsedArray($this->promoCodes);
        $admin_user = Utils::createAdmin($this->role_name_admin);
        $response = $this->actingAs($admin_user)->get('/adminPromo/promo_info?code=213qweqwe21123qweqew');
        $response->assertStatus(200);
    }

    public function test_valid2_info_promo_code(){
        $this->createPromoUsedArray($this->promoCodes);
        $admin_user = Utils::createAdmin($this->role_name_admin);
        $testint = (int)123123123123123;
        $response = $this->actingAs($admin_user)->get('/adminPromo/promo_info?code='.$testint);
        $response->assertStatus(200);
    }



    private function createPromoUsedArray($arrayPromoCodes){
        foreach($arrayPromoCodes as $promo_code){
            Utils::createPromoUsed($promo_code->id, "char_name_promo_tes");
        }
    }   
   

  

    
    

}
