<?php

namespace gestorBiblioteca\Http\Controllers;

use Illuminate\Http\Request;
use gestorBiblioteca\Http\Requests;
use gestorBiblioteca\Libro;
use DB;
use PDF;
use Session;

class LibroController extends Controller
{

  public function __construct()
   {
       // $this->middleware('auth');
      if(!Session::has('success')){
        $this->middleware('auth');
       }
   }

  public function buscar()
  {
    return view ('libro/buscar');
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
    $libros = \gestorBiblioteca\Libro::where('autor', 'like', '%'.$request['autor'].'%')
                                                               -> where('titulo', 'like', '%'.$request['titulo'].'%')
                                                               ->where('editorial', 'like', '%'.$request['editorial'].'%')
                                                               -> where ('descartado','=', 0)
                                                               -> get();
    Session::put('libros',$libros);
    return view ('libro/listar',compact('libros'));
  }

  public function generarReporte()
  {
    $libros = Session::get('libros');
    $pdf = PDF::loadView('libro/pdfLibros',['libros'=>$libros]);
    return $pdf->download('libros.pdf');
  }

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

}
