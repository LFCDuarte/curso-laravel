<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grid extends Model
{
    use HasFactory;

    protected $fillable = [
        'instructor_id',
        'disciplinarys_id',
        'students_id',
    
    ];

    public function Instructor()
    {
        return $this->hasMany(Instructor::class, 'instructor_id');
    }

    public function Discipline()
    {
        return $this->hasMany(Discipline::class, 'discipline_id');
    }

    public function Studentes()
    {
        return $this->hasMany(Studentes::class, 'student_id');
    }
}
