@extends('layouts.principal')
@section('content')
<div class="container">
            <h1>Buscar uso de la sala de audiovisuales</h1>
            <br>
            <form name="buscarBsoSalaAudiovisuales" action="{!!URL::to("salaAudiovisuales/listar")!!}">
                <label for="fecha">Fecha:</label>
                <input type="date" class="form-control" name="fecha" id="fecha">
                <br>
                <label for="tema">Tema:</label>
                <input type="text" class="form-control" name="tema">
                <br>
                <label for="docente">Docente:</label>
                <input type="text" class="form-control" name="docente">
                <br>
                <label for="horaEntrada">Hora de entrada:</label>
                <input type="time" class="form-control" name="horaEntrada">
                <hr>
                <input type="submit" name="buscarUsoSalaAudiovisuales" value="Buscar" class="btn-success btn-lg">
                <br><br>
            </form>
        </div>
@stop
