@extends('layouts.principal')
@section('content')
<div class="table-responsive container">
  <br>
  <br>
  <h1>Libros</h1>
  <br>
  <form>
    <table class="table table-condensed table-hover table-bordered table-responsive">
      <thead>
        <tr>
          <th>Signatura</th>
          <th>No. de Inscripción</th>
          <th>Autor</th>
          <th>Título</th>
          <th>Edicón</th>
          <th>Fecha</th>
          <th>Lugar</th>
          <th>Editorial</th>
          <th>Año</th>
          <th>Observaciones</th>
          <th>Estado</th>
          <th>Acciones</th>
        </tr>
      </thead>
      @foreach($libros as $libro)
      <tbody>
        <tr>
          <td>{{$libro->signatura}}</td>
          <td>{{$libro->numeroInscripcion}}</td>
          <td>{{$libro->autor}}</td>
          <td>{{$libro->titulo}}</td>
          <td>{{$libro->edicion}}</td>
          <td>{{$libro->fecha}}</td>
          <td>{{$libro->lugar}}</td>
          <td>{{$libro->editorial}}</td>
          <td>{{$libro->ano}}</td>
          <td>{{$libro->observaciones}}</td>
          @if($libro->prestado===0)
          <td>Disponible</td>
          @else
          <td>Prestado</td>
          @endif
          <td>
            @if($libro->prestado===1)
            {!!link_to_route('libro.edit', $title = 'Editar', $parameters = $libro->id, $attributes = ['class'=>'btn-warning btn-sm'])!!}
            {!!link_to_action('LibroController@eliminar', $title = 'Eliminar', $parameters = $libro->id, $attributes = ['class'=>'btn-danger btn-sm'])!!}
            @else
            {!!link_to_route('libro.edit', $title = 'Editar', $parameters = $libro->id, $attributes = ['class'=>'btn-warning btn-sm'])!!}<hr>
            {!!link_to_action('PrestamoLibroDocenteController@mostrar', $title = 'Prestar Docente', $parameters = $libro->id, $attributes = ['class'=>'btn-warning btn-sm'])!!}<hr>
            {!!link_to_action('PrestamoLibroEstudianteController@mostrar', $title = 'Prestar Estudiante', $parameters = $libro->id, $attributes = ['class'=>'btn-warning btn-sm'])!!}<hr>
            {!!link_to_action('LibroController@eliminar', $title = 'Eliminar', $parameters = $libro->id, $attributes = ['class'=>'btn-danger btn-sm'])!!}
            @endif
          </td>
        </tr>
      </tbody>
      @endforeach
    </table>
  </form>
  {!!link_to_action('LibroController@generarReporte', $title = 'Generar Reporte', $parameters = null, $attributes = ['class'=>'btn-success btn-lg'])!!}
  <br>
  <br>

</div>

@stop
