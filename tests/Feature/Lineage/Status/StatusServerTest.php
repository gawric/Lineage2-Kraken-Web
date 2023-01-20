<?php

namespace Tests\Feature;
use App\Service\Status\StatusServer;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StatusServerTest extends TestCase
{
    
    public function test_get_count_server()
    {
         $responce = new StatusServer(15);
        // dd($responce->getCountUsers());
         $this->assertEquals(10, $responce->getCountUsers());
    }

    public function test_get_status_server()
    {
         $responce = new StatusServer(15);
         dd($responce->getOnline("127.0.0.1" , "2106" , "7777"));
         $this->assertEquals("offline", $responce->getOnline("127.0.0.1" , "2106" , "7777"));
    }
}
