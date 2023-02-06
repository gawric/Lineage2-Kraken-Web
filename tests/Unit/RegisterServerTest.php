<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Service\Registration\Support\SupportFuncReg;
use Config;

class RegisterServerTest extends TestCase
{
      public $list_server;
      //создание тестовой модели
      public function setUp(): void
      {
          parent::setUp();
          $this->list_server = [
            'server1' => [
                    'id'=>'1',
                    'name'=>'X50 Nightmare',
                    'ip'=>'127.0.0.1',
                    'login_port'=>'2106',
                    'game_port' =>'7777',
                    'status' => 'offline',
                    'count_online' => 0,
                    'server_db_model' => "App\Models\Server\ServerCharacters",
                    'accounts_db_model' => "App\Models\Server\ServerAccounts",
                ]
            
          ];
          
      }


       public function test_get_check_empty_db_model()
       {
            $sfr = new SupportFuncReg();
            //$check = $sfr->checkModelAccountDb("");
            $this->assertEquals(false, $sfr->checkModelAccountDb(""));

       }


       public function test_get_by_id_to_list_server(){
            $sfr = new SupportFuncReg();

            $arr = $sfr->getServerItemById($this->list_server, 1);
            $this->assertEquals(1, count($arr));
       }
       
}




