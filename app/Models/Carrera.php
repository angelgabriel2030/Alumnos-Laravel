<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $fillable = [
        'nombre',
        'nivel',
        'universidad_id'
    ];

    public function universidad()
    {
        return $this->belongsTo(Universidad::class);
    }

    public function grupos(){
        return $this->hasMany(Grupo::class);
    }
}
