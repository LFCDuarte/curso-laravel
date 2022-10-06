<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use IntlChar;

class Instructor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'birth_date',
        'cpf',
    ];

    public function InstructorDiscipline()
    {
        return $this->hasMany(InstructorDiscipline::class, 'instructor_id');
    }
}
