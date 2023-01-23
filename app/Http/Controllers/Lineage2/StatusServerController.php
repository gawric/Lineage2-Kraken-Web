<?php
  
namespace App\Http\Controllers\Lineage2;
use App\Http\Controllers\Controller;
use Response;
  
use Illuminate\Http\Request;
use App;
use Config;
use App\Service\Status\StatusServer;

//Статус сервера из списка в конфиге
class StatusServerController extends Controller
{
    protected StatusServer $ss;

                //'id'=>'1',
               // 'name'=>'X50 Nightmare',
                //'ip'=>'127.0.0.1',
                ///'login_port'=>'2106',
               // 'game_port' =>'7777',
               // 'status' => 'offline',
               // 'count_online' => 0
    public function __construct()
    {
       $timeout = Config::get('lineage2.server.timeout_socket');
       $this->ss = new StatusServer($timeout);    
    }

    public function data(Request $request)
    {
        
        $list_server = Config::get('lineage2.server.list_server');
        $complete_server = $this->getStatusServersFunct($list_server);
        return Response::json($complete_server);
    }

    function getStatus(&$item, $key)
    {
            $ip = $item["ip"];
            $login_port = $item["login_port"];
            $game_port = $item["game_port"];
            $data = $this->getData($ip , $login_port , $game_port);
            $item["status"] = $data;
    }
    function getStatusServersFunct($list_server){
        array_walk($list_server, "self::getStatus");
        return $list_server;
    }

    function getData($ip , $login_port , $game_port){
        return $this->ss->getOnline($ip , $login_port , $game_port);
    }
}