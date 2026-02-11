<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $fillable = [
        'nombre',
    ];
    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class, 'alumno_materia');
    }
}
