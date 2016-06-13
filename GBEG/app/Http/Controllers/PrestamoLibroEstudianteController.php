<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use View;
use Session;
use PDF;

class PrestamoLibroEstudianteController extends Controller
{



  public function show()
  {
    $libro = \App\PrestamoLibroEstudiante::find($id);
    return view ('libro/prestarEstudiante',['libro'=>$libro]);
  }

  public function mostrar($id)
  {
    $libro = \App\Libro::find($id);
    return view ('libro/prestarEstudiante',['libro'=>$libro]);
  }

  public function store(Request $request)
  {
    \App\PrestamoLibroEstudiante::create([
      'libro' => $request['id'],
      'fechaPrestamo' => $request['fecha'],
      'fechaVencimiento' => $request['vence'],
      'nombreSolicitante' => $request['nombre'],
      'correoSolicitante' => $request['correo'],
      'telefonoSolicitante' => $request['telefono'],
      'direccionSolicitante' => $request['direccion'],
      'seccionSolicitante' => $request['seccion'],
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

    $fecha = $request['fecha'];
    $vence = $request['vence'];
    if($fecha=='' || $fecha==null)
    {
      $fecha='0000.0.0';
    }
    if($vence=='' || $vence==null)
    {
      $vence='0000.0.0';
    }
    $prestamosLibroEstudiante = DB::select('CALL buscar_prestamos_libros_estudiante(?,?,?,?,?)',[$request['autor'],$request['titulo'],$fecha,$vence,$request['nombre']]);
    Session::put('prestamosLibroEstudiante',$prestamosLibroEstudiante);
    return view ('libro/listarPrestamosEstudiante',compact('prestamosLibroEstudiante'));
  }

  public function buscarPrestamosTerminados()
  {
    return view ('libro/buscarPrestamosEstudianteTerminados');
  }

  public function listarPrestamosTerminados(Request $request)
  {

    $fecha = $request['fecha'];
    $vence = $request['vence'];
    if($fecha=='' || $fecha==null)
    {
      $fecha='0000.0.0';
    }
    if($vence=='' || $vence==null)
    {
      $vence='0000.0.0';
    }
    $prestamosLibroEstudiante = DB::select('CALL buscar_prestamos_libros_estudiante(?,?,?,?,?)',[$request['autor'],$request['titulo'],$fecha,$vence,$request['nombre']]);
    Session::put('prestamosLibroEstudiante',$prestamosLibroEstudiante);
    return view ('libro/listarPrestamosEstudianteTerminados',compact('prestamosLibroEstudiante'));
  }

  public function generarReporte()
  {
    $prestamosLibroEstudiante = Session::get('prestamosLibroEstudiante');
    $pdf = PDF::loadView('libro/pdfPrestamosEstudiante',['prestamosLibroEstudiante'=>$prestamosLibroEstudiante]);
    return $pdf->download('prestamosLibroEstudiantes.pdf');
  }
  public function generarReporteTerminados()
  {
    $prestamosLibroEstudiante = Session::get('prestamosLibroEstudiante');
    $pdf = PDF::loadView('libro/pdfPrestamosEstudianteTerminados',['prestamosLibroEstudiante'=>$prestamosLibroEstudiante]);
    return $pdf->download('prestamosLibroEstudiantesTerminados.pdf');
  }

  public function eliminarPrestamo($id)
  {
    DB::update('update prestamo_libro_estudiante set terminado = 1 where id = ?',[$id]);
    $PrestamoLibroEstudiante= \App\PrestamoLibroEstudiante::find($id);
    DB::update('update libro set prestado = 0 where id = ?',[$PrestamoLibroEstudiante->libro]);
    return redirect ('/');
  }
}
