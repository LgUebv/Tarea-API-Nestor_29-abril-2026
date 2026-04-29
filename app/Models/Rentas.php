<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rentas extends Model
{
    protected $table = 'rentas';
    protected $fillable = ['cliente', 'codigo',  'fecha_renta', 'costo'];
}
