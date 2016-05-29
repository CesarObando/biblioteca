<?php

namespace gestorBiblioteca\Http\Controllers;

use Illuminate\Http\Request;

use gestorBiblioteca\Http\Requests;
use DB;

class ServicioInternetController extends Controller
{
  public function buscarPrestamos()
  {
    return view ('servicioInternet/buscarPrestamos');
  }
  public function listar(Request $request)
  {
    $hora = $request['horaEntrada'];
    $fecha = $request['fecha'];
    if($hora == '' || $hora == null)
    {
      $hora == '00:00:00';
    }
    if($fecha == '' || $fecha == null)
    {
      $fecha = '0000.0.0';
    }
    $prestamosInternet = DB::select('CALL buscar_prestamo_internet(?,?,?,?)',[$fecha, $hora, $request['nombre'],$request['seccion']]);

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
