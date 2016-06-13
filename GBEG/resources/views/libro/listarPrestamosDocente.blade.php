@extends('layouts.principal')
@section('content')
<div class="table-responsive container">
  <br>
  <br>
  <h1>Préstamo de libros a docentes</h1>
  <br>
  <form>
    <table class="table table-condensed table-hover table-bordered table-responsive">
      <thead>
        <tr>
          <th>Nombre del docente</th>
          <th>Sección</th>
          <th>Materia</th>
          <th>Número de inscripción</th>
          <th>Título</th>
          <th>Fecha de préstamo</th>
          <th>Acciones</th>
        </tr>
      </thead>
      @foreach($prestamosLibroDocente as $prestamo)
      <tbody>
        <tr>
          <td>{{$prestamo->nombreSolicitante}}</td>
          <td>{{$prestamo->seccion}}</td>
          <td>{{$prestamo->materia}}</td>
          <td>{{$prestamo->numeroInscripcion}}</td>
          <td>{{$prestamo->titulo}}</td>
          <td>{{$prestamo->fecha}}</td>
          <td>{!!link_to_action('PrestamoLibroDocenteController@eliminarPrestamo', $title = 'Eliminar', $parameters = $prestamo->id, $attributes = ['class'=>'btn-danger btn-sm'])!!}</td>
        </tr>

      </tbody>
      @endforeach
    </table>
  </form>
  {!!link_to_action('PrestamoLibroDocenteController@generarReporte', $title = 'Generar Reporte', $parameters = null, $attributes = ['class'=>'btn-success btn-lg'])!!}
  <br>
  <br>

</div>
@stop
