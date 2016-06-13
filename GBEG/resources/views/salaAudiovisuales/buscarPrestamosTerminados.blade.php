@extends('layouts.principal')
@section('content')
<div class="container">
            <h1>Préstamos de la sala de audiovisuales terminados</h1>
            <br>
            <form name="buscarUsoSalaAudiovisualesTerminado" action="{!!URL::to("salaAudiovisuales/listarPrestamosTerminados")!!}">
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
              <input type="submit" name="buscarUsoSalaAudiovisualesTerminado" value="Buscar" class="btn-success btn-lg">
              <br><br>
            </form>
        </div>
@stop
