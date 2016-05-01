@extends('layouts.principal')
@section('content')
<div class="container">
            <div class="text-center">
                <h3 class="h3">Dirección Regional de Enseñanza Cartago</h3>
                <h3 class="h3">Red de Alcance Bibliotecólogos Escolares Cartago</h3>
                <h2 class="h2">Escuela Fray José Antonio de Liendo y Goicoechea</h2>
                <h2 class="h2">Biblioteca Omar Flores</h2>
            </div>
            <h1>Buscar materiales didacticos</h1>
            <form name="buscarDidactico" action="{!!URL::to("materialDidactico/listar")!!}">
                <label for="equipo">Equipo:</label>
                <select name="equipo" id="equipo" class="form-control">
                  <option value="Mapa">Mapa</option>
                  <option value="Juego">Juego</option>
                  <option value="Abaco">Abaco</option>
                  <option value="Lapices">Lapices y lapiceros</option>
                  <option value="Laminas">Laminas educativas</option>
                  <option value="Otro">Otro</option>
                </select>
                <label for="marca">Marca:</label>
                <input type="text" class="form-control" name="marca">
                <hr>
                <input type="submit" name="buscarAudiovisual" value="Buscar" class="btn-success btn-lg">
            </form>


        </div>
@stop
