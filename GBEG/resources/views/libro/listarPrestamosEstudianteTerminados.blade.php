@extends('layouts.principal')
@section('content')
<div class="table-responsive container">
  <br>
  <br>
  <h1>Préstamo de libros a estudiantes terminados</h1>
  <br>
  <form>
    <table class="table table-condensed table-hover table-bordered table-responsive">
      <thead>
        <tr>
          <th>Nombre del solicitante</th>
          <th>Correo Electrónico</th>
          <th>Teléfono</th>
          <th>Dirección</th>
          <th>Sección</th>
          <th>Número de Inscripción</th>
          <th>Título</th>
          <th>Fecha de préstamo</th>
          <th>Vence</th>
        </tr>
      </thead>
      @foreach($prestamosLibroEstudiante as $prestamo)
      <tbody>
        <tr>
          <td>{{$prestamo->nombreSolicitante}}</td>
          <td>{{$prestamo->correoSolicitante}}</td>
          <td>{{$prestamo->telefonoSolicitante}}</td>
          <td>{{$prestamo->direccionSolicitante}}</td>
          <td>{{$prestamo->seccionSolicitante}}</td>
          <td>{{$prestamo->numeroInscripcion}}</td>
          <td>{{$prestamo->titulo}}</td>
          <td>{{$prestamo->fechaPrestamo}}</td>
          <td>{{$prestamo->fechaVencimiento}}</td>
        </tr>

      </tbody>
      @endforeach
    </table>
  </form>
  {!!link_to_action('PrestamoLibroEstudianteController@generarReporteTerminados', $title = 'Generar Reporte', $parameters = null, $attributes = ['class'=>'btn-success btn-lg'])!!}
  <br>
  <br>

</div>
@stop
