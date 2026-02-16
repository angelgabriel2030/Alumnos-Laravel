<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $fillable = ['ruta'];

    public function imageable()
    {
        return $this->morphTo();
    }
}
