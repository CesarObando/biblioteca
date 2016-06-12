@extends('layouts.principal')
@section('content')
<div class="container">
            <h1>Préstamos de la sala de audiovisuales</h1>
            <br>
            <form name="buscarBsoSalaAudiovisuales" action="{!!URL::to("salaAudiovisuales/listar")!!}">
              <label for="nombreSolicitante">Nombre del solicitante:</label>
              <input type="text" class="form-control" name="nombreSolicitante">
              <br>
              <label for="tema">Tema:</label>
              <input type="text" class="form-control" name="tema">
              <br>
              <label for="fecha">Fecha:</label>
              <input type="date" class="form-control" name="fecha" id="fecha">
              <br>
              <label for="horaEntrada">Hora de entrada:</label>
              <input type="time" class="form-control" name="horaEntrada">
              <hr>
              <input type="submit" name="buscarUsoSalaAudiovisuales" value="Buscar" class="btn-success btn-lg">
              <br><br>
            </form>
        </div>
@stop
