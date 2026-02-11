<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $fillable = [
        'nombre', 
        'grado',
        'nivel',
        'carrera_id'
    ];

    public function carrera(){
        return $this ->belongsTo(Carrera::class);
    }

    public function alumnos(){
        return $this->hasMany(Alumno::class);
    }
}
