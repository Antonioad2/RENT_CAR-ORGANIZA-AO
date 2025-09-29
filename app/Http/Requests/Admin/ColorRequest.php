<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ColorRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Ajuste para sua lógica de autorização, se necessário
    }

    public function rules()
    {
        $color = $this->route('color');
        $id = $color instanceof \App\Models\Color ? $color->id : null;

        return [
            'description' => ['required', 'string', 'max:255', 'unique:colors,description,' . $id],
        ];
    }

    public function messages()
    {
        return [
            'description.required' => 'A descrição é obrigatória.',
            'description.string' => 'A descrição deve ser um texto.',
            'description.max' => 'A descrição não pode exceder 255 caracteres.',
            'description.unique' => 'Esta descrição já está em uso.',
        ];
    }
}