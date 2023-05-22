<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Log;
use Lang;

class AdminDashboardBlockUserStoreRequest extends FormRequest
{

 
    /**
     * Get the validation rules that apply to the request.
     *
     * 'admin_use_all_accounts_id' => 'неверный id аккаунта',
     * 'admin_use_all_accounts_accountname' => 'неверное имя аккаунта',
     * 'admin_use_all_accounts_server_name' => 'неверное имя сервера',
     * @return array<string, mixed>
     */
    public function rules()
    {
       
        return [
            'accountId' => 'required|integer|max:1000',
            'accountname' => 'required|string|max:50',
            'server_name' => 'required|string|max:25',
        ];
    }

    public function messages()
    {

        return [
            'accountId.required' => Lang::get('validation.admin_use_all_accounts_id'),
            'accountname.required' => Lang::get('validation.admin_use_all_accounts_accountname'),
            'server_name' => Lang::get('validation.admin_use_all_accounts_server_name'),
        ];
    }


}
