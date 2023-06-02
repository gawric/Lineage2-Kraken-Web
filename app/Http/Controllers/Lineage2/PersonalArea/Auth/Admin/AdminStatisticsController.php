<?php
  
namespace App\Http\Controllers\Lineage2\PersonalArea\Auth\Admin;

 use App\Http\Controllers\Controller;
 use App\Service\Utils\FunctionAuthUser;
 use Config;
 use Illuminate\Http\Request;
 use Response;
 use Lang;
 use App\Service\PersonalArea\AdminStatistics\IAdminStatistics;



class AdminStatisticsController extends Controller
{

    private $admin_statistics;


    public function __construct(IAdminStatistics $admin_statistics)
    {
        $this->admin_statistics = $admin_statistics;
    }

    
    public function index()
    {
        $arrayDays = $this->admin_statistics->getArrayDays();
        $resultMouth = $this->admin_statistics->getDataAllCountMounth();
        $resultArrayOnlyIp = $this->admin_statistics->getDataOnlyAllIp();
       // $mergeMouthArray = $this->mergeArrayDays($arrayDays , $resultMouth);
        // info($resultArrayOnlyIp);
        //info($mergeMouthArray);
       return view('dashboardadminstatistics' , ['arrayDays' => $arrayDays , 'resultMouth' => $resultMouth , 'resultArrayOnlyIp' => $resultArrayOnlyIp]) ;
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



   
}