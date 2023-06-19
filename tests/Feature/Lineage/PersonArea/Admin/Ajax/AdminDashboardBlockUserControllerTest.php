<?php

namespace Tests\Feature\Lineage\PersonArea\Admin\Ajax;


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

// Route::get('/adminDashboard/block', [AdminDashboardBlockUserController::class, 'index']);

class AdminDashboardBlockUserControllerTest extends TestCase
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
    public function test_block_account_l2_account_expansion_byid(){
        $admin_user = Utils::createAdmin($this->role_name_admin);
        $user = Utils::createUser($this->role_name_user);
        $array_fake_data = $this->createFakeData($this->list_server , $user );
        $response = $this->actingAs($admin_user)->get('/adminDashboard/block?accountId='.$user->id);
        $array_finish = $this->CheckResult($this->list_server, $array_fake_data );
       // dd($array_finish);

        
        $array_finish->assertSee(-1);
    }



    private function CheckResult($list_server , $array_fake_data ){
        $array_result = [];
        foreach($list_server as $server){

            $server_id = $server['id'];
            $account_model_db = $server['accounts_db_model'];

            foreach($array_fake_data as $fakeData){
                $account_name = $fakeData['account_name'];
                $server_id_fake_data = $fakeData['server_id'];

                if($server_id == $server_id_fake_data){
                    $l2account = $account_model_db::where('login',  $account_name)->first();
                    array_push($array_result , $l2account);
                }
            }
        }

        return $array_result;
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

            array_push($array_fake_data , ['account_name'=>$test_account_name_server , 'server_id'=>$server_id ]);
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
       // dd($response);
        $response->assertStatus(200);
     }

    
    

}
