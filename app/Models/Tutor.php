<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model {
    protected $table = 'tutores';
    protected $fillable = [
        'nombre',
        'universidad_id'
        ];

    public function fotos()
    {
        return $this->morphMany(Foto::class, 'imageable');
    }

    public function grupos()
    {
        return $this->hasMany(Grupo::class);
    }
}
