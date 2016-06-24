@extends('layouts.principal')
@section('content')
<div class="table-responsive container">
  <br>
  <br>
  <h1>Materiales Didácticos Eliminados</h1>
  <br>
  <form>
    <table class="table table-condensed table-hover table-bordered table-responsive">
      <thead>
        <tr>
          <th>Equipo</th>
          <th>Marca</th>
          <th>Especificación</th>
          <th>Numero de Serie</th>
          <th>Estado</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($materialesDidacticos as $materialDidactico)
        <tr>
          <td>{{$materialDidactico->nombre}}</td>
          <td>{{$materialDidactico->marca}}</td>
          <td>{{$materialDidactico->especificacion}}</td>
          <td>{{$materialDidactico->numeroSerie}}</td>

            @if($materialDidactico->descartado===0)
            <td>Disponible</td>
            @else
            <td>Descartado</td>
            @endif
            <td>
              {!!link_to_action('MaterialDidacticoController@recuperar', $title = 'Recuperar', $parameters = $materialDidactico->id, $attributes = ['class'=>'btn-warning btn-sm'])!!}
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </form>
    {!!link_to_action('MaterialDidacticoController@generarReporteEliminados', $title = 'Generar Reporte', $parameters = null, $attributes = ['class'=>'btn-success btn-lg'])!!}
    <br>
    <br>

  </div>
  @stop
