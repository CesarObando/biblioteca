<?php

namespace gestorBiblioteca\Http\Controllers;

use Illuminate\Http\Request;
use gestorBiblioteca\Http\Requests;
use DB;

class SalaAudiovisualesController extends Controller
{
  public function show($id)
  {
    $salaAudiovisuales = \gestorBiblioteca\SalaAudiovisuales::find($id);
    return view ('salaAudiovisuales/prestar',['salaAudiovisuales'=>$salaAudiovisuales]);
  }

  public function store(Request $request)
  {
    \gestorBiblioteca\SalaAudiovisuales::create([
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

  public function listar(Request $request)
  {
    $fecha = $request['fecha'];
    $hora = $request['hora'];
    if($fecha=='' || $fecha==null)
    {
      $fecha='0000.0.0';
    }
    if($hora=='' || $hora==null)
    {
      $hora='00.00';
    }
    $prestamosSalaAudiovisuales = DB::select('CALL buscar_prestamos_salaAudiovisuales(?,?,?)',[$request['nombreSolicitante'],$request['tema'],$fecha,$hora]);
    return view ('salaAudiovisuales/listar',compact('prestamosSalaAudiovisuales'));
  
  }

  public function prestar()
  {
    return view ('salaAudiovisuales/prestar');
  }

  public function eliminar($id)
  {

  }
}
