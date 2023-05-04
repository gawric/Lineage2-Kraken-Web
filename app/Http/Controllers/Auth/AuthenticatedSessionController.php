<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Config;
use Session;
use Illuminate\Validation\ValidationException;
use App\Service\Utils\FunctionRedirectUser;

class AuthenticatedSessionController extends Controller
{

   
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
      
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
       
        $user = $request->user();

        if(isset($user)){
            $role_name_auth = $request->user()->accounts_role->first()->name;
            return FunctionRedirectUser::getRedirect($role_name_auth , $request->user()->login);
        }
        
        return redirect()->intended("/");
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
