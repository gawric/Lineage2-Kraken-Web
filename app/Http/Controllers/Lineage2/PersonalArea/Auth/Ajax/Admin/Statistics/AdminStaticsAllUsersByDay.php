<?php
  
namespace App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax\Admin\Statistics;

 use App\Http\Controllers\Controller;

 use Config;
 use Illuminate\Http\Request;
 use Response;
 use Lang;
 use App\Service\Utils\FunctionSupport;
 use App\Service\PersonalArea\AdminStatistics\IAdminStatistics;

class AdminStaticsAllUsersByDay extends Controller
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
            'accountsExpansion' => 'integer'
        ]);

        $ip_address = FunctionSupport::getDataVariable("ip_address" , $validated);
        $day = FunctionSupport::getDataVariable("day" , $validated);
        $accounts_expansion_id = FunctionSupport::getDataVariable("accountsExpansion" , $validated);

        try 
        {

            $collection = $this->admin_statistics->getDataUserByIpAndDate($ip_address , $day , $accounts_expansion_id);
        
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