@extends('layouts.principal')
@section('content')
<div class="container">
  <h1>Préstamo de material audiovisual</h1>
  <br>
  {!!Form::model($audiovisual,['route'=>['prestamoAudiovisual.store',$audiovisual->id],'method'=>'post'])!!}
  <div class="form-group">
    {!!Form::hidden('id',null,['class'=>'form-control'])!!}
    {!!Form::label('equipo','Equipo:')!!}
    {!!Form::text('equipo',null,['class'=>'form-control','disabled'=>''])!!}
  </div>
  <div class="form-group">
    {!!Form::label('marca','Marca:')!!}
    {!!Form::text('marca',null,['class'=>'form-control','disabled'=>''])!!}
  </div>
  <div class="form-group">
    {!!Form::label('modelo','Modelo:')!!}
    {!!Form::text('modelo',null,['class'=>'form-control','disabled'=>''])!!}
  </div>
  <div class="form-group">
    {!!Form::label('numeroSerie','Número de serie:')!!}
    {!!Form::text('numeroSerie',null,['class'=>'form-control','disabled'=>''])!!}
  </div>

  <label for="nombreSolicitante">Nombre del solicitante:</label>
  <input type="text" class="form-control" name="nombreSolicitante" id="signatura" required="">
  <br>
  <label for="condicion">Condición:</label>
  <select name="condicion" id="condicion" class="form-control" required="" onchange="especificarOtraCondicion()">
    <option value="">Seleccione la condición del solicitante</option>
    <option value="Docente">Docente</option>
    <option value="Administrativo">Administrativo</option>
    <option value="Estudiante">Estudiante</option>
    <option value="Otro">Otro</option>
  </select>
  <input type="hidden" class="form-control" name="otracondicion" id="otracondicion" placeholder="Otro" value="">
  <br>
  <label for="finesPrestamo">Fines del préstamo:</label>
  <select name="finesPrestamo" id="finesPrestamo" class="form-control" required="" onchange="especificarOtroMotivo()">
    <option value="">Seleccione el equipo</option>
    <option value="Desarollo curricular">Desarollo curricular</option>
    <option value="Reunión de padres de familia">Reunión de padres de familia</option>
    <option value="Escuela de padres">Escuela de padres</option>
    <option value="Capacitación docente">Capacitación docente</option>
    <option value="Consejo de profesores">Consejo de profesores</option>
    <option value="Otro">Otro</option>
  </select>
  <input type="hidden" class="form-control" name="otromotivo" id="otromotivo" placeholder="Otro" value="">
  <br>
  <label for="fecha">Fecha:</label>
  <input type="date" class="form-control" name="fecha" required="">
  <br>
  <label for="hora">Hora:</label>
  <input type="time" class="form-control" name="hora" required="">
  <hr>
  {!!Form::submit('Prestar',['class'=>'btn-success btn-lg'])!!}
  {!!Form::close()!!}
  <script>

  function especificarOtroMotivo(){
    opcion = document.getElementById("finesPrestamo");
    if(opcion.value === "Otro"){
        document.getElementById("otromotivo").setAttribute("type","text");
    }else{
        document.getElementById("otromotivo").setAttribute("type","hidden");
    }
  }
  function especificarOtraCondicion(){
    opcion = document.getElementById("condicion");
    if(opcion.value === "Otro"){
        document.getElementById("otracondicion").setAttribute("type","text");
    }else{
        document.getElementById("otracondicion").setAttribute("type","hidden");
    }
  }
  </script>
</div>
@stop
