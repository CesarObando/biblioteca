<?php

namespace gestorBiblioteca\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use gestorBiblioteca\Http\Requests;

class MaterialDidacticoController extends Controller
{
  public function buscar()
  {
    return view ('materialDidactico/buscar');
  }
  public function buscarPrestamos()
  {
    return view ('materialDidactico/buscarPrestamos');
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
    \gestorBiblioteca\MaterialDidactico::create([
      'nombre' => $request['equipo'],
      'marca' => $request['marca'],
      'especificacion' => $request['especificacion'],
      'numeroSerie' => $request['serie']
    ]);
    return view ('index');
  }

  public function listar(Request $request)
  {
    $materialesDidacticos = \gestorBiblioteca\MaterialDidactico::where('nombre', $request['equipo'])
                                                               -> where('marca', 'like', '%'.$request['marca'].'%')
                                                               -> where('descartado', '=', 0)
                                                               -> get();
    return view ('materialDidactico/listar', compact('materialesDidacticos'));
  }
  public function listarPrestamos(Request $request)
  {
    //$prestamosMaterialDidactico = \gestorBiblioteca\PrestamoMaterialDidactico::join('material_didactico', 'materialComplementario.id', '=', 'material_complemetario.id')
    $prestamosMaterialDidactico = \gestorBiblioteca\PrestamoMaterialDidactico::where('nombreSolicitante', 'like', '%'.$request['nombreSolicitante'].'%')
                                                               //-> where('material_complementario.nombre', $request['equipo'])
                                                               //->where('fecha', '=', $request['fecha'])
                                                               ->where('terminado','=',0)
                                                               -> get();
    return view ('materialDidactico/listarPrestamos', compact('prestamosMaterialDidactico'));
  }
  public function prestar($id)
  {
    $materialDidactico = \gestorBiblioteca\MaterialDidactico::find($id);
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
    $materialDidactico = \gestorBiblioteca\MaterialDidactico::find($id);
    return view ('materialDidactico/editar',['materialDidactico'=>$materialDidactico]);
  }

  public function update($id, Request $request)
  {
    $materialDidactico = \gestorBiblioteca\MaterialDidactico::find($id);
    $materialDidactico->fill($request->all());
    $materialDidactico->save();
    return redirect ('/');
  }

}
