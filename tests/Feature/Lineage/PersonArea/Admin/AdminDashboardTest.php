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
use Illuminate\Support\Facades\Schema;


class AdminDashboardTest extends TestCase
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

    public function test_no_access_user_dashboard_admin(){

        $user = Utils::createUser($this->role_name_user);

        $response = $this->actingAs($user)->get('/adminDashboard');

    
        $response->assertStatus(401);
    }

    public function test_access_admin_dashboard_admin(){

        $admin_user = Utils::createAdmin($this->role_name_admin);

        $response = $this->actingAs($admin_user)->get('/adminDashboard');
 
        $response->assertStatus(200);
    }


    public function test_data_dashboard_admin(){
        $admin_user = Utils::createAdmin($this->role_name_admin);
        $user = Utils::createUser($this->role_name_user);
        $array_fake_data = $this->createFakeData($this->list_server , $user );
        //$admin_user = Utils::createAdmin($this->role_name_admin);
        //$response = $this->actingAs($user)->get('/adminDashboard');
        //dd($response);
        //$response->assertStatus(200);
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
