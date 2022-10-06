<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use IntlChar;

class InstructorDiscipline extends Pivot
{   
    protected $fillable = [
        'instructor_id',
        'disciplinary_id',
    ];

public function Instructor()
{
   return $this->belongsTo(Instructor::class, 'instructor_id');

}
public function Disciplinary()
{
  return $this->belongsTo(Disciplinary::class, 'disciplinary_id');
}


}
