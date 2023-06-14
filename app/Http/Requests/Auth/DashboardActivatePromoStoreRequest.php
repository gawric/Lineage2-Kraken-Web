<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Log;
use Lang;

class DashboardActivatePromoStoreRequest extends FormRequest
{
 
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
       
        return [
            'account_name' => 'required|string|max:25',
            'char_name' => 'required|string|max:25',
            'server_name' => 'required|string|max:25',
            'promo_code' => 'required|string|max:25',
        ];
    }

    public function messages()
    {

        return [
            'account_name.required' => Lang::get('validation.admin_additems_account_name'),
            'char_name.required' => Lang::get('validation.admin_additems_char_name'),
            'server_name.required' => Lang::get('validation.admin_use_all_accounts_server_name'),
            'promo_code' => Lang::get('validation.lk_table_dashboardchars_promo_error'),
        ];
    }


}
