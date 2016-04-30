<?php

namespace gestorBiblioteca\Http\Controllers;

use Illuminate\Http\Request;

use gestorBiblioteca\Http\Requests;

class SalaAudiovisualesController extends Controller
{
  public function buscarPrestamos()
  {
    return view ('salaAudiovisuales/buscarPrestamos');
  }
  public function listar()
  {
    return view ('salaAudiovisuales/listar');
  }
  public function prestar()
  {
    return view ('salaAudiovisuales/prestar');
  }
}
