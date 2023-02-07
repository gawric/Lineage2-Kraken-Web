<?php
  
namespace App\Http\Controllers\Lineage2;

 use App\Http\Controllers\Controller;
 use Response;
 use App\Http\Requests\RegistrationStoreRequest;
 use App\Service\Registration\Registration;
 use App\Service\Registration\Support\SupportFuncReg;

 use Illuminate\Http\Request;

 use App;
 use Config;
 use Log;
 use Lang;
 use Illuminate\Auth\Events\Registered;
 use App\Models\Accounts_expansion;

class RegistrationController extends Controller
{

    
    private $list_server;
    private $model_account_db;
    private  SupportFuncReg $sfc;

    public function __construct()
    {
        $this->arr=[];
        $this->sfc = new SupportFuncReg();
        $this->list_server = Config::get('lineage2.server.list_server');
        
    }

    public function index()
    {
        $this->sfc->getServerName($this->list_server);
        return view('l2page_registration' , ['listServerName' => $this->sfc->getResultServerName()]);
    }

    public function ajaxRequestPost(RegistrationStoreRequest $request)
    {
        $validated = $request->validated();
        $service_reg = new Registration();

        $login = $this->sfc->getData("login" , $validated );
        $password = $this->sfc->getData("password" , $validated );
        $email = $this->sfc->getData("email" , $validated );
        $server_id = $this->sfc->getData("server_id" , $validated );

        $arr_item = $this->sfc->getServerItemById($this->list_server ,  $server_id);
        $modelAccountDb = $this->sfc->getModelAccountDb($arr_item);
        //info("Полученные данные в строке $modelAccountDb");
        if(!$this->sfc->checkModelAccountDb($modelAccountDb)){
          return $this->sfc->getErrorJson();
        }

       
        $user_account_expansion = $this->sfc->save($service_reg , $modelAccountDb , $login , $password , $server_id , $email);
        info($user_account_expansion);
        event(new Registered($user_account_expansion));

        return response()->json(['success'=>Lang::get('validation.success') . ". " . Lang::get('validation.email_send')]);
    }

   
   
}