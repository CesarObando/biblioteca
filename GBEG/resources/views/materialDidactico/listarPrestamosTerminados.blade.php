@extends('layouts.principal')
@section('content')
<div class="table-responsive container">
  <br>
  <br>
  <h1>Prestamos Material didactico</h1>
  <br>
  <form>
    <table class="table table-condensed table-hover table-bordered table-responsive">
      <thead>
        <tr>
          <th>Nombre del solicitante</th>
          <th>Equipo</th>
          <th>Marca</th>
          <th>Especificación</th>
          <th>Serie</th>
          <th>Fecha de préstamo</th>
        </tr>
      </thead>
      <tbody>
        @foreach($prestamosMaterialDidactico as $prestamoMaterialDidactico)
        <tr>
          <td>{{$prestamoMaterialDidactico->nombreSolicitante}}</td>
          <td>{{$prestamoMaterialDidactico->nombre}}</td>
          <td>{{$prestamoMaterialDidactico->marca}}</td>
          <td>{{$prestamoMaterialDidactico->especificacion}}</td>
          <td>{{$prestamoMaterialDidactico->numeroSerie}}</td>
          <td>{{$prestamoMaterialDidactico->fecha}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </form>
  {!!link_to_action('PrestamoMaterialDidacticoController@generarReporteTerminados', $title = 'Generar Reporte', $parameters = null, $attributes = ['class'=>'btn-success btn-lg'])!!}
  <br>
  <br>

</div>
@stop
