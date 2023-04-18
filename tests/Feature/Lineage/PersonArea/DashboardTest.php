<?php

namespace Tests\Feature;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;
use Config;
use App\Models\Accounts_expansion;
use App\Models\Accounts_server_id;
use App\Service\Utils\FunctionSupport;

class DashboardTest extends TestCase
{
     //Чистит только подк. ларавел
     use RefreshDatabase;
     public $list_server;
     public $role_name_user;
 
     public function setUp(): void
     {
         parent::setUp();
         $this->list_server = Config::get('lineage2.server.list_server');
         $this->role_name_user = Config::get('lineage2.server.role_name_user');
     }

     public function test_tables_all_accounts_user(){
        $user = Accounts_expansion::factory()->create();
        $this->setRoleUser($this->role_name_user, $user->id , "Test role" ,now());
        $response = $this->actingAs($user)->get('/dashboard');
        $response->assertStatus(200);
     }

     public function test_create_l2user_to_dashboard()
     {
        $user = Accounts_expansion::factory()->create();
        $this->setRoleUser($this->role_name_user, $user->id , "Test role" ,now());
        $array_response = [];
        foreach($this->list_server as $server){

            $server_id = $server['id'];
            $account_model_db = $server['accounts_db_model'];
            $account_model_db::query()->delete();
  
            $response = $this->actingAs($user)->post('/addL2User', [
                'login' => 'gawric_account_server22'.$server_id ,
                'server_id' => $server_id ,
                'password' => '12345678',
                'password_confirmed' => '12345678',
            ]);
            $response->assertStatus(200);
        }
      
       // dd($array); 
     }  


     public function test_valid_create_l2user_to_dashboard()
     {
        $user = Accounts_expansion::factory()->create();
        $this->setRoleUser($this->role_name_user, $user->id , "Test role" ,now());
        foreach($this->list_server as $server){
            $response = $this->actingAs($user)->post('/addL2User', [
                'login' => 'sadqqeweqwe',
                'server_id' => 9999 ,
                'password' => 'asdasdqe123123.\5%342',
                'password_confirmed' => 'adasdqweqwe$566546',
            ]);
            $response->assertStatus(302);
        }
    
     }


     
     public function test_change_password_users_to_dashboard()
     {
        $user = Accounts_expansion::factory()->create();
        $this->setRoleUser($this->role_name_user, $user->id , "Test role" ,now());
        $array_fake_data = $this->createFakeData($this->list_server , $user );


        foreach($this->list_server as $server){

            $server_id = $server['id'];
            $user_arr = $this->getData($server_id , $array_fake_data);
          //  dd($user_arr);
            $response = $this->actingAs($user)->post('/changePassL2User', [
                'login' => $user_arr['username'],
                'server_id' => $server_id,
                'old_password' => '12345678',
                'password' => '123456789',
                'password_confirmed' => '123456789',
            ]);
           
            $response->assertStatus(200);
        }
     } 
     
     
     public function test_faild_valid_change_password_to_dashboard()
     {
        $user = Accounts_expansion::factory()->create();
        $this->setRoleUser($this->role_name_user, $user->id , "Test role" ,now());
        $array_fake_data = $this->createFakeData($this->list_server , $user );


        foreach($this->list_server as $server){

            $server_id = $server['id'];
            $user_arr = $this->getData($server_id , $array_fake_data);
          //  dd($user_arr);
            $response = $this->actingAs($user)->post('/changePassL2User', [
                'login' => 'фывфывф',
                'server_id' => 99,
                'old_password' => 'фывыфвфыв',
                'password' => 'фывфывфыв',
                'password_confirmed' => '<scripts>Hello World</scripts>',
            ]);
          // dd($response);
            $response->assertStatus(302);
        }
     } 

     private function createFakeData($list_server , $user ){
        
        $array_fake_data = [];
        foreach($list_server as $server){

            $server_id = $server['id'];
            $account_model_db = $server['accounts_db_model'];
            $account_model_db::query()->delete();
            $username = 'gawric_account_server'.$server_id;

            $response = $this->actingAs($user)->post('/addL2User', [
                'login' => 'gawric_account_server'.$server_id ,
                'server_id' => $server_id ,
                'password' => '12345678',
                'password_confirmed' => '12345678',
            ]);
            $response->assertStatus(200);
            array_push($array_fake_data , ['username'=>$username , 'server_id'=>$server_id ]);
        }

        return $array_fake_data;
     }



     private function getData($server_id , $array_fake_data){
        foreach($array_fake_data as $user){
            if($user['server_id'] == $server_id){
                return $user;
            }
        }
     }

     private function setRoleUser($role_name , $accounts_expansion_id , $description , $date_auth){
        $model_role = FunctionSupport::createModelAccounts_role($role_name , $accounts_expansion_id , $description , $date_auth);
        $model_role->save();
    }
     

   

}