<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
        $id=$this->segment(2);
        $rules = [
            'name'=>[
                'required',
                'max:255'],
            'idade'=>[ 
                'required'],
            'cpf'=>[
                'required',
                'max:11',
                Rule::unique('lista')->ignore($id)],
            'email'=>[
                'required',
                'max:255'],
            'cargo'=>[
                'required'],
            'setor'=>[
                'required'],
            'salario'=>[
                'nullable'],

        ];
        return $rules;
    }
    public function messages()
    {
        return[
        'name.required'=>'Insira um nome'
        ];
    }
    
}
