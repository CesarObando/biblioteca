<?php

namespace GBEG\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use PDF;

class PrestamoMaterialDidacticoController extends Controller
{



  public function prestar($id)
  {
    $materialDidactico = \App\MaterialDidactico::find($id);
    return view ('materialDidactico.prestar', ['materialDidactico'=>$materialDidactico]);
  }

  public function show($id)
  {
    $materialDidactico = \App\MaterialDidactico::find($id);
    return view ('materialDidactico.prestar', ['materialDidactico'=>$materialDidactico]);
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
    \App\PrestamoMaterialDidactico::create([
      'materialComplementario' => $request['id'],
      'nombreSolicitante' => $request['nombreSolicitante'],
      'condicion' => $condicion,
      'finesPrestamo' => $finesPrestamo,
      'fecha' => $request['fecha'],
      'hora' => $request['hora'],
    ]);
    DB::update('update material_complementario set prestado = 1 where id = ?',[$request['id']]);
    return redirect ('/');
  }

  public function terminarPrestamo($id)
  {
    DB::table('prestamo_material_complementario')
    ->where('id', $id)
    ->increment('terminado');
    return redirect('/');
  }

  public function buscarPrestamos()
  {
    return view ('materialDidactico/buscarPrestamos');
  }

  public function buscarPrestamosTerminados()
  {
    return view ('materialDidactico/buscarPrestamosTerminados');
  }

  public function listarPrestamos(Request $request)
  {
    $fecha = $request['fecha'];
    if($fecha=='' || $fecha==null)
    {
      $fecha='0000.0.0';
    }
    $prestamosMaterialDidactico = DB::select('CALL buscar_prestamos_materiales_didacticos(?,?,?)',[$request['nombreSolicitante'],$request['equipo'],$fecha]);
    Session::put('prestamosMaterialDidactico',$prestamosMaterialDidactico);
    return view ('materialDidactico/listarPrestamos', compact('prestamosMaterialDidactico'));
  }

  public function listarPrestamosTerminados(Request $request)
  {
    $fecha = $request['fecha'];
    if($fecha=='' || $fecha==null)
    {
      $fecha='0000.0.0';
    }
    $prestamosMaterialDidactico = DB::select('CALL buscar_prestamos_materiales_didacticos_terminados(?,?,?)',[$request['nombreSolicitante'],$request['equipo'],$fecha]);
    Session::put('prestamosMaterialDidactico',$prestamosMaterialDidactico);
    return view ('materialDidactico/listarPrestamosTerminados', compact('prestamosMaterialDidactico'));
  }

  public function generarReporteTerminados()
  {
    $prestamosMaterialDidactico = Session::get('prestamosMaterialDidactico');
    $pdf = PDF::loadView('materialDidactico/pdfPrestamosMaterialesTerminados',['prestamosMaterialDidactico'=>$prestamosMaterialDidactico]);
    return $pdf->download('prestamosMaterialesDidacticosTerminados.pdf');
  }

}
