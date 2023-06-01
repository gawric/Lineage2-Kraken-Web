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
        $mergeMouthArray = $this->mergeArrayDays($arrayDays , $resultMouth);
        info($mergeMouthArray);
        info($arrayDays);
       return view('dashboardadminstatistics' , ['arrayDays' => $arrayDays , 'resultMouth' => $resultMouth]) ;
    }

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