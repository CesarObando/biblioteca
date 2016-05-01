<?php

namespace gestorBiblioteca\Http\Controllers;

use Illuminate\Http\Request;

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
                                                               -> get();
    return view ('materialDidactico/listar', compact('materialesDidacticos'));
  }
  public function listarPrestamos()
  {
    return view ('materialDidactico/listarPrestamos');
  }
  public function prestar($id)
  {
    $materialDidactico = \gestorBiblioteca\MaterialDidactico::find($id);
    return view ('materialDidactico.prestar', ['materialDidactico'=>$materialDidactico]);
  }

  public function store_prestamo()
  {
    return view ('index');
  }
}
