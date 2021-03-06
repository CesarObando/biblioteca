@extends('layouts.principal')
@section('content')
<div class="container">
            <h1>Uso de Internet</h1>
            <br>
            {!!Form::open(['route'=>'servicioInternet.store','method'=>'post'])!!}
            <form name="usoServicioInternet" action="listarUsoServicioInternet.html">
                <label for="fecha">Fecha:</label>
                <input type="date" class="form-control" name="fecha" id="fecha" required="">
                <br>
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" required="">
                <br>
                <label for="seccion">Sección:</label>
                <input type="text" class="form-control" name="seccion" required="">
                <br>
                <label for="tema">Tema:</label>
                <input type="text" class="form-control" name="tema" required="">
                <br>
                <label for="horaEntrada">Hora de entrada:</label>
                <input type="time" class="form-control" name="horaEntrada" required="">
                <br>
                <label for="horaSalida">Hora de salida:</label>
                <input type="time" class="form-control" name="horaSalida" required="">
                <br>
                <hr>
                <input type="submit" name="usoServicioInternet" value="Insertar" class="btn-success btn-lg">
                <br><br>
            {!!Form::close()!!}
        </div>
@stop
