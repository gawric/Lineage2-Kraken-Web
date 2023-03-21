<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Log;
use Lang;

class DashboardAjaxStoreRequest extends FormRequest
{
 
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
       
        return [
            
            'login' => 'required|string|max:25'
           /** 'password' => 'required|string|min:7|max:25',
            * 'email' => 'required|email|unique:accounts_expansion|max:25',
            *'password_confirmed' => "required_with:password|same:password",
            *'server_id' => 'integer|max:10'
             */
        ];
    }

    public function messages()
    {

        return [
            'login.required' => Lang::get('validation.name_error'),

            /** 'email.required' => Lang::get('validation.email_error'),
            *'password.required' => Lang::get('validation.current_password'),
            *'password_confirmed' => Lang::get('validation.confirmed_password'),
            *'server_id' => Lang::get('validation.server_id')
            */
        ];
    }


}
