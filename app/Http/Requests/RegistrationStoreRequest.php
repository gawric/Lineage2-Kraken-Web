<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Log;
use Lang;

class RegistrationStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        Log::info("Use Rules valid ");
        return [
            'email' => 'required|email',
            'login' => 'required|string|max:25',
            'password' => 'required|string|min:7|max:25',
            'password_confirmed' => "required_with:password|same:password",
           // 'password_confirmed' => 'required|min:7|string|max:50',
            'server_id' => 'integer'
        ];
    }

    public function messages()
    {

        return [
            'email.required' => Lang::get('validation.email_error'),
            'login.required' => Lang::get('validation.name_error'),
            'password.required' => Lang::get('validation.current_password'),
            'password_confirmed' => Lang::get('validation.confirmed_password'),
            'server_id' => Lang::get('validation.server_id')
        ];
    }


}
