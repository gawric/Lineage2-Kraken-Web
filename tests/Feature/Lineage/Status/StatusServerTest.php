<?php

namespace Tests\Feature;

use App\Service\Status\StatusServer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class StatusServerTest extends TestCase
{
     use RefreshDatabase;
     
    //App\Models\Server\ServerCharacters - таблица Characters из базы rusacis
    public function test_get_count_server()
    {
         $responce = new StatusServer(15);
         //dd($responce->getCountUsers('App\Models\Server\ServerCharacters'));
         $this->assertEquals(0, $responce->getCountUsers('App\Models\Server\ServerCharacters'));
    }

    public function test_get_status_server()
    {
         $responce = new StatusServer(15);
        // dd($responce->getOnline("127.0.0.1" , "2106" , "7777"));
         $this->assertEquals("offline", $responce->getOnline("127.0.0.1" , "2106" , "7777"));
    }

    public function test_a_basic_request()
    {
          $response = $this->get('/status/server');
          dd(response);
    }
}
