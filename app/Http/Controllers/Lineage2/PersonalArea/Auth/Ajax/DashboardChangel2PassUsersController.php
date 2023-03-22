<?php
  
namespace App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax;

 use App\Http\Controllers\Controller;
 use App\Service\Utils\FunctionSupport;
 use Config;
 use Illuminate\Http\Request;
 use Response;
 use Lang;
 use App\Http\Requests\Auth\DashboardChangel2PassUsersStoreRequest;
 

class DashboardChangel2PassUsersController extends Controller
{
   
    private $list_server;

    public function __construct()
    {
        $this->list_server = Config::get('lineage2.server.list_server');
    }


    public function changeAjaxPassL2User(DashboardChangel2PassUsersStoreRequest $request)
    {
        info("test endpount changePassL2User");
        $validated = $request->validated();
        info($validated);
        //info(json_decode($request->json()->all()));
        return Response::json(['success'=>Lang::get('messages.success') , 'result'=>'']);
    }


   
   
}