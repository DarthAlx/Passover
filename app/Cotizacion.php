<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
  protected $table = 'cotizaciones';
  protected $fillable = ['nombre', 'edad', 'email', 'habitacion', 'vista', 'adultos', 'niños', 'telefono', 'paquete'];
}
