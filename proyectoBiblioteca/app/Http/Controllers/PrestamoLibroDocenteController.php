<?php

namespace gestorBiblioteca\Http\Controllers;

use Illuminate\Http\Request;

use gestorBiblioteca\Http\Requests;
use DB;
use View;
use Session;
use PDF;

class PrestamoLibroDocenteController extends Controller
{

  public function show()
  {
    $libro = \gestorBiblioteca\PrestamoLibroDocente::find($id);
    return view ('libro/prestarDocente',['libro'=>$libro]);
  }

  public function mostrar($id){
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
    $fecha = $request['fecha'];
    if($fecha=='' || $fecha==null)
    {
      $fecha='0000.0.0';
    }
    $prestamosLibroDocente = DB::select('CALL buscar_prestamos_libros_docente(?,?,?,?)',[$request['nombreDocente'],$request['seccion'],$fecha,$request['materia']]);
    Session::put('prestamosLibroDocente',$prestamosLibroDocente);
    return view ('libro/listarPrestamosDocente',compact('prestamosLibroDocente'));
  }

  public function buscarPrestamosTerminados()
  {
    return view ('libro/buscarPrestamosDocenteTerminados');
  }

  public function listarPrestamosTerminados(Request $request)
  {
    $fecha = $request['fecha'];
    if($fecha=='' || $fecha==null)
    {
      $fecha='0000.0.0';
    }
    $prestamosLibroDocente = DB::select('CALL buscar_prestamos_libros_docente_terminados(?,?,?,?)',[$request['nombreDocente'],$request['seccion'],$fecha,$request['materia']]);
    Session::put('prestamosLibroDocente',$prestamosLibroDocente);
    return view ('libro/listarPrestamosDocenteTerminados',compact('prestamosLibroDocente'));
  }

  public function generarReporte()
  {
    $prestamosLibroDocente = Session::get('prestamosLibroDocente');
    $pdf = PDF::loadView('libro/pdfPrestamosDocente',['prestamosLibroDocente'=>$prestamosLibroDocente]);
    return $pdf->download('prestamosLibroDocentes.pdf');
  }
  public function generarReporteTerminados()
  {
    $prestamosLibroDocente = Session::get('prestamosLibroDocente');
    $pdf = PDF::loadView('libro/pdfPrestamosDocenteTerminados',['prestamosLibroDocente'=>$prestamosLibroDocente]);
    return $pdf->download('prestamosLibroDocentesTerminados.pdf');
  }

  public function eliminarPrestamo($id)
  {
    DB::update('update prestamo_libro_docente set terminado = 1 where id = ?',[$id]);
    $prestamoLibroDocente = \gestorBiblioteca\PrestamoLibroDocente::find($id);
    DB::update('update libro set prestado = 0 where id = ?',[$prestamoLibroDocente->libro]);
    return redirect ('/');
  }
}
