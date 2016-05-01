<?php

namespace gestorBiblioteca\Http\Controllers;

use Illuminate\Http\Request;
use gestorBiblioteca\Http\Requests;
use gestorBiblioteca\Audiovisual;

class AudiovisualController extends Controller
{
  public function buscar()
  {
    return view ('audiovisual/buscar');
  }
  public function buscarPrestamos()
  {
    return view ('audiovisual/buscarPrestamos');
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
  public function listar()
  {
    $audiovisuales = \gestorBiblioteca\Audiovisual::All();
    return view ('audiovisual/listar',compact('audiovisuales'));
  }
  public function listarPrestamos()
  {
    return view ('audiovisual/listarPrestamos');
  }
  public function prestar()
  {
    return view ('audiovisual/prestar');
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
    return view ('index');
  }
}
