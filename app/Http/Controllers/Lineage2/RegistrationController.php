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
 use App\Service\ProxySqlL2Server\ProxySqlServer;

class RegistrationController extends Controller
{

    
    private $list_server;
    private $model_account_db;
    private  SupportFuncReg $sfc;
    private  ProxySqlServer $proxySql;

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


        $login = $this->sfc->getData("login" , $validated );
        $password = $this->sfc->getData("password" , $validated );
        $email = $this->sfc->getData("email" , $validated );
        $server_id = $this->sfc->getData("server_id" , $validated );


        
        $arr_item = $this->sfc->getServerItemById($this->list_server ,  $server_id);
        //если мы нашли сервер по id номеру
        if(count($arr_item) > 0){

            $modelAccountDb = $this->sfc->getModelAccountDb($arr_item);
            $developer_id_server = $this->sfc->getDeveloper_id($arr_item);
            $this->proxySql = new ProxySqlServer($developer_id_server);
    
    
            if(!$this->sfc->checkModelAccountDb($modelAccountDb)){
              return $this->sfc->getErrorJson(Lang::get('validation.enter_server_db') , Lang::get('validation.enter_server_db'));
            }
    
            if($this->proxySql->isUserExistServer($modelAccountDb , $login) || $developer_id_server == -1){
                return $this->sfc->getErrorJson(Lang::get('validation.enter_use_db') , Lang::get('validation.enter_use_db'));
            }
    
    
           
            $user_account_expansion = $this->proxySql->regUser($modelAccountDb , $login , $password , $server_id , $email);
    
           // info("User Account Expansion ");
            //info($user_account_expansion);
            
            event(new Registered($user_account_expansion));
    
            return response()->json(['success'=>Lang::get('validation.success') . ". " . Lang::get('validation.email_send')]);

        }
        //не нашли сервер возвращаем ошибку
        return $this->sfc->getErrorJson(Lang::get('validation.enter_server_db') , Lang::get('validation.enter_server_db'));
      
    }

   
   
}