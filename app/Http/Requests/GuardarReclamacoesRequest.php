<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarReclamacoesRequest extends FormRequest
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
            "caso" => "required",
            "mensagem" => "required",
            "referencia" => "required|unique:reclamacoes,referencia",
            "contacto" => "required",
            "bairro" => "required",
            "file" => "null",
            "senha" => "required",
            "rua" => "required",
            "posto" => "null"
            //
        ];
    }
}
