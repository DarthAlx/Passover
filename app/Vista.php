<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vista extends Model
{
  protected $table = 'vistas';
  protected $fillable = ['nombre'];
  public function paquetes(){
    return $this->belongsToMany('App\Paquete');
  }
}
