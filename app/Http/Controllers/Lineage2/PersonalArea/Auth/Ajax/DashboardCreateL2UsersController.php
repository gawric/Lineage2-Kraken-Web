<?php
  
namespace App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax;

 use App\Http\Controllers\Controller;
 use App\Service\Utils\FunctionSupport;
 use Config;
 use Illuminate\Http\Request;
 use Response;
 use Lang;
 use App\Http\Requests\Auth\DashboardCreateL2UsersStoreRequest;
 

class DashboardCreateL2UsersController extends Controller
{
   
    private $list_server;
    private Dashboard $serviceDashboard;

    public function __construct()
    {
        $this->serviceDashboard = new Dashboard();
        $this->list_server = Config::get('lineage2.server.list_server');
    }


    public function addAjaxL2User(DashboardCreateL2UsersStoreRequest $request)
    {
        info("test endpount adduser");
        $validated = $request->validated();
        info($validated);
        //info(json_decode($request->json()->all()));
        return Response::json(['success'=>Lang::get('messages.success') , 'result'=>'']);
    }


   
   
}