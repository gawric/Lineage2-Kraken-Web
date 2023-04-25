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
use App\Service\Utils\FunctionSupport;
use App\Providers\Events\L2AddItem;
use App\Service\Utils\FunctionPayments;

class StatisticServerController extends Controller
{

    private $list_server;
    private $top_count;
    //Здесь  App\Service\Info\ServerStats получаем результаты из промежуточной таблицы  
    //Там все запросы и сортировки для вывода Blade template
    private $stat;
    private $arrayNameServer;
    private $arrayStaticsId;

    public function __construct()
    {
        $this->list_server = Config::get('lineage2.server.list_server');
        $this->top_count = Config::get('lineage2.server.top_count');
        $this->stat  = new ServerStats();
        $this->arrayStaticsId = [['id'=>'1', 'name'=>'Топ Пк'],['id'=>'2', 'name'=>'Топ Пвп'],['id'=>'3', 'name'=>'Топ Клан']];
    }

    public function index()
    {   
        //только для теста
        //info("Статистика тест");
       // event(new L2AddItem($this->createTestOrder()));

        return view('l2page_statistic', ['arrayNameServers' => FunctionSupport::getServerOnlyNameAndId($this->list_server) , 'arrayNameStatistic' => [$this->arrayStaticsId]]);
    }

    //private function createTestOrder(){
       // $test =  FunctionPayments::createOrders("444" , "paid" , "test_user_1_lucera" , "3" , now() , now() , 3 , "gawric" );
       // info("createTestOrder  " . $test);
       // return $test;
   // }

    public function dataStat(Request $request , $sever_id , $stat_id)
    {
        $validator =  $this->valid($sever_id , $stat_id);

        if ($validator->fails()) {
            return $this->getErrorJson();
        }
       
        $result = $this->getData($sever_id , $stat_id);

        return Response::json(['success'=>Lang::get('messages.success') , 'result'=>$result]);
    }

    private function getData($sever_id , $stat_id){
        switch ($stat_id) {
            case 1:
                return $this->stat->getDataPk($sever_id);
                break;
            case 2:
                return $this->stat->getDataPvp($sever_id);
                break;
            case 3:
                return $this->stat->getDataClan($sever_id);
                break;
            default:
                return [];
                break;
        }
    }

    
    private function getServerNameOnly($list_servers){
        $temp = [];
        if (isset($list_servers)) {
            foreach($list_servers as $value){
                $this->addArray($temp , $value);
            }
        }
        return $temp;
    }

 


    private function getErrorJson(){
        return response()->json([
            'errors' => Lang::get('validation.enter_server_db'),
            'message'=> Lang::get('validation.enter_server_db'),
        ], 422);
    }


    private function valid($server_id , $stat_id){
        $validator = Validator::make(
            ['server_id' => $server_id,
             'stat_id' => $stat_id], 
            ['server_id' => 'integer|max:5',
             'stat_id' => 'integer|max:5']);
          return $validator;
    }

}