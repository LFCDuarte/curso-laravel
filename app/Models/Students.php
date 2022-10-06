<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'birth_date',
        'cpf',
        'class_id',
    ];
    public function School_classes()
    {
        return $this->belongsTo(SchoolClass::class, 'class_id');
    }
}
