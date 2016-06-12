@extends('layouts.principal')
@section('content')
<div class="container">
  <h1>Buscar materiales didacticos</h1>
  <form name="buscarDidactico" action="{!!URL::to("materialDidactico/listar")!!}">
    <label for="equipo">Equipo:</label>
    <select name="equipo" id="equipo" class="form-control">
      <option value="Mapa">Mapa</option>
      <option value="Juego">Juego</option>
      <option value="Abaco">Abaco</option>
      <option value="Lapices">Lapices y lapiceros</option>
      <option value="Laminas">Laminas educativas</option>
      <option value="Otro">Otro</option>
    </select>
    <label for="marca">Marca:</label>
    <input type="text" class="form-control" name="marca">
    <hr>
    <input type="submit" name="buscarAudiovisual" value="Buscar" class="btn-success btn-lg">
  </form>


</div>
@stop
