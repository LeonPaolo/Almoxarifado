<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlmoxarifadoRequest extends FormRequest
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
            'nome' => 'required|min:3',
            'email' => 'required|email',
            'fone' => 'required|min:8',
            'item' => 'required|min:3',
            'desc' => 'required|min:10',
        ];
    }
      public function messages()
    {
        return [
            'required' => 'O campo é obrigatório',
            'min' => 'O campo precisa no minimo :min caracteres',
            'email' => 'Digite um email válido'
        ];
    }
}
