<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peliculas extends Model
{
    protected $table = 'peliculas';
    protected $fillable = ['codigo', 'titulo', 'anio', 'protagonista', 'semblanza'];
}
