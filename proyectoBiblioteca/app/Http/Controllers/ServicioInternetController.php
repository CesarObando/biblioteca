<?php

namespace gestorBiblioteca\Http\Controllers;

use Illuminate\Http\Request;

use gestorBiblioteca\Http\Requests;

class ServicioInternetController extends Controller
{
  public function buscarPrestamos()
  {
    return view ('servicioInternet/buscarPrestamos');
  }
  public function listar(Request $request)
  {

      $prestamosInternet = \gestorBiblioteca\ServicioInternet::where('fecha', $request['fecha'])
                                                             -> where('nombreSolicitante', 'like', '%'.$request['nombre'].'%')
                                                             -> where('seccion', 'like', '$'.$request['seccion'].'%')
                                                             -> where('horaEntrada', $request['horaEntrada'])
                                                             -> get();
    return view ('servicioInternet/listar', compact('prestamosInternet'));
  }
  public function prestar()
  {
    return view ('servicioInternet/prestar');
  }

public function store(Request $request)
{
  \gestorBiblioteca\servicioInternet::create([
    'nombreSolicitante' => $request['nombre'],
    'seccion' => $request['seccion'],
    'tema' => $request['tema'],
    'fecha' => $request['fecha'],
    'horaEntrada' => $request['horaEntrada'],
    'horaSalida' => $request['horaSalida']
  ]);
  return view ('index');
}



}
