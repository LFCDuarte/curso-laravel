<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateStudentFormRequest extends FormRequest
{
    public function rules()
    {

        $id = $this->id ?? '';

        $rules = [
            
                'name' => ['required','string','max:50','min:3'],
                'email' => [
                    'required',
                    'email',
                    'unique:users,email,{$id},id',
                ],
                'password'=> [
                    'required',
                    'min:6',
                    'max:15',
                ]
            ];
               
        if ($this->method('PUT')){
            $rules['password'] = [
                'nullable',
                'min:6',
                'max:15',
                
            ];
        }
        return $rules;
    }
}
