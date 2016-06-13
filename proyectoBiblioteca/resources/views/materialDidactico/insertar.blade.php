@extends('layouts.principal')
@section('content')
<div class="container">
  <h1>Insertar Nuevo Material Didactico</h1>
  {!!Form::open(['route'=>'materialDidactico.store','method'=>'post'])!!}
  <label for="equipo">Material didactico:</label>
  <select name="equipo" id="equipo" class="form-control" required="" onchange="especificarOtro()">
    <option value="">Seleccione el material didactico</option>
    <option value="Mapa">Mapa</option>
    <option value="Juego">Juego</option>
    <option value="Abaco">Abaco</option>
    <option value="Lapices">Lapices y lapiceros</option>
    <option value="Laminas">Laminas educativas</option>
    <option value="Otro">Otro</option>
  </select>
  <input type="hidden" class="form-control" name="otro" id="otro" placeholder="Otro" value="">
  <label for="marca">Marca:</label>
  <input type="text" class="form-control" name="marca" required="">
  <label for="modelo">Especificación:</label>
  <input type="text" class="form-control" name="especificacion" required="">
  <label for="serie">Número de serie:</label>
  <input type="text" class="form-control" name="serie" required="">
  <hr>
  <input type="submit" name="insertarDidactico" value="Insertar" class="btn-success btn-lg">
  {!!Form::close()!!}
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
