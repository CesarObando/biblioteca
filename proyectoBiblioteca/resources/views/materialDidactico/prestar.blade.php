@extends('layouts.principal')
@section('content')
<div class="container">
  <h1>Préstamo de material didactico</h1>
  <br>
  {!!Form::model($materialDidactico,['route'=>['prestamoMaterialDidactico.store',$materialDidactico->id],'method'=>'post'])!!}

  <div class="form-group">
    {!!Form::hidden('id',null,['class'=>'form-control'])!!}
    {!!Form::label('nombre','Equipo:')!!}
    {!!Form::text('nombre',null,['class'=>'form-control','disabled'=>''])!!}
  </div>
  <div class="form-group">
    {!!Form::label('marca','Marca:')!!}
    {!!Form::text('marca',null,['class'=>'form-control','disabled'=>''])!!}
  </div>
  <div class="form-group">
    {!!Form::label('especificacion','Modelo:')!!}
    {!!Form::text('especificacion',null,['class'=>'form-control','disabled'=>''])!!}
  </div>
  <div class="form-group">
    {!!Form::label('numeroSerie','Número de serie:')!!}
    {!!Form::text('numeroSerie',null,['class'=>'form-control','disabled'=>''])!!}
  </div>
  {!!Form::label('nombreSolicitante','Nombre del solicitante')!!}
  {!!Form::text('nombreSolicitante',null,['class'=>'form-control'])!!}
  {!!Form::label('condicion','Condición')!!}
  {!!Form::select('condicion',['Docente'=>'Docente',
  'Administrativo'=>'Administrativo',
  'Estudiante'=>'Estudiante',
  'Otro'=>'Otro'],null,
  ['placeholder'=>'Seleccione la condición del solicitante',
  'class'=>'form-control',
  'onchange'=>'especificarOtraCondicion()']
  )!!}
  <input type="hidden" class="form-control" name="otracondicion" id="otracondicion" placeholder="Otro" value="">
  {!!Form::label('finesPrestamo','Fines del préstamo:')!!}
  {!!Form::select('finesPrestamo',['Desarollo curricular'=>'Desarollo curricular',
  'Reunión de padres de familia'=>'Reunión de padres de familia',
  'Escuela de padres'=>'Escuela de padres',
  'Capacitación docente'=>'Capacitación docente',
  'Consejo de profesores'=>'Consejo de profesores',
  'Otro'=>'Otro'],null,
  ['placeholder'=>'Seleccione el motivo del prestamo',
  'class'=>'form-control',
  'onchange'=>'especificarOtroMotivo()']
  )!!}
  <input type="hidden" class="form-control" name="otromotivo" id="otromotivo" placeholder="Otro" value="">
  {!!Form::label('fecha', 'Fecha') !!}
  {!!Form::date('fecha',null,['class'=>'form-control'])!!}
  {!!Form::label('hora', 'Hora') !!}
  {!!Form::time('hora',null,['class'=>'form-control'])!!}
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
