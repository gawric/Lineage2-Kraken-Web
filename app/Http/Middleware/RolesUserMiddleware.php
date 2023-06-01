<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Config;
use App\Service\Utils\FunctionSupport;
use App\Providers\Events\WebStatistics;
use App\Models\Statistics\User\Accounts_ExpansionStatistics;

class RolesUserMiddleware
{

    private $role_user_config;
    private $status_auth_user;
    private $status_auth__fail_user;
    public function __construct()
    {
        $this->role_user_config = Config::get('lineage2.server.role_name_user');
        $this->status_auth_user = Config::get('lineage2.statistics.status_auth_user');
        $this->status_auth__fail_user = Config::get('lineage2.statistics.status_auth__fail_user');
    }


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
       
        
        $role_name_auth = $request->user()->accounts_role->first()->name;
        $id = $request->user()->id;
        $email = $request->user()->email;
        $ip_address = $request->getClientIp(true);
        $open_url = $request->url();

        //info("RolesUserMiddleware>>>>");
       // info($role_name_auth);
       // info($this->role_user_config);

        if(strcmp($this->role_user_config, $role_name_auth) == 0){
            event(new WebStatistics(FunctionSupport::createModelUserStatistic($ip_address , $open_url , $this->status_auth_user . " email " . $email  ,  $id)));
            return $next($request);
        }

        event(new WebStatistics(FunctionSupport::createModelUserStatistic($ip_address , $open_url , $this->status_auth__fail_user  ,  $id)));

        return response('Unauthorized.', 401);
    }
}