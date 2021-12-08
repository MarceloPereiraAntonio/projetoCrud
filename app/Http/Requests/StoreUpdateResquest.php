<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateResquest extends FormRequest
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
            'name'=>'required|max:255',
            'idade'=>'required',
            'cpf'=>'required|unique:lista|max:11',
            'email'=>'required|max:255',
            'cargo'=>'required',
            'setor'=>'required',
            'salario'=>'nullable'
        ];
    }
    public function messages()
    {
        return[
        'name.required'=>'Insira um nome'
        ];
    }
    
}
