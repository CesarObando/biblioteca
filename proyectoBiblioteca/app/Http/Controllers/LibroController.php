<?php

namespace gestorBiblioteca\Http\Controllers;

use Illuminate\Http\Request;

use gestorBiblioteca\Http\Requests;

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
  public function editar()
  {
    return view ('libro/editar');
  }
  public function insertar()
  {
    return view ('libro/insertar');
  }
  public function listar()
  {
    return view ('libro/listar');
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
