<?php

namespace gestorBiblioteca\Http\Controllers;

use Illuminate\Http\Request;

use gestorBiblioteca\Http\Requests;
use DB;

class PrestamoLibroEstudianteController extends Controller
{

  public function show()
  {
    $libro = \gestorBiblioteca\PrestamoLibroEstudiante::find($id);
    return view ('libro/prestarEstudiante',['libro'=>$libro]);
  }

  public function mostrar($id)
  {
    $libro = \gestorBiblioteca\Libro::find($id);
    return view ('libro/prestarEstudiante',['libro'=>$libro]);
  }

  public function store(Request $request)
  {
    \gestorBiblioteca\PrestamoLibroEstudiante::create([
      'libro' => $request['id'],
      'fechaPrestamo' => $request['fechaPrestamo'],
      'fechaVencimiento' => $request['fechaVencimientoa'],
      'nombreSolicitante' => $request['nombreSolicitante'],
      'correoSolicitante' => $request['correoSolicitante'],
      'telefonoSolicitante' => $request['telefonoSolicitante'],
      'direccionSolicitante' => $request['direccionSolicitante'],
      'seccionSolicitante' => $request['seccionSolicitante'],
    ]);
    DB::update('update libro set prestado = 1 where id = ?',[$request['id']]);
    return redirect ('/');
  }

  public function buscarPrestamos()
  {
    return view ('libro/buscarPrestamosEstudiante');
  }

  public function listarPrestamos(Request $request)
  {

    $prestamosLibroEstudiante = \gestorBiblioteca\PrestamoLibroEstudiante::where('nombreSolicitante', 'like', '%'.$request['nombreSolicitante'].'%')
                                                               -> where('fecha', '=', $request['fecha'])
                                                               -> where ('terminado','=', 0)
                                                               -> get();
    return view ('libro/listarPrestamosEstudiante',compact('prestamosLibroEstudiante'));
  }

  public function eliminarPrestamo($id)
  {
    DB::update('update prestamo_libro_estudiante set terminado = 1 where id = ?',[$id]);
    $PrestamoLibroEstudiante= \gestorBiblioteca\PrestamoLibroEstudiante::find($id);
    DB::update('update libro set prestado = 0 where id = ?',[$PrestamoLibroEstudiante->libro]);
    return redirect ('/');
  }
}
