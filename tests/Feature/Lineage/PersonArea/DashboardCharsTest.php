<?php

namespace Tests\Feature\Lineage\PersonArea;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;
use Config;
use App\Models\Accounts_expansion;
use App\Models\Accounts_server_id;
use App\Service\Utils\FunctionSupport;
use Tests\Feature\Lineage\PersonArea\Support\Utils;

class DashboardCharsTest extends TestCase
{
     
       use RefreshDatabase;
       public $list_server;
       public $role_name_user;


     public function setUp(): void
     {
         parent::setUp();
         $this->list_server = Config::get('lineage2.server.list_server');
         $this->role_name_user = Config::get('lineage2.server.role_name_user');
     }

     public function test_dashboardchars(){
        $user = Accounts_expansion::factory()->create();
        Utils::setRoleUser($this->role_name_user, $user->id , "Test role" ,now());

        $array_fake_data = $this->createFakeData($this->list_server , $user );
        $response = $this->actingAs($user)->get('/dashboardchars');
        //присутствует заданный кусок в ответе приме: account_name_test_acis
        $response->assertSee($array_fake_data[0]['username']);

     }

     public function test_empty_dashboardchars(){
        $user = Accounts_expansion::factory()->create();
        Utils::setRoleUser($this->role_name_user, $user->id , "Test role" ,now());

        $response = $this->actingAs($user)->get('/dashboardchars');
        $response->assertStatus(200);
     }

     public function test_fail_access_dashboardchars(){
        $response = $this->get('/dashboardchars');
        $response->assertStatus(302);
     }


     private function createFakeData($list_server , $user ){
        
        $array_fake_data = [];
        foreach($list_server as $server){

            $server_id = $server['id'];
            $account_model_db = $server['accounts_db_model'];
            $characters_model_db = $server['server_db_model'];
            $test_account_name_server = $server['test_account_name'];
            
            Utils::clearTable($account_model_db);
            Utils::clearTable($characters_model_db);
            
            $this->createAccountsData( $test_account_name_server , $user , $server_id);
            Utils::setCharsData($characters_model_db);

            array_push($array_fake_data , ['username'=>$test_account_name_server , 'server_id'=>$server_id ]);
        }

        return $array_fake_data;
     }

     private function createAccountsData($login , $user , $server_id){
        $response = $this->actingAs($user)->post('/addL2User', [
            'login' => $login ,
            'server_id' => $server_id ,
            'password' => '12345678',
            'password_confirmed' => '12345678',
        ]);
        $response->assertStatus(200);
     }




     

    

}
