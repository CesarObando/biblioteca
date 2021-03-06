<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Audiovisual;
use DB;
use Session;
use PDF;

class AudiovisualController extends Controller
{
  public function buscar()
  {
    return view ('audiovisual/buscar');
  }

  public function edit($id)
  {
    $audiovisual = \App\Audiovisual::find($id);
    return view ('audiovisual/editar',['audiovisual'=>$audiovisual]);
  }
  public function insertar()
  {
    return view ('audiovisual/insertar');
  }
  public function listar(Request $request)
  {
    $equipo = $request['equipo'];
    if($equipo == "Otro"){
      $equipo = $request['otro'];
    }
    $audiovisuales = \App\Audiovisual::where('equipo', 'like', '%'.$equipo.'%')
                                                               -> where('marca', 'like', '%'.$request['marca'].'%')
                                                               -> where ('descartado','=', 0)
                                                               -> get();

    Session::put('audiovisuales',$audiovisuales);
    return view ('audiovisual/listar',compact('audiovisuales'));
  }

  public function listarEliminados()
  {
    $audiovisuales = \App\Audiovisual::where('descartado', '=', true)
                                                               -> get();

    Session::put('audiovisuales',$audiovisuales);
    return view ('audiovisual/listarEliminados',compact('audiovisuales'));
  }

  public function generarReporte()
  {
    $audiovisuales = Session::get('audiovisuales');
    $pdf = PDF::loadView('audiovisual/pdfAudiovisuales',['audiovisuales'=>$audiovisuales]);
    return $pdf->download('audiovisuales.pdf');
  }

  public function generarReporteEliminados()
  {
    $audiovisuales = Session::get('audiovisuales');
    $pdf = PDF::loadView('audiovisual/pdfAudiovisualesEliminados',['audiovisuales'=>$audiovisuales]);
    return $pdf->download('audiovisualesEliminados.pdf');
  }

  public function store(Request $request)
  {
    $equipo = $request['equipo'];
    if($equipo == "Otro"){
      $equipo = $request['otro'];
    }
    \App\Audiovisual::create([
      'equipo' => $equipo,
      'marca' => $request['marca'],
      'modelo' => $request['modelo'],
      'numeroSerie' => $request['numeroSerie'],
    ]);
    return view ('index');
  }

  public function update($id, Request $request)
  {
    $audiovisual = \App\Audiovisual::find($id);
    $audiovisual->fill($request->all());
    $audiovisual->save();
    return redirect ('/');
  }

  public function eliminar($id)
  {
    DB::update('update audiovisual set descartado = 1 where id = ?',[$id]);
    return redirect ('/');
  }

  public function recuperar($id)
  {
    DB::update('update audiovisual set descartado = 0 where id = ?',[$id]);
    return redirect ('/');
  }

  public function buscarPrestamos()
  {
    return view ('audiovisual/buscarPrestamos');
  }
}
