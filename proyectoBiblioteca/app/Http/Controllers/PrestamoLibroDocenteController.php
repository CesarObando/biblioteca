<?php

namespace gestorBiblioteca\Http\Controllers;

use Illuminate\Http\Request;

use gestorBiblioteca\Http\Requests;
use DB;
use gestorBiblioteca\PrestamoLibroDocente;

class PrestamoLibroDocenteController extends Controller
{

  public function show($id)
  {
    $libro = \gestorBiblioteca\Libro::find($id);
    return view ('libro/prestarDocente',['libro'=>$libro]);
  }

  public function store(Request $request)
  {
    \gestorBiblioteca\PrestamoLibroDocente::create([
      'libro' => $request['id'],
      'nombreSolicitante' => $request['nombreSolicitante'],
      'fecha' => $request['fecha'],
      'materia' => $request['materia'],
      'seccion' => $request['seccion'],
      'cantidadEstudiantes' => $request['cantidadEstudiantes'],
      'cantidadEstudiantesAdecuacion' => $request['cantidadEstudiantesAdecuacion'],
    ]);
    DB::update('update libro set prestado = 1 where id = ?',[$request['id']]);
    return redirect ('/');
  }

  public function buscarPrestamos()
  {
    return view ('libro/buscarPrestamosDocente');
  }

  public function listarPrestamos(Request $request)
  {

    $prestamosLibroDocente = \gestorBiblioteca\PrestamoLibroDocente::where('nombreSolicitante', 'like', '%'.$request['nombreSolicitante'].'%')
                                                               -> where('fecha', '=', $request['fecha'])
                                                               -> where ('terminado','=', 0)
                                                               -> get();
    return view ('libro/listarPrestamosDocente',compact('prestamosLibroDocente'));
  }

  public function eliminarPrestamo($id)
  {
    DB::update('update prestamo_libro_docente set terminado = 1 where id = ?',[$id]);
    $prestamoLibroDocente = \gestorBiblioteca\PrestamoLibroDocente::find($id);
    DB::update('update libro set prestado = 0 where id = ?',[$prestamoLibroDocente->libro]);
    return redirect ('/');
  }
}
