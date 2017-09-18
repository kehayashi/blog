<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeadRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'nome' => 'required',
            'sobrenome' => 'required',
            'email' => 'required|email',
        ];
    }

    public function messages(){
        return [
            'nome.required' => 'Preencha o campo NOME',
            'sobrenome.required' => 'Preencha o campo SOBRENOME',
            'email.required' => 'Preencha o campo EMAIL',
        ];
    }
}
