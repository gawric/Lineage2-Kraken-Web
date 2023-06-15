<?php
  
namespace App\Http\Controllers\Lineage2\PersonalArea\Auth\Admin;

 use App\Http\Controllers\Controller;
 use App\Service\Utils\FunctionAuthUser;
 use Config;
 use Illuminate\Http\Request;
 use Response;
 use Lang;
 use App\Service\PersonalArea\AdminStatistics\IAdminStatistics;
 use App\Service\Utils\FunctionPaginate;


class AdminStatisticsController extends Controller
{

    private $admin_statistics;
    private $count;

    public function __construct(IAdminStatistics $admin_statistics)
    {
        $this->admin_statistics = $admin_statistics;
        $this->count = Config::get('lineage2.statistics.top_statistics');      
    }

    
    public function index()
    {
        $arrayDays = $this->admin_statistics->getArrayDays();
        $resultVisitMouth = $this->admin_statistics->getDataAllCountMounth();
        $resultUserMouth = $this->admin_statistics->getDataUserAllCountMounth();


        $resultArrayOnlyIp = $this->admin_statistics->getDataOnlyAllIp();

        $data_pages = FunctionPaginate::paginate($resultArrayOnlyIp , $this->count);
        $data_pages->withPath('/adminStatistics/visit_filter');
        $data_result = FunctionPaginate::unlockedData($data_pages);



        $resultUserArrayOnlyIp = $this->admin_statistics->getDataUserOnlyAllIp();

        $data_pages1 = FunctionPaginate::paginate($resultUserArrayOnlyIp , $this->count);
        $data_pages1->withPath('/adminStatistics/user_filter');
        $data_result_user = FunctionPaginate::unlockedData($data_pages1);

        $resultUserMouth  = $this->parceFormatChars(count($arrayDays) , $resultUserMouth);
        $resultVisitMouth  = $this->parceFormatChars(count($arrayDays) , $resultVisitMouth);
      

       return view('dashboardadminstatistics' , ['arrayDays' => $arrayDays , 'resultMouth' => $resultVisitMouth , 'resultUserMouth' => $resultUserMouth ,'data_result' => $data_result , 'data_result_user' => $data_result_user ]) ;
    }

    //использовалось для сортировки теперь это делает sql 
    //после теста лучше удалить если не понадобится
    private function mergeArrayDays($arrayDays , $resultMouth){
        $temp = [];
            foreach($arrayDays as $day){
               $result = $this->searchCollect($resultMouth, $day);
               $this->push($result , $temp);
            }
        return $temp;
    }

    private function searchCollect($collection , $search){
        return $collection->filter(function ( $item,  $key) use ($search) {
            return strcmp($item->day, $search) == 0;
        });
    }

    private function push($result ,  &$temp ){
        if($result->isNotEmpty()){
            array_push($temp , $result->first()->toArray());
       }
       else{
            array_push($temp , []);
       }
    }

    private function parceFormatChars($arrayDays , $injectDays){
        $temp = array_fill(0, $arrayDays ,  0);
        $index = 0;
        foreach($injectDays as $item){
          // dd($item);
            $day = $item->getDay();
            $index++;
            array_splice( $temp  , $day - 1, 0, $item->count ); 
        }
    //    dd($temp);
        return $temp;
    }

 



   
}