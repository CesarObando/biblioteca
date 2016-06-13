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
    <select name="equipo" id="equipo" class="form-control" onchange="especificarOtro()">
      <option value="">Seleccione el material didactico</option>
      <option value="Mapa">Mapa</option>
      <option value="Juego">Juego</option>
      <option value="Abaco">Abaco</option>
      <option value="Lapices">Lapices y lapiceros</option>
      <option value="Laminas">Laminas educativas</option>
      <option value="Otro">Otro</option>
    </select>
    <input type="hidden" class="form-control" name="otro" id="otro" placeholder="Otro" value="">
    <br>
    <label for="fecha">Fecha:</label>
    <input type="date" class="form-control" name="fecha">
    <hr>
    <input type="submit" name="buscarPrestamoDidacticoTerminado" value="Buscar" class="btn-success btn-lg">
    <br><br>
  </form>
  <script>
  function especificarOtro(){
    opcion = document.getElementById("equipo");
    if(opcion.value === "Otro"){
      document.getElementById("otro").setAttribute("type","text");
    }else{
      document.getElementById("otro").setAttribute("type","hidden");
    }
  }
  </script>
</div>
@stop
