<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use PDF;
use Session;

class MaterialDidacticoController extends Controller
{



  public function buscar()
  {
    return view ('materialDidactico/buscar');
  }

  public function editar()
  {
    return view ('materialDidactico/editar');
  }
  public function insertar()
  {
    return view ('materialDidactico/insertar');
  }

  public function store(Request $request)
  {
    $equipo = $request['equipo'];
  if($equipo == "Otro"){
    $equipo = $request['otro'];
  }
    \App\MaterialDidactico::create([
      'nombre' => $equipo,
      'marca' => $request['marca'],
      'especificacion' => $request['especificacion'],
      'numeroSerie' => $request['serie']
    ]);
    return view ('index');
  }

  public function listar(Request $request)
  {
    $materialesDidacticos = \App\MaterialDidactico::where('nombre', 'like', '%'.$request['equipo'].'%')
                                                               -> where('marca', 'like', '%'.$request['marca'].'%')
                                                               -> where('descartado', '=', 0)
                                                               -> get();
    Session::put('materialesDidacticos',$materialesDidacticos);
    return view ('materialDidactico/listar', compact('materialesDidacticos'));
  }

  public function generarReporte()
  {
    $materialesDidacticos = Session::get('materialesDidacticos');
    $pdf = PDF::loadView('materialDidactico/pdfMateriales',['materialesDidacticos'=>$materialesDidacticos]);
    return $pdf->download('materialesDidacticos.pdf');
  }

  public function prestar($id)
  {
    $materialDidactico = \App\MaterialDidactico::find($id);
    return view ('materialDidactico.prestar', ['materialDidactico'=>$materialDidactico]);
  }

  public function storePrestamo($id)
  {
    return view ('index');
  }

  public function eliminar($id)
  {
    DB::table('material_complementario')
        ->where('id', $id)
        ->decrement('prestado');
    DB::table('material_complementario')
        ->where('id', $id)
        ->increment('descartado');

    return redirect ('/');
  }

  public function edit($id)
  {
    $materialDidactico = \App\MaterialDidactico::find($id);
    return view ('materialDidactico/editar',['materialDidactico'=>$materialDidactico]);
  }

  public function update($id, Request $request)
  {
    $materialDidactico = \App\MaterialDidactico::find($id);
    $materialDidactico->fill($request->all());
    $materialDidactico->save();
    return redirect ('/');
  }

}
