<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateInstructorDisciplineFormRequest extends FormRequest
{
    public function rules()
    {
        return [
            'instructor_id'=> ['integer', 'exists:instructors,id'],
            'disciplinary_id'=> ['integer', 'exists:disciplinarys,id'],
        ];
    }
}
