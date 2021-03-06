@extends('layouts.principal')
@section('content')
<div class="table-responsive container">
  <br>
  <br>
  <h1>Audiovisuales</h1>
  <br>
  <form>
    <table class="table table-condensed table-hover table-bordered table-responsive">
      <thead>
        <tr>
          <th>Equipo</th>
          <th>Marca</th>
          <th>Modelo</th>
          <th>Serie</th>
          <th>Estado</th>
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
          @if($audiovisual->prestado===0)
          <td>Disponible</td>
          @else
          <td>Prestado</td>
          @endif

          <td>

            @if($audiovisual->prestado===1)
            {!!link_to_route('audiovisual.edit', $title = 'Editar', $parameters = $audiovisual->id, $attributes = ['class'=>'btn-warning btn-sm'])!!}
            {!!link_to_action('AudiovisualController@eliminar', $title = 'Eliminar', $parameters = $audiovisual->id, $attributes = ['class'=>'btn-danger btn-sm'])!!}
            @else
            {!!link_to_route('audiovisual.edit', $title = 'Editar', $parameters = $audiovisual->id, $attributes = ['class'=>'btn-warning btn-sm'])!!}
            {!!link_to_action('PrestamoAudiovisualController@show', $title = 'Prestar', $parameters = $audiovisual->id, $attributes = ['class'=>'btn-warning btn-sm'])!!}
            {!!link_to_action('AudiovisualController@eliminar', $title = 'Eliminar', $parameters = $audiovisual->id, $attributes = ['class'=>'btn-danger btn-sm'])!!}
            @endif


          </td>
        </tr>
      </tbody>
      @endforeach
    </table>
  </form>
  {!!link_to_action('AudiovisualController@generarReporte', $title = 'Generar Reporte', $parameters = null, $attributes = ['class'=>'btn-success btn-lg'])!!}
  <br>
  <br>
</div>
@stop
