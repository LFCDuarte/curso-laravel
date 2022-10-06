<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateDisciplinaryFormRequest extends FormRequest
{
    public function rules()
    {
        return [

            'nam_disciplina' => 'required|string|unique',
            'carga_horaria' => 'required',

        ];

        // if ($this->method() == 'PUT') {
        //     # code...
        // }
    }
}
