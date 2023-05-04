<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Service\Utils\FunctionRedirectUser;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $user = $request->user();

                if(isset($user)){
                    $role_name_auth = $request->user()->accounts_role->first()->name;
                    return FunctionRedirectUser::getRedirect($role_name_auth , $request->user()->login);
                }

                return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }

    private function getRedirect(){

    }
}
