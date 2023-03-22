<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Log;
use Lang;

class DashboardChangel2PassUsersStoreRequest extends FormRequest
{
 
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
       
        return [
            'login' => 'required|string|max:25',
            'server_id' => 'required|integer|max:10',
            'old_password' => 'required|string|min:7|max:25',
            'password' => 'required|string|min:7|max:25',
            'password_confirmed' => "required_with:password|same:password",
        ];
    }

    public function messages()
    {

        return [
            'login.required' => Lang::get('validation.name_error'),
            'password.required' => Lang::get('validation.current_password'),
            'password_confirmed' => Lang::get('validation.confirmed_password'),
            'old_password' => Lang::get('validation.old_password'),
            'server_id' => Lang::get('validation.server_id')
        ];
    }


}
