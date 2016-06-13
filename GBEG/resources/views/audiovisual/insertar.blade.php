@extends('layouts.principal')
@section('content')
<div class="container">
  <h1>Insertar Nuevo Audiovisual</h1>

  {!!Form::open(['route'=>'audiovisual.store','method'=>'post'])!!}

                <label for="equipo">Equipo:</label>
                <select name="equipo" id="equipo" class="form-control" onchange="especificarOtro()" >

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
                <input type="text" class="form-control" name="marca" required="">
                <label for="modelo">Modelo:</label>
                <input type="text" class="form-control" name="modelo" required="">
                <label for="numeroSerie">Número de serie:</label>
                <input type="text" class="form-control" name="numeroSerie" required="">
                <hr>
                <input type="submit" name="insertarAudiovisual" value="Insertar" class="btn-success btn-lg" >
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


@stop
