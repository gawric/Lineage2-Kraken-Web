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
use App\Models\Statistics\InfoVisitStatistics;
use App\Models\Statistics\InfoAllStatistics;
use App\Models\Statistics\User\Accounts_ExpansionStatistics;

class AdminStatisticsTest extends TestCase
{
     
       use RefreshDatabase;
       public $list_server;
       public $role_name_admin;
       public $role_name_user;
    

     public function setUp(): void
     {
         parent::setUp();
         $allStatistics = InfoAllStatistics::factory()->count(1)->create();
         $accountExpansionStatistics = Accounts_ExpansionStatistics::factory()->count(3)->create();
         $infoVisitStatistics = InfoVisitStatistics::factory()->count(3)->create();
         $this->role_name_admin = Config::get('lineage2.server.role_name_admin');

     }

     //Route::get('/adminStatistics', [AdminStatisticsController::class, 'index'])->name('adminStatistics');
     public function test_get_all_data_visit_user(){
        $accountExpansionStatistics = Accounts_ExpansionStatistics::factory()->count(3)->create();
        $admin_user = Utils::createAdmin($this->role_name_admin);
        $response = $this->actingAs($admin_user)->get('/adminStatistics');
       // dd($response['data_result']->data);
        if(count($response['data_result_user']->data) > 0){
            $this->assertTrue(true);
        }
        else{
            $this->assertTrue(false);
        }

     }

     public function test_get_all_data_visit_not_user(){
        $infoVisitStatistics = InfoVisitStatistics::factory()->count(3)->create();
        $admin_user = Utils::createAdmin($this->role_name_admin);
        $response = $this->actingAs($admin_user)->get('/adminStatistics');
       // dd($response);
        if(count($response['data_result']->data) > 0){
            $this->assertTrue(true);
        }
        else{
            $this->assertTrue(false);
        }
     }


     public function test_get_all_count_mounth(){
        $infoVisitStatistics = InfoVisitStatistics::factory()->count(3)->create();
        $admin_user = Utils::createAdmin($this->role_name_admin);
        $response = $this->actingAs($admin_user)->get('/adminStatistics');

        $this->assertTrue(!$this->isEmptyArray($response['resultMouth']));

     }

     public function test_get_all_count_user_mounth(){
        $infoVisitStatistics = InfoVisitStatistics::factory()->count(3)->create();
        $admin_user = Utils::createAdmin($this->role_name_admin);
        $response = $this->actingAs($admin_user)->get('/adminStatistics');
      //  dd($response);
        $this->assertTrue(!$this->isEmptyArray($response['resultUserMouth']));

     }

     private function isEmptyArray($array){
        foreach($array as $item){
            if($item > 0){
                return false;
            }
        }

        return true;
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
