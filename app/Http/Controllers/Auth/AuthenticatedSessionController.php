<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Config;


class AuthenticatedSessionController extends Controller
{

   
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
       // info("auth test login create");
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {


        $request->authenticate();

        $request->session()->regenerate();
        
        $role_name_auth = $request->user()->accounts_role->first()->name;

        return $this->getRedirect($role_name_auth);
        //return redirect()->intended("adminDashboard");
    }


  
    private  function getRedirect($role_name_auth){

        if(strcmp($this->getRoleNameUser(), $role_name_auth) == 0){
         //   info("redirect HOME");
            return redirect()->intended(RouteServiceProvider::HOME);
        }
        else{
            if(strcmp($this->getRoleNameAdmin(), $role_name_auth) == 0){
              //  info("redirect HOME ADMIN");
             //   info(RouteServiceProvider::HOME_ADMIN);
                return redirect()->intended(RouteServiceProvider::HOME_ADMIN);
            }
            else{
                //info("redirect HOME UNKNOW");
                return redirect()->intended(RouteServiceProvider::HOME);
            }
        }
    }


    private function getRoleNameAdmin(){
        return  Config::get('lineage2.server.role_name_admin');
    }

    private function getRoleNameUser(){
        return Config::get('lineage2.server.role_name_user');
    }

    

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
