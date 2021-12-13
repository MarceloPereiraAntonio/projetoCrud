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
                'min:11',
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
        'name.required'=>'Insira o seu nome',
        'name.max'=>'Maximo de caracteres 255',
        'idade.required'=>'Insira sua idade',
        'cpf.required'=>'Insira o CPF',
        'cpf.min'=>'CPF deve conter 11 digitos',
        'cpf.max'=>'CPF deve conter 11 digitos',
        'cpf.unique'=>'Esse CPF ja está cadastrado',
        'email.required'=>'Insira o email',
        'cargo.required'=>'Insira o cargo',
        'setor.required'=>'Insira o setor',
        ];
    }
    
}
