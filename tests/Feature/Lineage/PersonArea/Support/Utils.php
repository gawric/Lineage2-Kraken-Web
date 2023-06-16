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

    public static function setIpAddressUser($ip_address, $accounts_expansion_id , $date_auth){
        $model_role = FunctionSupport::createModelAccounts_ip($ip_address , $accounts_expansion_id , $date_auth);
        $model_role->save();
    }

    public static function getData($server_id , $array_fake_data){
        foreach($array_fake_data as $user){
            if($user['server_id'] == $server_id){
                return $user;
            }
        }
     }

     public static function createAdmin($role_name_admin){
        $admin = Accounts_expansion::factory()->create();
        self::setRoleUser($role_name_admin, $admin->id , "Comment test role admin" ,now());
        self::setIpAddressUser("127.0.0.1", $admin->id , now());

        return $admin;
     }

     public static function createUser($role_name_user){
        $user = Accounts_expansion::factory()->create();
        self::setRoleUser($role_name_user, $user->id , "Comment test role user" ,now());
        self::setIpAddressUser("127.0.0.1", $user->id , now());

        return $user;
     }

  


 }
?>