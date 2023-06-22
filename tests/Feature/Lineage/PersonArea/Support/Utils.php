<?php

namespace Tests\Feature\Lineage\PersonArea\Support;

use Auth;
use App\Models\Accounts_expansion;
use App\Service\ProxySqlL2Server\Support\ProxyFilters\GeneralFilters;
use App\Models\Accounts_server_id;
use App\Service\Utils\FunctionOtherUser;
use App\Service\Utils\FunctionSupport;
use App\Models\Promo\PromoUsed;

 class Utils
 { 
    public function setUp(): void
    {
        $this->markTestSkipped('must be revisited.');
    }

    public static function setCharsData($characters_model_db){
        $characters_model_db::factory()->count(3)->create();
    }



   // 'obj_id' => fake()->unique()->numberBetween(0,3999),
    //'account_name' => fake()->randomElement(['account_name_test_acis']),
    //'char_name' => fake()->unique()->randomElement(['test_user_1_acis' , 'test_user_2_acis' , 'test_user_3_acis' , 'test_user_4_acis']),
    //'pvpkills' => fake()->randomElement([0 , 20]),
    //'pkkills' =>  fake()->randomElement([0 , 30]),
    //'classid' =>  fake()->randomElement([11, 99, 16 , 15]), 
    //'level' =>  fake()->randomElement([11, 99, 16 , 15]), 
    //'onlinetime' =>  fake()->randomElement([11, 99, 16 , 15]), 
    //'online' =>  fake()->randomElement([0,1]), 
    //clan_id - генерируем в таблиц ServerClanData
    //'clanid' => fake()->randomElement([1, 2, 3]), 
    public static function setCharsDataManual($characters_model_db , $obj_id , $account_name ,  $char_name , $pvpkills , $pkkills , $classid, $onlinetime , $online){
        $model = new $characters_model_db();

        $model->account_name = $account_name;
        $model->char_name = $char_name;
        $model->pvpkills = $pvpkills;
        $model->pkkills = $pkkills;
        $model->classid =  $classid;
        $model->onlinetime = $onlinetime;
        $model->online = $online;
        return $model;
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

     //'id' => fake()->randomElement([1]),
     //'login' => fake()->randomElement(['gawrictest']),
     //'email' => fake()->randomElement(['gawric@mail.ru']),
     //'password' =>  fake()->randomElement([bcrypt('12345678')]),
     //'email_verified_at' => now(),
     public static function createAdmin($role_name_admin){
        $admin = self::createAccountExpasion();
        $admin->save();
        self::setRoleUser($role_name_admin, $admin->id , "Comment test role admin" ,now());
        self::setIpAddressUser("127.0.0.1", $admin->id , now());

        return $admin;
     }

     public static function createPromoUsed($promo_codes_id , $char_name){
        $promo_used = self::createPromoUsedModel($promo_codes_id , $char_name);
        $promo_used->save();

        return  $promo_used;
     }

     private static function createAccountExpasion(){
        $model = new Accounts_expansion();
        $model->id = 12;
        $model->login = "gawricadmin";
        $model->email = "admin@mail.ru";
        $model->password = bcrypt('12345678');
        $model->email_verified_at = now();

        return $model;
     }


     public static function createUser($role_name_user){
        $user = Accounts_expansion::factory()->create();
        self::setRoleUser($role_name_user, $user->id , "Comment test role user" ,now());
        self::setIpAddressUser("127.0.0.1", $user->id , now());

        return $user;
     }

            //$table->id();
            //$table->string('char_name');
            //$table->unsignedBigInteger('accounts_server_id');
            //$table->unsignedBigInteger('accounts_expansion_id');
            //$table->unsignedBigInteger('promo_codes_id');
            //$table->foreign('promo_codes_id')
            //->references('id')->on('promo')
            //->onDelete('cascade');
            //$table->timestamp('created_at');
            //$table->timestamp('updated_at');
     public static function createPromoUsedModel($promo_codes_id , $char_name){
        $model = new PromoUsed();
        $model->char_name = $char_name;
        $model->promo_codes_id = $promo_codes_id;
        $model->created_at = now();
        $model->accounts_server_id = 0;
        $model->accounts_expansion_id = 12;

        return $model;
     }

  


 }
?>