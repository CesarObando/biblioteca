<?php

namespace gestorBiblioteca\Http\Controllers;

use Illuminate\Http\Request;
use DB;
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
      DB::update('update material_complementario set prestado = 1 where id = ?',[$request['id']]);
    return redirect ('/');
  }
public function terminarPrestamo($id)
{
  DB::table('prestamo_material_complementario')
      ->where('id', $id)
      ->increment('terminado');
  return redirect('/');
}

public function eliminar($id)
{
  return redirect ('/');
}

}
/**
<!--<td>{{$prestamoMaterialDidactico->materialComplementario->nombre}}</td>
<td>{{$prestamoMaterialDidactico->materialComplementario->marca}}</td>
<td>{{$prestamoMaterialDidactico->materialComplementario->especificacion}}</td>
<td>{{$prestamoMaterialDidactico->materialComplementario->numeroSerie}}</td>


{!!link_to_action('MaterialDidacticoController@eliminar', $title = 'Eliminar', $parameters = $materialDidactico->id, $attributes = ['class'=>'btn-danger btn-sm'])!!}
                  @endif
<a href="listarPrestamoDidactico.html" class="btn-danger btn-sm">Terminar préstamo</a>
-->


**/
