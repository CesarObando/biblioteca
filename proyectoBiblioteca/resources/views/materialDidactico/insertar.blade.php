@extends('layouts.principal')
@section('content')
<div class="container">
            <div class="text-center">
                <h3 class="h3">Dirección Regional de Enseñanza Cartago</h3>
                <h3 class="h3">Red de Alcance Bibliotecólogos Escolares Cartago</h3>
                <h2 class="h2">Escuela Fray José Antonio de Liendo y Goicoechea</h2>
                <h2 class="h2">Biblioteca Omar Flores</h2>
            </div>
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
                <label for="otro" id="l_otro" style="visibility: hidden">Otro:</label>
                <input type="text" class="form-control" name="otro" id="otro" style="visibility: hidden">
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
                function especificarOtro() {
                    opcion = document.getElementById("equipo");
                    if (opcion.value === "6") {
                        document.getElementById("l_otro").setAttribute("style", "visibility: visible");
                        document.getElementById("otro").setAttribute("style", "visibility: visible");
                    }else{
                        document.getElementById("l_otro").setAttribute("style","visibility: hidden");
                        document.getElementById("otro").setAttribute("style","visibility: hidden");
                    }
                }
            </script>

        </div>
@stop
