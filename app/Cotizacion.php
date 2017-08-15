<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
  protected $table = 'cotizacion';
  protected $fillable = ['nombre', 'edad', 'correo', 'habitacion', 'vista', 'adultos', 'niños', 'telefono'];
}
