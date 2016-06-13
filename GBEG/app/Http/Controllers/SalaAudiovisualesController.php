<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use PDF;
use Session;

class SalaAudiovisualesController extends Controller
{


  public function show($id)
  {
    $salaAudiovisuales = \App\SalaAudiovisuales::find($id);
    return view ('salaAudiovisuales/prestar',['salaAudiovisuales'=>$salaAudiovisuales]);
  }

  public function store(Request $request)
  {
    \App\SalaAudiovisuales::create([
      'nombreSolicitante' => $request['nombreSolicitante'],
      'tema' => $request['tema'],
      'seccion' => $request['seccion'],
      'totalEstudiantes' => $request['totalEstudiantes'],
      'fecha' => $request['fecha'],
      'horaEntrada' => $request['horaEntrada'],
      'horaSalida' => $request['horaSalida'],
      'observaciones' => $request['observaciones'],
    ]);
    return redirect ('/');
  }

  public function buscarPrestamos()
  {
    return view ('salaAudiovisuales/buscarPrestamos');
  }

  public function buscarPrestamosTerminados()
  {
    return view ('salaAudiovisuales/buscarPrestamosTerminados');
  }

  public function listar(Request $request)
  {
    $fecha = $request['fecha'];
    $hora = $request['horaEntrada'];
    if($fecha=='' || $fecha==null)
    {
      $fecha='0000.0.0';
    }
    if($hora=='' || $hora==null)
    {
      $hora='00:00:00';
    }
    $prestamosSalaAudiovisuales = DB::select('CALL buscar_prestamo_sala_audiovisuales(?,?,?,?)',[$fecha,$hora,$request['nombreSolicitante'],$request['tema']]);
    Session::put('prestamosSalaAudiovisuales',$prestamosSalaAudiovisuales);
    return view ('salaAudiovisuales/listar',compact('prestamosSalaAudiovisuales'));

  }

  public function listarPrestamosTerminados(Request $request)
  {
    $fecha = $request['fecha'];
    $hora = $request['horaEntrada'];
    if($fecha=='' || $fecha==null)
    {
      $fecha='0000.0.0';
    }
    if($hora=='' || $hora==null)
    {
      $hora='00:00:00';
    }
    $prestamosSalaAudiovisuales = DB::select('CALL buscar_prestamo_sala_audiovisuales_terminados(?,?,?,?)',[$fecha,$hora,$request['nombreSolicitante'],$request['tema']]);
    Session::put('prestamosSalaAudiovisuales',$prestamosSalaAudiovisuales);
    return view ('salaAudiovisuales/listarPrestamosTerminados',compact('prestamosSalaAudiovisuales'));

  }

  public function generarReporte()
  {
    $prestamosSalaAudiovisuales = Session::get('prestamosSalaAudiovisuales');
    $pdf = PDF::loadView('salaAudiovisuales/pdfPrestamosSalaAudiovisuales',['prestamosSalaAudiovisuales'=>$prestamosSalaAudiovisuales]);
    return $pdf->download('prestamosSalaAudiovisuales.pdf');
  }

  public function generarReporteTerminados()
  {
    $prestamosSalaAudiovisuales = Session::get('prestamosSalaAudiovisuales');
    $pdf = PDF::loadView('salaAudiovisuales/pdfPrestamosSalaAudiovisualesTerminados',['prestamosSalaAudiovisuales'=>$prestamosSalaAudiovisuales]);
    return $pdf->download('prestamosSalaAudiovisualesTerminados.pdf');
  }

  public function prestar()
  {
    return view ('salaAudiovisuales/prestar');
  }

  public function terminarPrestamo($id)
  {
    DB::update('update prestamo_sala_audiovisuales set terminado = 1 where id = ?',[$id]);

    return redirect ('/');
  }
}
