<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Paquete;
use Mail;
use App\Cotizacion;

class CotizacionController extends Controller
{

  public function __construct() {
        $this->beforeFilter('csrf', ['on' => '']);
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $paquetes = Paquete::where('habitacion_id', $request->habitacion)->where('vista_id', $request->vista)->get();
        $adultos=$request->adultos;
        $niños=$request->niños;
        $personas=$adultos+$niños;
        $nombre = $request->nombre;
        $edad = $request->edad;
        $correo = $request->correo;
        $habitacion = $request->habitacion;
        $vista = $request->vista;
        $telefono = $request->telefono;

        $guardar = new Cotizacion($request->all());
        $guardar->save();
        $datos=$request;
        $user = array('email' => $correo,'nombre' => $correo );
        Mail::send('emails.cotizacion', ['datos'=>$datos], function ($m) use ($user) {
            $m->from('alxunscarred@gmail.com', 'Organización Hafikoman');
            $m->to($user['email'], $user['name'])->subject('Cotización');
        });

      /*  if ($request->habitacion==1) {//single room
          if ($personas>1) {
            return response()->json([
              'success' => 'error',
              'msg' => "Esta habitación es para una sola persona."
            ]);
          }
          else {
            foreach ($paquetes as $paquete) {
                    $datos[]=array(
                      'id'=>$paquete->id,
                      'precio'=>$paquete->precio
                    );
                  }
            return response()->json($datos);
          }
        }

        if ($request->habitacion==2) {//double room
          if ($personas>2) {
            return response()->json([
              'success' => 'error',
              'msg' => "Esta habitación es para dos personas."
            ]);
          }
          else {
            foreach ($paquetes as $paquete) {
                    $datos[]=array(
                      'id'=>$paquete->id,
                      'precio'=>$paquete->precio
                    );
                  }
            return response()->json($datos);
          }
        }

        if ($request->habitacion==3) {//adult sharing
          if ($adultos>4) {
            return response()->json([
              'success' => 'error',
              'msg' => "Esta habitación es solo para 4 personas."
            ]);
          }
          elseif ($niños>0) {
            return response()->json([
              'success' => 'error',
              'msg' => "Esta habitación es solo para mayores de 18 años."
            ]);
          }
          else {
            foreach ($paquetes as $paquete) {
                    $datos[]=array(
                      'id'=>$paquete->id,
                      'precio'=>$paquete->precio
                    );
                  }
            return response()->json($datos);
          }
        }

        if ($request->habitacion==4) {//jr sharing
          if ($niños>3) {
            return response()->json([
              'success' => 'error',
              'msg' => "Esta habitación es solo para 3 personas."
            ]);
          }
          elseif ($adultos>0) {
            return response()->json([
              'success' => 'error',
              'msg' => "Esta habitación es solo para personas entre 12 y 17 años."
            ]);
          }
          else {
            foreach ($paquetes as $paquete) {
                    $datos[]=array(
                      'id'=>$paquete->id,
                      'precio'=>$paquete->precio
                    );
                  }
            return response()->json($datos);
          }
        }

        if ($request->habitacion==5) {//kids sharing
          if ($niños>3) {
            return response()->json([
              'success' => 'error',
              'msg' => "Esta habitación es solo para 3 personas."
            ]);
          }
          elseif ($adultos>0) {
            return response()->json([
              'success' => 'error',
              'msg' => "Esta habitación es solo para personas entre 3 y 11 años."
            ]);
          }
          else {
            foreach ($paquetes as $paquete) {
                    $datos[]=array(
                      'id'=>$paquete->id,
                      'precio'=>$paquete->precio
                    );
                  }
            return response()->json($datos);
          }
        }

        if ($request->habitacion==6) {//extra room kids
          if ($niños>3) {
            return response()->json([
              'success' => 'error',
              'msg' => "Esta habitación es solo para 3 personas."
            ]);
          }
          elseif ($adultos>0) {
            return response()->json([
              'success' => 'error',
              'msg' => "Esta habitación es solo para menores de edad."
            ]);
          }
          else {
            foreach ($paquetes as $paquete) {
                    $datos[]=array(
                      'id'=>$paquete->id,
                      'precio'=>$paquete->precio
                    );
                  }
            return response()->json($datos);
          }
        }

        if ($request->habitacion==7) {//extra night
          if ($niños>3) {
            return response()->json([
              'success' => 'error',
              'msg' => "Esta habitación solo puede alojar 3 menores."
            ]);
          }
          elseif ($adultos>2) {
            return response()->json([
              'success' => 'error',
              'msg' => "Esta habitación solo puede alojar 2 adultos."
            ]);
          }
          else {
            foreach ($paquetes as $paquete) {
                    $datos[]=array(
                      'id'=>$paquete->id,
                      'precio'=>$paquete->precio
                    );
                  }
            return response()->json($datos);
          }
        }*/

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
