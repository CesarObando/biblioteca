@extends('layouts.principal')
@section('content')
<div class="table-responsive container">
  <br>
  <br>
  <h1>Audiovisuales Eliminados</h1>
  <br>
  <form>
    <table class="table table-condensed table-hover table-bordered table-responsive">
      <thead>
        <tr>
          <th>Equipo</th>
          <th>Marca</th>
          <th>Modelo</th>
          <th>Serie</th>
          <th>Acciones</th>
        </tr>
      </thead>
      @foreach($audiovisuales as $audiovisual)
      <tbody>
        <tr>
          <td>{{$audiovisual->equipo}}</td>
          <td>{{$audiovisual->marca}}</td>
          <td>{{$audiovisual->modelo}}</td>
          <td>{{$audiovisual->numeroSerie}}</td>
          <td>{!!link_to_action('AudiovisualController@recuperar', $title = 'Recuperar', $parameters = $audiovisual->id, $attributes = ['class'=>'btn-warning btn-sm'])!!}</td>
        </tr>
      </tbody>
      @endforeach
    </table>
  </form>
  {!!link_to_action('AudiovisualController@generarReporteEliminados', $title = 'Generar Reporte', $parameters = null, $attributes = ['class'=>'btn-success btn-lg'])!!}
  <br>
  <br>
</div>
@stop
