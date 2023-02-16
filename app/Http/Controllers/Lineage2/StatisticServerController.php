<?php
  
namespace App\Http\Controllers\Lineage2;
use App\Http\Controllers\Controller;
use Response;
  
use Illuminate\Http\Request;
use App;
use Config;
use Validator;
use Lang;
use App\Service\Status\StatusServer;
use App\Service\Info\ServerStats;


class StatisticServerController extends Controller
{

    private $list_server;
    private $top_count;
    
    public function __construct()
    {
        $this->list_server = Config::get('lineage2.server.list_server');
        $this->top_count = Config::get('lineage2.server.top_count');
    }

    public function index()
    {
        return view('l2page_statistic');
    }

    public function data(Request $request , $id)
    {
        $validator =  $this->valid($id);

        if ($validator->fails()) {
            return $this->getErrorJson();
        }
      
        $test = new ServerStats();
        $test->getAllData($id , $this->top_count);
      //  dd($id);
        return Response::json('{"name":"John", "age":30, "car":null}');
    }

    private function getErrorJson(){
        return response()->json([
            'errors' => Lang::get('validation.enter_server_db'),
            'message'=> Lang::get('validation.enter_server_db'),
        ], 422);
    }
    private function valid($id){
        $validator = Validator::make(['id' => $id], [
            'id' => 'integer|max:5'
          ]);
      
          return $validator;
    }

}