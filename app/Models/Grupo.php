<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $fillable = [
        'nombre', 
        'carrera_id', 
        'tutor_id'
    ];

    public function carrera(){
        return $this ->belongsTo(Carrera::class);
    }

    public function alumnos(){
        return $this->hasOne(Alumno::class);
    }

    public function tutor(){
        return $this->belongsTo(Tutor::class);
    }
}
