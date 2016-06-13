@extends('layouts.principal')
@section('content')
<div class="container">
  <h1>Modificar Libro</h1>
  <br>
  {!!Form::model($libro,['route'=>['libro.update',$libro->id],'method'=>'PUT'])!!}
  <form name="modificarLibro" action="listarLibros.html">
    <label for="signatura">Signatura:</label>
    <input type="text" class="form-control" name="signatura" required="" value= {{$libro->signatura}}>
    <br>
    <label for="numeroInscripcion">Número de Inscripción:</label>
    <input type="number" class="form-control" name="numeroInscripcion" required="" value= {{$libro->numeroInscripcion}}>
    <br>
    <label for="fecha">Fecha:</label>
    <input type="date" class="form-control" name="fecha" required="" value= {{$libro->fecha}}>
    <br>
    <label for="autor">Autor:</label>
    <input type="text" class="form-control" name="autor" required="" value= {{$libro->autor}}>
    <br>
    <label for="titulo">Título:</label>
    <input type="text" class="form-control" name="titulo" required="" value= {{$libro->titulo}}>
    <br>
    <label for="edicion">Edición:</label>
    <input type="text" class="form-control" name="edicion" required="" value= {{$libro->edicion}}>
    <br>
    <label for="lugar">Lugar:</label>
    <input type="text" class="form-control" name="lugar" required="" value= {{$libro->lugar}}>
    <br>
    <label for="editorial">Editorial:</label>
    <input type="text" class="form-control" name="editorial" required="" value= {{$libro->editorial}}>
    <br>
    <label for="ano">Año:</label>
    <input type="int" class="form-control" name="ano" required="" value= {{$libro->ano}}>
    <br>
    <label for="observaciones">Observaciones:</label>
    <input type="int" class="form-control" name="observaciones" required="" value= {{$libro->observaciones}}>
    <hr>
    <input type="submit" name="modificarLibro" value="Modificar" class="btn-warning btn-lg">
    {!!Form::close()!!}
    <br><br>
  </form>
</div>
@stop
