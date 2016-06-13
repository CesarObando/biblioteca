@extends('layouts.principal')
@section('content')
<div class="container">
  <h1>Préstamo de Libro</h1>
  <br>
  {!!Form::model($libro,['route'=>['PrestamoLibroEstudiante.store',$libro->id],'method'=>'post'])!!}

  <div class="form-group">
    {!!Form::hidden('id',null,['class'=>'form-control'])!!}
    {!!Form::label('titulo','Libro:')!!}
    {!!Form::text('titulo',null,['class'=>'form-control','disabled'=>''])!!}
  </div>
  <label for="signatura">Signatura:</label>
  <input type="text" class="form-control" name="signatura" id="signatura" disabled="" value= {{$libro->signatura}}>
  <br>
  <label for="numeroInscripcion">Número de Inscripción:</label>
  <input type="number" class="form-control" name="numeroInscripcion" disabled="" value= {{$libro->numeroInscripcion}}>
  <br>
  <label for="autor">Autor:</label>
  <input type="text" class="form-control" name="autor" disabled="" value= {{$libro->autor}}>
  <br>
  <label for="fecha">Fecha:</label>
  <input type="date" class="form-control" name="fecha" required="">
  <br>
  <label for="vence">Vence:</label>
  <input type="date" class="form-control" name="vence" required="">
  <br>
  <label for="nombre">Nombre:</label>
  <input type="text" class="form-control" name="nombre" required="">
  <br>
  <label for="correo">Correo electrónico:</label>
  <input type="email" class="form-control" name="correo" required="">
  <br>
  <label for="telefono">Teléfono:</label>
  <input type="tel" class="form-control" name="telefono" required="">
  <br>
  <label for="direccion">Dirección:</label>
  <input type="text" class="form-control" name="direccion" required="">
  <br>
  <label for="seccion">Sección:</label>
  <input type="text" class="form-control" name="seccion" required="">
  <hr>
  <input type="submit" name="prestamoLibroEstudiante" value="Préstamo" class="btn-success btn-lg">
  {!!Form::close()!!}
  <br><br>
</div>
@stop
