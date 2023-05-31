<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Config;

use App\Service\Utils\FunctionSupport;
use App\Providers\Events\WebStatistics;
use App\Models\Statistics\User\Accounts_ExpansionStatistics;

class RoleAdminMiddleware
{

    private $role_admin;

    public function __construct()
    {
        $this->role_admin = Config::get('lineage2.server.role_name_admin');
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
       // dd($request->user()->accounts_role->first()->name);
        $role_name_auth = $request->user()->accounts_role->first()->name;
       
        $id = $request->user()->id;
        $ip_address = $request->getClientIp(true);
        $open_url = $request->url();



        if(strcmp($this->role_admin, $role_name_auth) == 0){
            event(new WebStatistics(FunctionSupport::createModelUserStatistic($ip_address , $open_url , $this->status_auth_user  ,  $id)));
            return $next($request);
        }

        event(new WebStatistics(FunctionSupport::createModelUserStatistic($ip_address , $open_url , $this->status_auth_user  ,  $id)));
        return response('Unauthorized.', 401);
    }
}