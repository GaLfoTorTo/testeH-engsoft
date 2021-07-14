<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientesRequest extends FormRequest
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
            'nome' => 'required',
            'endereco' => 'required',
            'bairro' => 'required',
            'municipio' => 'required',
            'estado' => 'required',
            'cep' => 'required',
            'telefone' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'nome.required' => 'Nome do cliente é obrigatório',
            'endereco.required' => 'Endereço do cliente é obrigatório',
            'bairro.required' => 'Bairro do cliente é obrigatório',
            'municipio.required' => 'Município do cliente nao foi gerado com sucesso!',
            'estado.required' => 'Estado do cliente nao foi gerado com sucesso!',
            'cep.required' => 'CEP do cliente nao foi gerado com sucesso!',
            'telefone.required' => 'Telefone do cliente nao foi gerado com sucesso!'
        ];
    }
}
