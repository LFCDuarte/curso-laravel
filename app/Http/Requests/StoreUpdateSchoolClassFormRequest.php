<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateSchoolClassFormRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'string|unique',
            'type' => 'string',
            'instructor_id' => '',
        ];
    }
}
