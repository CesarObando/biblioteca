<?php

namespace gestorBiblioteca\Http\Controllers;

use Illuminate\Http\Request;

use gestorBiblioteca\Http\Requests;

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
  public function editar()
  {
    return view ('audiovisual/editar');
  }
  public function insertar()
  {
    return view ('audiovisual/insertar');
  }
  public function listar()
  {
    return view ('audiovisual/listar');
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
      'numeroSerie' => $request['serie'],
    ]);
    return view ('index');
  }
}
