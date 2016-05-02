<?php

namespace gestorBiblioteca\Http\Controllers;

use Illuminate\Http\Request;
use gestorBiblioteca\Http\Requests;
use gestorBiblioteca\Libro;
use DB;

class LibroController extends Controller
{
  public function buscar()
  {
    return view ('libro/buscar');
  }
  public function buscarPrestamosDocente()
  {
    return view ('libro/buscarPrestamosDocente');
  }
  public function buscarPrestamosEstudiante()
  {
    return view ('libro/buscarPrestamosEstudiante');
  }
  public function edit($id){
    $libro = \gestorBiblioteca\Libro::find($id);
    return view ('libro/editar',['libro'=>$libro]);
  }
  public function insertar()
  {
    return view ('libro/insertar');
  }
  public function listar(Request $request)
  {
    $libros = \gestorBiblioteca\Libro::where('numeroInscripcion', 'like', '%'.$request['numeroInscripcion'].'%')
                                                               -> where('titulo', 'like', '%'.$request['titulo'].'%')
                                                               -> where ('descartado','=', 0)
                                                               -> get();
    return view ('libro/listar',compact('libros'));
  }

  /*public function index(){
    $libro = \gestorBiblioteca\Libro::All();
    return view ('libro/listar',compact('libros'));
  }*/

  public function show(){
    return view ('libro/insertar');
  }

  public function store(Request $request)
  {
    \gestorBiblioteca\Libro::create([
      'numeroInscripcion' => $request['numeroInscripcion'],
      'signatura' => $request['signatura'],
      'fecha' => $request['fecha'],
      'autor' => $request['autor'],
      'titulo' => $request['titulo'],
      'edicion' => $request['edicion'],
      'lugar' => $request['lugar'],
      'editorial' => $request['editorial'],
      'ano' => $request['ano'],
      'observaciones' => $request['observaciones']

    ]);
    return view ('index');
  }

  public function update($id, Request $request)
  {
    $libro = \gestorBiblioteca\Libro::find($id);
    $libro->fill($request->all());
    $libro->save();
    return view ('index');
  }

  public function eliminar($id)
  {
    DB::table('libro')
        ->where('id', $id)
        ->decrement('prestado');
    DB::table('libro')
        ->where('id', $id)
        ->increment('descartado');

    return redirect ('/');
  }

  public function listarPrestamosDocente()
  {
    return view ('libro/listarPrestamosDocente');
  }
  public function listarPrestamosEstudiante()
  {
    return view ('libro/listarPrestamosEstudiante');
  }
  public function prestarDocente()
  {
    return view ('libro/prestarDocente');
  }
  public function prestarEstudiante()
  {
    return view ('libro/prestarEstudiante');
  }
}
