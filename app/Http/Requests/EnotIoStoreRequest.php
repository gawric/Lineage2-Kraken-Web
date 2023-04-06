<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Log;
use Lang;

class EnotIoStoreRequest extends FormRequest
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
       
        return [
            'select_server_id' => 'integer|max:10',
            'char_name' => 'required|string|max:50',
            'select_service_payment' => 'integer|max:10',
            'sum' => "integer|max:10000",
        ];
    }

    public function messages()
    {

        return [
            'select_server_id' => Lang::get('validation.payments_select_server_id'),
            'char_name' => Lang::get('validation.payments_char_name'),
            'select_service_payment' => Lang::get('validation.payments_select_operator'),
            'sum' => Lang::get('validation.payments_sum'),
        ];
    }


}
