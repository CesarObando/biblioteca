@extends('layouts.principal')
@section('content')
<div class="container">
  <h1>Buscar materiales didacticos</h1>
  <form name="buscarDidactico" action="{!!URL::to("materialDidactico/listar")!!}">
    <label for="equipo">Equipo:</label>
    <select name="equipo" id="equipo" class="form-control" onchange="especificarOtro()">
      <option value="">Seleccione el equipo</option>
      <option value="Mapa">Mapa</option>
      <option value="Juego">Juego</option>
      <option value="Abaco">Abaco</option>
      <option value="Lapices">Lapices y lapiceros</option>
      <option value="Laminas">Laminas educativas</option>
      <option value="Otro">Otro</option>
    </select>
    <input type="hidden" class="form-control" name="otro" id="otro" placeholder="Otro" value="">
    <label for="marca">Marca:</label>
    <input type="text" class="form-control" name="marca">
    <hr>
    <input type="submit" name="buscarAudiovisual" value="Buscar" class="btn-success btn-lg">
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
