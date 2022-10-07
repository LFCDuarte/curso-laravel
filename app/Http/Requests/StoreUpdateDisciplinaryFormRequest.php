<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateDisciplinaryFormRequest extends FormRequest
{
    public function rules()
    {
        return [

            'name_disciplinary' => 'required|string',
            'workload' => 'required',

        ];

        // if ($this->method() == 'PUT') {
        //     # code...
        // }
    }
}
