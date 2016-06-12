@extends('layouts.principal')
@section('content')
<div class="container">
  <h1>Buscar préstamos</h1>
  <br>
  <form name="buscarPrestamoDidacticoTerminado" action="{!!URL::to("materialDidactico/listarPrestamosTerminados")!!}">
    <label for="nombreSolicitante">Nombre del solicitante:</label>
    <input type="text" class="form-control" name="nombreSolicitante" id="signatura">
    <br>
    <label for="equipo">Equipo:</label>
    <select name="equipo" id="equipo" class="form-control">
      <option value="">Seleccione el material didactico</option>
      <option value="Mapa">Mapa</option>
      <option value="Juego">Juego</option>
      <option value="Abaco">Abaco</option>
      <option value="Lapices">Lapices y lapiceros</option>
      <option value="Laminas">Laminas educativas</option>
      <option value="6">Otro</option>
    </select>
    <br>
    <label for="fecha">Fecha:</label>
    <input type="date" class="form-control" name="fecha">
    <hr>
    <input type="submit" name="buscarPrestamoDidacticoTerminado" value="Buscar" class="btn-success btn-lg">
    <br><br>
  </form>
</div>
@stop