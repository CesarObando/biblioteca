@extends('layouts.principal')
@section('content')
<div class="container">
  <h1> Buscar préstamos a estudiantes terminados</h1>
  <br>
  <form name="buscarPrestamoLibroEstudianteTerminados" action="{!!URL::to("libro/listarPrestamosEstudianteTerminados")!!}">
    <label for="autor">Autor:</label>
    <input type="text" class="form-control" name="autor">
    <br>
    <label for="titulo">Título:</label>
    <input type="text" class="form-control" name="titulo">
    <br>
    <label for="fecha">Fecha de préstamo:</label>
    <input type="date" class="form-control" name="fecha">
    <br>
    <label for="vence">Fecha de vencimiento:</label>
    <input type="date" class="form-control" name="vence">
    <br>
    <label for="nombre">Nombre del solicitante:</label>
    <input type="text" class="form-control" name="nombre">
    <hr>
    <input type="submit" name="buscarPrestamoLibroTerminados" value="Buscar" class="btn-success btn-lg">
    <br><br>
  </form>
</div>
@stop
