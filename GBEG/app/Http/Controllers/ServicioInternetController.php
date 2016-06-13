<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use PDF;
use Session;

class ServicioInternetController extends Controller
{

  public function buscarPrestamos()
  {
    return view ('servicioInternet/buscarPrestamos');
  }

  public function buscarPrestamosTerminados()
  {
    return view ('servicioInternet/buscarPrestamosTerminados');
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
    Session::put('prestamosInternet',$prestamosInternet);
    return view ('servicioInternet/listar', compact('prestamosInternet'));
  }

  public function listarPrestamosTerminados(Request $request)
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
    $prestamosInternet = DB::select('CALL buscar_prestamo_internet_terminado(?,?,?,?)',[$fecha, $hora, $request['nombre'],$request['seccion']]);
    Session::put('prestamosInternet',$prestamosInternet);
    return view ('servicioInternet/listarPrestamosTerminados', compact('prestamosInternet'));
  }

  public function generarReporte()
  {
    $prestamosInternet = Session::get('prestamosInternet');
    $pdf = PDF::loadView('servicioInternet/pdfPrestamosServicioInternet',['prestamosInternet'=>$prestamosInternet]);
    return $pdf->download('prestamosServicioInternet.pdf');
  }

  public function generarReporteTerminados()
  {
    $prestamosInternet = Session::get('prestamosInternet');
    $pdf = PDF::loadView('servicioInternet/pdfPrestamosServicioInternetTerminados',['prestamosInternet'=>$prestamosInternet]);
    return $pdf->download('prestamosServicioInternetTerminados.pdf');
  }

  public function prestar()
  {
    return view ('servicioInternet/prestar');
  }

public function store(Request $request)
{
  \App\servicioInternet::create([
    'nombreSolicitante' => $request['nombre'],
    'seccion' => $request['seccion'],
    'tema' => $request['tema'],
    'fecha' => $request['fecha'],
    'horaEntrada' => $request['horaEntrada'],
    'horaSalida' => $request['horaSalida']
  ]);
  return view ('index');
}

public function terminarPrestamo($id)
{
  DB::update('update prestamo_servicio_internet set terminado = 1 where id = ?',[$id]);

  return redirect ('/');
}


}
