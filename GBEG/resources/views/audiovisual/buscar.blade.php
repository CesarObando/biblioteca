@extends('layouts.principal')
@section('content')
<div class="container">
  <h1>Buscar audiovisuales</h1>
  <form name="buscarAudiovisual" action="{!!URL::to("audiovisual/listar")!!}">
    <label for="equipo">Equipo:</label>
    <select name="equipo" id="equipo" class="form-control" onchange="especificarOtro()">
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
