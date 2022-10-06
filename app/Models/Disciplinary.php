<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplinary extends Model
{
    protected $table='disciplinaries';
    
    protected $fillable = [
        'name_disciplinary',
        'workload',
    ];

    public function InstructorDiscipline()
    {
        return $this->hasMany(InstructorDiscipline::class, 'disciplinary_id');
    }
}
