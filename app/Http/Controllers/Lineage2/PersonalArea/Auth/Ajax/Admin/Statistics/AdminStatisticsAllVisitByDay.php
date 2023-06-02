<?php
  
namespace App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax\Admin\Statistics;

 use App\Http\Controllers\Controller;

 use Config;
 use Illuminate\Http\Request;
 use Response;
 use Lang;
 use App\Service\Utils\FunctionSupport;
 use App\Service\PersonalArea\AdminStatistics\IAdminStatistics;

class AdminStatisticsAllVisitByDay extends Controller
{
  
    private $admin_statistics;


    public function __construct(IAdminStatistics $admin_statistics)
    {
        $this->admin_statistics = $admin_statistics;
    }


    public function index(request $request)
    {

        $validated = $request->validate([
            'ip_address' => 'required|ip',
            'day' => 'date',
        ]);

        $ip_address = FunctionSupport::getDataVariable("ip_address" , $validated);
        $day = FunctionSupport::getDataVariable("day" , $validated);
        try 
        {

            $collection = $this->admin_statistics->getDataVisitByIpAndDate($ip_address , $day);
          
            if(isset($collection) and $collection->isNotEmpty()){
              
                return Response::json(['success'=>Lang::get('messages.lk_admin_panel_windows_success') , 'result'=>$collection->toArray()]); 
            }

            return Response::json(['success'=>Lang::get('messages.lk_admin_panel_windows_success') , 'result'=>[]]); 

        }
         catch (ModelNotFoundException $exception) {
            return Response::json(['error'=>$exception->getMessage() , 'result'=>[]]);
        }
    }


    
   
}