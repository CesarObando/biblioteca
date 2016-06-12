<?php

namespace gestorBiblioteca\Http\Controllers;

use Illuminate\Http\Request;
use gestorBiblioteca\Http\Requests;
use gestorBiblioteca\Audiovisual;
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
    $audiovisual = \gestorBiblioteca\Audiovisual::find($id);
    return view ('audiovisual/editar',['audiovisual'=>$audiovisual]);
  }
  public function insertar()
  {
    return view ('audiovisual/insertar');
  }
  public function listar(Request $request)
  {
    $audiovisuales = \gestorBiblioteca\Audiovisual::where('equipo', 'like', '%'.$request['equipo'].'%')
                                                               -> where('marca', 'like', '%'.$request['marca'].'%')
                                                               -> where ('descartado','=', 0)
                                                               -> get();

    Session::put('audiovisuales',$audiovisuales);
    return view ('audiovisual/listar',compact('audiovisuales'));
  }

  public function generarReporte()
  {
    $audiovisuales = Session::get('audiovisuales');
    $pdf = PDF::loadView('audiovisual/pdfAudiovisuales',['audiovisuales'=>$audiovisuales]);
    return $pdf->download('audiovisuales.pdf');
  }

  public function store(Request $request)
  {
    \gestorBiblioteca\Audiovisual::create([
      'equipo' => $request['equipo'],
      'marca' => $request['marca'],
      'modelo' => $request['modelo'],
      'numeroSerie' => $request['numeroSerie'],
    ]);
    return view ('index');
  }

  public function update($id, Request $request)
  {
    $audiovisual = \gestorBiblioteca\Audiovisual::find($id);
    $audiovisual->fill($request->all());
    $audiovisual->save();
    return redirect ('/');
  }

  public function eliminar($id)
  {
    DB::update('update audiovisual set descartado = 1 where id = ?',[$id]);
    return redirect ('/');
  }

  public function buscarPrestamos()
  {
    return view ('audiovisual/buscarPrestamos');
  }
}
