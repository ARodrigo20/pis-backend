<?php

namespace App\Http\Requests\Clientes\Cliente;

use Illuminate\Foundation\Http\FormRequest;

class ClienteContactoDireccionRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'contactos' => 'required|array|min:0',
            'direcciones' => 'required|array|min:0',
        ];
    }
}
