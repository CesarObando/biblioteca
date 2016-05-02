<?php

namespace gestorBiblioteca\Http\Controllers;

use Illuminate\Http\Request;

use gestorBiblioteca\Http\Requests;

class PrestamoMaterialDidacticoController extends Controller
{
  public function prestar($id)
  {
    $materialDidactico = \gestorBiblioteca\MaterialDidactico::find($id);
    return view ('materialDidactico.prestar', ['materialDidactico'=>$materialDidactico]);
  }

  public function show($id)
  {
    $materialDidactico = \gestorBiblioteca\MaterialDidactico::find($id);
    return view ('materialDidactico.prestar', ['materialDidactico'=>$materialDidactico]);
  }

  public function store(Request $request)
  {
      \gestorBiblioteca\PrestamoMaterialDidactico::create([
        'materialComplementario' => $request['id'],
        'nombreSolicitante' => $request['nombreSolicitante'],
        'condicion' => $request['condicion'],
        'finesPrestamo' => $request['finesPrestamo'],
        'fecha' => $request['fecha'],
        'hora' => $request['hora'],
      ]);
    return redirect ('/');
  }
}
