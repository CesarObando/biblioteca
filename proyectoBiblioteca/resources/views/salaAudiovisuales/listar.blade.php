@extends('layouts.principal')
@section('content')
<div class="table-responsive container">
  <br>
  <br>
  <h1>Préstamos de la sala de audiovisuales</h1>
  <br>
  <form>
    <table class="table table-condensed table-hover table-bordered table-responsive">
      <thead>
        <tr>
          <th>Nombre del solicitante</th>
          <th>Tema</th>
          <th>Fecha</th>
          <th>Hora de entrada</th>
          <th>Hora de salida</th>
          <th>Acciones</th>
        </tr>
      </thead>
      @foreach($prestamosSalaAudiovisuales as $prestamoSalaAudiovisual)
      <tbody>
        <tr>
          <td>{{$prestamoSalaAudiovisual->nombreSolicitante}}</td>
          <td>{{$prestamoSalaAudiovisual->tema}}</td>
          <td>{{$prestamoSalaAudiovisual->fecha}}</td>
          <td>{{$prestamoSalaAudiovisual->horaEntrada}}</td>
          <td>{{$prestamoSalaAudiovisual->horaSalida}}</td>
          <td>{!!link_to_action('SalaAudiovisualesController@terminarPrestamo', $title = 'Terminar', $parameters = $prestamoSalaAudiovisual->id, $attributes = ['class'=>'btn-danger btn-sm'])!!}</td>
        </tr>
      </tbody>
      @endforeach
    </table>
  </form>
  {!!link_to_action('SalaAudiovisualesController@generarReporte', $title = 'Generar Reporte', $parameters = null, $attributes = ['class'=>'btn-success btn-lg'])!!}
  <br>
  <br>

</div>
@stop
