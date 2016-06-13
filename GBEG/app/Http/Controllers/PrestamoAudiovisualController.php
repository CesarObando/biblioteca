<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Http\Requests;
use DB;
use View;
use Session;

class PrestamoAudiovisualController extends Controller
{



  public function show($id)
  {
    $audiovisual = \App\Audiovisual::find($id);
    return view ('audiovisual/prestar',['audiovisual'=>$audiovisual]);
  }

  public function store(Request $request)
  {
    $condicion = $request['condicion'];
    if($condicion == "Otro"){
      $condicion = $request['otracondicion'];
    }
    $finesPrestamo = $request['finesPrestamo'];
    if($finesPrestamo == "Otro"){
      $finesPrestamo = $request['otromotivo'];
    }
    \App\PrestamoAudiovisual::create([
      'idaudiovisual' => $request['id'],
      'nombreSolicitante' => $request['nombreSolicitante'],
      'condicion' => $condicion,
      'finesPrestamo' => $finesPrestamo,
      'fecha' => $request['fecha'],
      'hora' => $request['hora'],
    ]);
    DB::update('update audiovisual set prestado = 1 where id = ?',[$request['id']]);
    return redirect ('/');
  }

  public function buscarPrestamos()
  {
    return view ('audiovisual/buscarPrestamos');
  }

  public function buscarPrestamosTerminados()
  {
    return view ('audiovisual/buscarPrestamosTerminados');
  }

  public function listarPrestamos(Request $request)
  {
    $equipo = $request['equipo'];
    if($equipo == "Otro"){
      $equipo = $request['otro'];
    }

    $fecha = $request['fecha'];
    if($fecha=='' || $fecha==null)
    {
      $fecha='0000.0.0';
    }
    $prestamosAudiovisual = DB::select('CALL buscar_prestamos_audiovisuales(?,?,?)',[$request['nombreSolicitante'],$equipo,$fecha]);

    Session::put('prestamosAudiovisual',$prestamosAudiovisual);
    return view ('audiovisual/listarPrestamos',compact('prestamosAudiovisual'));
  }

  public function listarPrestamosTerminados(Request $request)
  {
    $equipo = $request['equipo'];
    if($equipo == "Otro"){
      $equipo = $request['otro'];
    }

    $fecha = $request['fecha'];
    if($fecha=='' || $fecha==null)
    {
      $fecha='0000.0.0';
    }
    $prestamosAudiovisualTerminados = DB::select('CALL buscar_prestamos_audiovisuales_terminados(?,?,?)',[$request['nombreSolicitante'],$equipo,$fecha]);
    Session::put('prestamosAudiovisualTerminados',$prestamosAudiovisualTerminados);
    return view ('audiovisual/listarPrestamosTerminados',compact('prestamosAudiovisualTerminados'));
  }

  public function generarReporte()
  {
    $prestamosAudiovisual = Session::get('prestamosAudiovisual');
    $pdf = PDF::loadView('audiovisual/pdfPrestamos',['prestamosAudiovisual'=>$prestamosAudiovisual]);
    return $pdf->download('prestamosAudiovisuales.pdf');
  }
  public function generarReporteTerminados()
  {
    $prestamosAudiovisual = Session::get('prestamosAudiovisualTerminados');
    $pdf = PDF::loadView('audiovisual/pdfPrestamosTerminados',['prestamosAudiovisual'=>$prestamosAudiovisual]);
    return $pdf->download('prestamosAudiovisualesTerminados.pdf');
  }

  public function eliminarPrestamo($id)
  {
    DB::update('update prestamo_audiovisual set terminado = 1 where id = ?',[$id]);
    $prestamoAudiovisual = \App\PrestamoAudiovisual::find($id);
    DB::update('update audiovisual set prestado = 0 where id = ?',[$prestamoAudiovisual->idaudiovisual]);
    return redirect ('/');
  }
}
