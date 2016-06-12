@extends('layouts.principal')
@section('content')
<div class="container">
  <h1>Buscar libros</h1>
  <br>
  <form name="buscarLibro" action="{!!URL::to("libro/listar")!!}">
    <label for="autor">Autor:</label>
    <input type="text" class="form-control" name="autor">
    <br>
    <label for="titulo">Título:</label>
    <input type="text" class="form-control" name="titulo">
    <br>
    <label for="editorial">Editorial:</label>
    <input type="text" class="form-control" name="editorial">
    <br>
    <hr>
    <input type="submit" name="buscarLibro" value="Buscar" class="btn-success btn-lg">
    <br><br>
  </form>
</div>
@stop
