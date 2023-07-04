<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePetFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|string|min:3|max:10',
            'idade' => 'required',
            'raca' => 'required|string',
            'descricao' => 'required|min:3|max:255',
            'type_id' => 'required',
            'port_id'=> 'required',
            'sex_id' => 'required',
            'fotos' => 'required'
        ];
    }

      public function messages(): array
    {
        return [
            'nome.required' => 'O nome do pet é obrigatório.',
            'nome.string' => 'O nome deve conter apenas letras.',
            'nome.min' => 'O nome deve ter no mínimo 3 caracteres.',
            'nome.max' => 'O nome deve ter no máximo 10 caracteres.',
            'idade' => 'A idade do pet é obrigatória',
            'raca.required' => 'A raça do pet é obrigatória.',
            'raca.string' => 'O campo raça deve conter apenas letras.',
            'descricao.min' => 'A descrição deve ter no mínimo 3 caracteres.',
            'descricao.max' => 'A descrição deve ter no máximo 255 caracteres.',
            'descricao.required' => 'O descriçao do pet é obrigatório.',
            'type_id.required' => 'O tipo é obrigatório',
            'port_id.required' => 'O porte é obrigatório',
            'sex_id.required' => 'O campo sexo é obrigatório',
            'fotos.required' => 'A foto do pet é obrigatória'
        ];
    }

}
