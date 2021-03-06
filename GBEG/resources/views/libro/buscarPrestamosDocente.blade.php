@extends('layouts.principal')
@section('content')
<div class="container">
  <h1>Buscar préstamos a docentes</h1>
  <br>
  <form name="buscarPrestamoLibroProfesor" action="{!!URL::to("libro/listarPrestamosDocente")!!}">
    <label for="nombreDocente">nombreDocente:</label>
    <input type="text" class="form-control" name="nombreDocente" id="signatura">
    <br>
    <label for="seccion">Sección:</label>
    <input type="text" class="form-control" name="seccion">
    <br>
    <label for="fecha">Fecha:</label>
    <input type="date" class="form-control" name="fecha">
    <br>
    <label for="materia">Materia:</label>
    <select name="materia" id="materia" class="form-control">
      <option value="">Seleccione la materia del libro</option>
      <option value="1">Matemáticas</option>
      <option value="2">Estudios Sociales</option>
      <option value="3">Ciencias</option>
      <option value="4">Español</option>
      <option value="5">Programas de estudio</option>
    </select>
    <hr>
    <input type="submit" name="buscarPrestamoLibroProfesor" value="Buscar" class="btn-success btn-lg">
    <br><br>
  </form>
</div>
@stop
