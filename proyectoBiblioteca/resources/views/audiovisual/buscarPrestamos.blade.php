@extends('layouts.principal')
@section('content')
<div class="container">
            <h1>Buscar préstamos</h1>
            <br>
            <form name="buscarPrestamoAudiovisual" action="{!!URL::to("audiovisual/listarPrestamos")!!}">
                <label for="nombreSolicitante">Nombre del solicitante:</label>
                <input type="text" class="form-control" name="nombreSolicitante" id="signatura">
                <br>
                <label for="equipo">Equipo:</label>
                <select name="equipo" id="equipo" class="form-control">
                    <option value="">Seleccione el equipo</option>
                    <option value="1">Computadora</option>
                    <option value="2">Pantalla</option>
                    <option value="3">Retroproyector</option>
                    <option value="4">Video Beam</option>
                    <option value="5">Radiograbadora</option>
                    <option value="6">Extensión eléctrica</option>
                    <option value="7">Parlantes</option>
                    <option value="8">Televisor</option>
                    <option value="9">Regleta</option>
                    <option value="10">Otro</option>
                </select>
                <br>
                <label for="fecha">Fecha:</label>
                <input type="date" class="form-control" name="fecha">
                <hr>
                <input type="submit" name="buscarPrestamoAudiovisual" value="Buscar" class="btn-success btn-lg">
                <br><br>
            </form>
        </div>
@stop
