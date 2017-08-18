<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');

});

Route::get('/habitaciones', function () {
    $habitaciones = App\Habitacion::all();
    foreach ($habitaciones as $habitacion) {
            $datos[]=array(
              'id'=>$habitacion->id,
              'nombre'=>$habitacion->nombre
            );
          }
          return response()->json($datos);
});

Route::get('/vistas', function () {
    $vistas = App\Vista::all();
    foreach ($vistas as $vista) {
            $datos[]=array(
              'id'=>$vista->id,
              'nombre'=>$vista->nombre
            );
          }
          return response()->json($datos);
});


Route::post('cotizar', 'CotizacionController@store');
