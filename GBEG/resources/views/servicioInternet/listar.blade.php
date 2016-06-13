@extends('layouts.principal')
@section('content')
<div class="table-responsive container">
  <br>
  <br>
  <h1>Préstamos del servicio de Internet</h1>
  <br>
  <form>
    <table class="table table-condensed table-hover table-bordered table-responsive">
      <thead>
        <tr>
          <th>Nombre del solicitante</th>
          <th>Sección</th>
          <th>Tema</th>
          <th>Fecha</th>
          <th>Hora de entrada</th>
          <th>Hora de salida</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($prestamosInternet as $prestamoInternet)
        <tr>
          <td>{{$prestamoInternet->nombreSolicitante}}</td>
          <td>{{$prestamoInternet->seccion}}</td>
          <td>{{$prestamoInternet->tema}}</td>
          <td>{{$prestamoInternet->fecha}}</td>
          <td>{{$prestamoInternet->horaEntrada}}</td>
          <td>{{$prestamoInternet->horaSalida}}</td>
          <td>{!!link_to_action('ServicioInternetController@terminarPrestamo', $title = 'Terminar', $parameters = $prestamoInternet->id, $attributes = ['class'=>'btn-danger btn-sm'])!!} </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </form>
  {!!link_to_action('ServicioInternetController@generarReporte', $title = 'Generar Reporte', $parameters = null, $attributes = ['class'=>'btn-success btn-lg'])!!}
  <br>
  <br>

</div>
@stop
