<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Universidad extends Model
{
    protected $fillable = [
        'nombre',
        'ciudad'
    ];

    public function carreras(){
        return $this->hasMany(Carrera::class);
    }
}
