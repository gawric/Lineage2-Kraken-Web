<?php
  
namespace App\Http\Controllers\Lineage2\PersonalArea\Auth;

 use App\Http\Controllers\Controller;
 use App\Service\Utils\FunctionSupport;
 use Config;
 use Illuminate\Http\Request;
 use Response;
 use Lang;
 use App\Http\Requests\Auth\DashboardAjaxStoreRequest;
 

class DashboardAjaxController extends Controller
{
   
    private $list_server;

    public function __construct()
    {
        $this->list_server = Config::get('lineage2.server.list_server');
    }


    public function addAjaxL2User(DashboardAjaxStoreRequest $request)
    {
        info("test endpount adduser");
        $validated = $request->validated();
        info($validated);
        //info(json_decode($request->json()->all()));
        return Response::json(['success'=>Lang::get('messages.success') , 'result'=>'']);
    }


   
   
}