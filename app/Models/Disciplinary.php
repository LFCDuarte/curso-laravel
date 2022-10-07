<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplinary extends Model
{
    
    protected $table='disciplinarys';
    
    protected $fillable = [
        'name_disciplinary',
        'workload',
    ];

    public function InstructorDiscipliny()
    {
        return $this->hasMany(InstructorDiscipliny::class, 'disciplinary_id');
    }
}
