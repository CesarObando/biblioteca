@extends('layouts.principal')
@section('content')
<div class="container">
  <h1>Buscar audiovisuales</h1>
  <form name="buscarAudiovisual" action="{!!URL::to("audiovisual/listar")!!}">
    <label for="equipo">Equipo:</label>
    <select name="equipo" id="equipo" class="form-control">
      <option value="">Seleccione el equipo</option>
      <option value="Computadora">Computadora</option>
      <option value="Pantalla">Pantalla</option>
      <option value="Retroproyector">Retroproyector</option>
      <option value="Video Beam">Video Beam</option>
      <option value=" Radiograbadora">Radiograbadora</option>
      <option value="Extensión eléctrica">Extensión eléctrica</option>
      <option value="Parlantes">Parlantes</option>
      <option value="Televisor">Televisor</option>
      <option value="Regleta">Regleta</option>
      <option value="10">Otro</option>
    </select>
    <label for="marca">Marca:</label>
    <input type="text" class="form-control" name="marca">
    <hr>
    <input type="submit" name="buscarAudiovisual" value="Buscar" class="btn-success btn-lg">
  </form>


</div>
@stop
