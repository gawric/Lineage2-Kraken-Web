<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Log;
use Lang;

class AdminDashboardAddL2ItemsStoreRequest extends FormRequest
{
 
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
       
        return [
            '*.char_name' => 'required|string|max:25',
            '*.server_name' => 'required|string|max:35',
            '*.item_id' => 'required|integer',
            '*.count' => 'required|integer|max:99999',
        ];
    }

    public function messages()
    {

        return [
            'char_name' => Lang::get('validation.admin_additems_char_name'),
            'item_id' => Lang::get('validation.admin_additems_item_id'),
            'count' => Lang::get('validation.admin_additems_count'),
            'server_name' => Lang::get('validation.server_id')
        ];
    }


}