<?php

namespace Tests\Feature\Lineage\PersonArea\Support;

use Auth;
use App\Models\Accounts_expansion;
use App\Service\ProxySqlL2Server\Support\ProxyFilters\GeneralFilters;
use App\Models\Accounts_server_id;
use App\Service\Utils\FunctionSupport;


 class Utils
 { 
    public function setUp(): void
    {
        $this->markTestSkipped('must be revisited.');
    }

    public static function setCharsData($characters_model_db){
        $characters_model_db::factory()->count(3)->create();
    }

    public static function clearTable($model_table){
        $model_table::query()->delete();
    }
    public static function setRoleUser($role_name , $accounts_expansion_id , $description , $date_auth){
        $model_role = FunctionSupport::createModelAccounts_role($role_name , $accounts_expansion_id , $description , $date_auth);
        $model_role->save();
    }

    public static function getData($server_id , $array_fake_data){
        foreach($array_fake_data as $user){
            if($user['server_id'] == $server_id){
                return $user;
            }
        }
     }

  


 }
?>