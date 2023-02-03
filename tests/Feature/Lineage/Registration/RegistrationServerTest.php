<?php

namespace Tests\Feature;

use App\Service\Status\StatusServer;
use App\Models\InfoServer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;
use Config;
use App\Service\Status\Support\SupportFuncStatus;
use App\Models\Accounts_expansion;
use App\Models\Server\ServerAccounts;

class RegistrationServerTest extends TestCase
{
     use RefreshDatabase;



     //создание тестовой модели
     public function setUp(): void
     {
         parent::setUp();
         ServerAccounts::query()->delete();
     }

 
  

     public function test_registration_pages()
     {
         $response = $this->get('/registration');
         $response->assertStatus(200);
     }

     public function test_new_user_valid_field_fail()
     {
         $response = $this->post('/adduser', [
             'login' => 'admin<script></script>',
             'password' => '123',
             'password_confirmed' => '123',
             'email' => 'error_data',
             'server_id' => 'error_data',
         ]);

         $this->assertCount(0, Accounts_expansion::all());
     }  

     public function test_new_user_registration(){
        $response = $this->post('/adduser', [
            'login' => 'admin99',
            'password' => '1234567',
            'password_confirmed' => '1234567',
            'email' => 'admin@mail.ru',
            'server_id' => '1',
        ]);

        $this->assertCount(1, Accounts_expansion::all());
     }

}