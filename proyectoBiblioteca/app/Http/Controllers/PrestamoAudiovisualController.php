<?php

namespace gestorBiblioteca\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use gestorBiblioteca\Http\Requests;
use DB;

class PrestamoAudiovisualController extends Controller
{


  public function show($id)
  {
    $audiovisual = \gestorBiblioteca\Audiovisual::find($id);
    return view ('audiovisual/prestar',['audiovisual'=>$audiovisual]);
  }

  public function store(Request $request)
  {
    \gestorBiblioteca\PrestamoAudiovisual::create([
      'idaudiovisual' => $request['id'],
      'nombreSolicitante' => $request['nombreSolicitante'],
      'condicion' => $request['condicion'],
      'finesPrestamo' => $request['finesPrestamo'],
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
    $fecha = $request['fecha'];
    if($fecha=='' || $fecha==null)
    {
      $fecha='0000.0.0';
    }
    $prestamosAudiovisual = DB::select('CALL buscar_prestamos_audiovisuales(?,?,?)',[$request['nombreSolicitante'],$request['equipo'],$fecha]);
    global $prestamos;
    print_r($prestamos);
    $prestamos = $prestamosAudiovisual;
    //$pdf = PDF::loadView('audiovisual/pdfPrestamos',['prestamosAudiovisual'=>$prestamosAudiovisual]);
    //return $pdf->download('prestamosAudiovisuales.pdf');

    return view ('audiovisual/listarPrestamos',compact('prestamosAudiovisual'));
  }

  public function listarPrestamosTerminados(Request $request)
  {
    $fecha = $request['fecha'];
    if($fecha=='' || $fecha==null)
    {
      $fecha='0000.0.0';
    }
    $prestamosAudiovisualTerminados = DB::select('CALL buscar_prestamos_audiovisuales_terminados(?,?,?)',[$request['nombreSolicitante'],$request['equipo'],$fecha]);
    return view ('audiovisual/listarPrestamosTerminados',compact('prestamosAudiovisualTerminados'));
  }

  public function generarReporte()
  {
    global $prestamos;
    $pdf = PDF::loadView('audiovisual/pdfPrestamos',['prestamosAudiovisual'=>$prestamos]);
    return $pdf->download('prestamosAudiovisuales.pdf');
  }

  public function eliminarPrestamo($id)
  {
    DB::update('update prestamo_audiovisual set terminado = 1 where id = ?',[$id]);
    $prestamoAudiovisual = \gestorBiblioteca\PrestamoAudiovisual::find($id);
    DB::update('update audiovisual set prestado = 0 where id = ?',[$prestamoAudiovisual->idaudiovisual]);
    return redirect ('/');
  }
}
