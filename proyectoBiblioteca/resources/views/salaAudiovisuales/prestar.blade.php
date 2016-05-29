@extends('layouts.principal')
@section('content')
<div class="container">
            <h1>Uso de Sala de Audiovisuales</h1>
            <br>
            {!!Form::open(['route'=>'salaAudiovisuales.store','method'=>'post'])!!}
            <label for="nombreSolicitante">Nombre del solicitante:</label>
            <input type="text" class="form-control" name="nombreSolicitante" required="">
            <br>
            <label for="tema">Tema:</label>
            <input type="text" class="form-control" name="tema" required="">
            <br>
            <label for="seccion">Sección:</label>
            <input type="text" class="form-control" name="seccion" required="">
            <br>
            <label for="totalEstudiantes">Total estudiantes:</label>
            <input type="number" class="form-control" name="totalEstudiantes" required="">
            <br>
            <label for="fecha">Fecha:</label>
            <input type="date" class="form-control" name="fecha" id="fecha" required="">
            <br>
            <label for="horaEntrada">Hora de entrada:</label>
            <input type="time" class="form-control" name="horaEntrada" required="">
            <br>
            <label for="horaSalida">Hora de salida:</label>
            <input type="time" class="form-control" name="horaSalida" required="">
            <br>
            <label for="observaciones">Observaciones:</label>
            <input type="text" class="form-control" name="observaciones">
            <hr>
            <input type="submit" name="usoSalaAudiovisuales" value="Insertar" class="btn-success btn-lg">
            <br><br>
            {!!Form::close()!!}
        </div>
@stop
