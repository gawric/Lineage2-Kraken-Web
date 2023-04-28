<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Config;

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
       // dd($this->role_admin);
       // info("RoleAdminMiddleware>>>>");
        
        //info($role_name_auth);
       // info($this->role_admin);


        if(strcmp($this->role_admin, $role_name_auth) == 0){
            return $next($request);
        }


        return response('Unauthorized.', 401);
    }
}