<?php

namespace gestorBiblioteca\Http\Controllers;

use Illuminate\Http\Request;

use gestorBiblioteca\Http\Requests;

class ServicioInternetController extends Controller
{
  public function buscarPrestamos()
  {
    return view ('servicioInternet/buscarPrestamos');
  }
  public function listar()
  {
    return view ('servicioInternet/listar');
  }
  public function prestar()
  {
    return view ('servicioInternet/prestar');
  }
}
