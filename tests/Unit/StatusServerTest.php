<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Service\Status\StatusServer;


 //Модульный тест ServerStatus
class StatusServerTest extends TestCase
{
       public function test_get_status_server()
       {
            $responce = new StatusServer(15);
           // dd($responce->getOnline("127.0.0.1" , "2106" , "7777"));
            $this->assertEquals("offline", $responce->getOnline("127.0.0.1" , "2106" , "7777"));
       }

       
}
