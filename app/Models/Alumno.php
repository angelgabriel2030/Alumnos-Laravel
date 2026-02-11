<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = [
        'matricula',
        'nombre',
        'nombre',
        'grupo_id',
    ];

    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }

    public function materias()
    {
        return $this->belongsToMany(Materia::class, 'alumno_materia');
    }
}
