<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUpdateTeam extends FormRequest
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
            'name' => 'required|min:2|max:255',
            'modality' => 'required|integer|min:1|max:6',
            'gender' => [
                'required',
                'string',
                Rule::in(['M', 'F', 'O'])
            ],
            'muse' => 'required|string',
            'players' => 'required|array'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O nome do time é obrigatório.',
            'modality.required' => 'A modalidade é obrigatória.',
            'gender.required' => 'O gênero é obrigatório.',
            'muse.required' => 'O nome da musa é obrigatório.',
            'name.min' => 'O nome do time deve possuir no mínimo 2 caracteres.',
            'name.max' => 'O nome do time deve possuir no máximo 255 caracteres.',
            'muse' => 'Preencha o nome da musa corretamente.',
            'players.required' => 'Escolha os jogadores do time!'
        ];
    }
}
