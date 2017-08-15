<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
  protected $table = 'habitaciones';
  protected $fillable = ['nombre', 'personas','edadminima','edadmaxima'];
  public function paquetes(){
    return $this->belongsToMany('App\Paquete');
  }
}
