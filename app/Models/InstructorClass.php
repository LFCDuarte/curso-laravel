<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class InstructorClasses extends Pivot
{
    protected $fillable = [
        'instructor_id',
        'class_id',
    ];

    public function Instructor()
    {
       return $this->belongsTo(Instructor::class, 'instructor_id');
    
    }
    public function School_class()
    {
      return $this->belongsTo(SchoolClass::class, 'class_id');
    }
}
