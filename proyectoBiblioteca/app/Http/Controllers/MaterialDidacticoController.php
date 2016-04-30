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
  public function listar()
  {
    return view ('materialDidactico/listar');
  }
  public function listarPrestamos()
  {
    return view ('materialDidactico/listarPrestamos');
  }
  public function prestar()
  {
    return view ('materialDidactico/prestar');
  }
}
