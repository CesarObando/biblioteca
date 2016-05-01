<?php

namespace gestorBiblioteca\Http\Controllers;

use Illuminate\Http\Request;

use gestorBiblioteca\Http\Requests;

class PrestamoAudiovisualController extends Controller
{

  public function prestar($id)
  {
    $audiovisual = \gestorBiblioteca\Audiovisual::find($id);
    return view ('audiovisual/prestar',['audiovisual'=>$audiovisual]);
  }

  public function show($id)
  {
    $audiovisual = \gestorBiblioteca\Audiovisual::find($id);
    return view ('audiovisual/prestar',['audiovisual'=>$audiovisual]);
  }

  public function store(Request $request)
  {
    \gestorBiblioteca\PrestamoAudiovisual::create([
      'equipo' => $request['id'],
      'nombreSolicitante' => $request['nombreSolicitante'],
      'condicion' => $request['condicion'],
      'finesPrestamo' => $request['finesPrestamo'],
      'fecha' => $request['fecha'],
      'hora' => $request['hora'],
    ]);
    return redirect ('/');
  }
}
