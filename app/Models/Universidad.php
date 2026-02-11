<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Universidad extends Model
{
    protected $table = 'universidades';
    protected $fillable = [
        'nombre',
        'direccion'
    ];

    public function carreras(){
        return $this->hasMany(Carrera::class);
    }
}
