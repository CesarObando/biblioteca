@extends('layouts.principal')
@section('content')
<div class="container">
            <div class="text-center">
                <h3 class="h3">Dirección Regional de Enseñanza Cartago</h3>
                <h3 class="h3">Red de Alcance Bibliotecólogos Escolares Cartago</h3>
                <h2 class="h2">Escuela Fray José Antonio de Liendo y Goicoechea</h2>
                <h2 class="h2">Biblioteca Omar Flores</h2>
            </div>
            <h1>Modificar material didactico</h1>
            <form action="listarDidacticos.html">
                <label for="equipo">Equipo:</label>
                <select name="equipo" id="equipo" class="form-control" required="">
                    <option value="">Seleccione el material didactico</option>
                    <option value="1">Mapa</option>
                    <option value="2">Juego</option>
                    <option value="3">Abaco</option>
                    <option value="4">Lapices y lapiceros</option>
                    <option value="5">Laminas educativas</option>
                    <option value="6">Otro</option>
                </select>
                <label for="marca">Marca:</label>
                <input type="text" class="form-control" name="marca" required="">
                <label for="modelo">Especificación:</label>
                <input type="text" class="form-control" name="especificacion" required="">
                <label for="serie">Número de serie:</label>
                <input type="text" class="form-control" name="serie" required="">
                <hr>
                <input type="submit" name="modificarDidactico" value="Modificar" class="btn-warning btn-lg">
            </form>

        </div>
@stop
