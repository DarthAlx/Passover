<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
  protected $table = 'paquetes';
  protected $fillable = ['habitacion_id','vista_id','precio'];
  public function habitacion(){
    return $this->hasOne('App\Habitacion');
  }
  public function vista(){
    return $this->hasOne('App\Vista');
  }
}
