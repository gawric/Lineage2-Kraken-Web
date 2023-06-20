<?php

namespace Tests\Feature\Lineage\PersonArea\Admin\Ajax;

use App\Service\Utils\FunctionOtherUser;
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

// Route::get('/adminDashboard/allchars', [AdminDashboardAllCharsByIdUserController::class, 'index']);

class AdminDashboardAllCharsByIdUserControllerTest extends TestCase
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



  

  //adminDashboard/allchars?accountExpansionId=2 как пример
  //Accounts_expansionFactory idUser = 1
    public function test_get_admin_all_charsbyid(){
        $admin_user = Utils::createAdmin($this->role_name_admin);
        $user = Utils::createUser($this->role_name_user);
        $array_fake_data = $this->createFakeData($this->list_server , $user );
        $response = $this->actingAs($admin_user)->get('/adminDashboard/allchars?accountExpansionId='.$user->id);

        $response->assertSee($array_fake_data[0]['username']);
    }

  public function test_get_empty_all_charsbyid(){
    $admin_user = Utils::createAdmin($this->role_name_admin);
    $response = $this->actingAs($admin_user)->get('/adminDashboard/allchars?accountExpansionId=99');
    $response->assertStatus(404);
  }

   public function test_get_fail_valid_chars_usersbyid(){
    $admin_user = Utils::createAdmin($this->role_name_admin);
    $response = $this->actingAs($admin_user)->get('/adminDashboard/allchars?accountExpansionId=rerewrfdsdf');
    //dd($response);
    $response->assertStatus(302);
  }



    private function createFakeData($list_server , $user){
        
        $array_fake_data = [];
        $index = 9999;
        foreach($list_server as $server){

            $server_id = $server['id'];
            $account_model_db = $server['accounts_db_model'];
            $characters_model_db = $server['server_db_model'];
            $test_account_name_server = $server['test_account_name'];
            
            Utils::clearTable($account_model_db);
            Utils::clearTable($characters_model_db);
            
            $this->createAccountsData( $test_account_name_server , $user , $server_id);

            $model = Utils::setCharsDataManual($characters_model_db , $index++, $test_account_name_server ,  $test_account_name_server, 1 , 1 , 16, 99999 , 0);
            $model->save();
       
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
