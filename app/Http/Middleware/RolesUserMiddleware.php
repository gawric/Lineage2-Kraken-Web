<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Config;

class RolesUserMiddleware
{

    private $role_user_config;

    public function __construct()
    {
        $this->role_user_config = Config::get('lineage2.server.role_name_user');
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


        //info("RolesUserMiddleware>>>>");
       // info($role_name_auth);
       // info($this->role_user_config);

        if(strcmp($this->role_user_config, $role_name_auth) == 0){
            return $next($request);
        }


        return response('Unauthorized.', 401);
    }
}