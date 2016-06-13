@extends('layouts.principal')
@section('content')
<div class="container">
  <h1>Modificar material didactico</h1>
  {!!Form::model($materialDidactico,['route'=>['materialDidactico.update',$materialDidactico->id],'method'=>'PUT'])!!}

  <div class="form-group">
    {!!Form::label('nombre','Equipo:')!!}
    {!!Form::text('nombre',null,['class'=>'form-control','disabled'=>''])!!}
  </div>

  <div class="form-group">
    {!!Form::label('marca','Marca:')!!}
    {!!Form::text('marca',null,['class'=>'form-control','placeholder'=>'Ingrese la marca'])!!}
  </div>
  <div class="form-group">
    {!!Form::label('especificacion','Especificación:')!!}
    {!!Form::text('especificacion',null,['class'=>'form-control','placeholder'=>'Ingrese el modelo'])!!}
  </div>
  <div class="form-group">
    {!!Form::label('numeroSerie','Número de serie:')!!}
    {!!Form::text('numeroSerie',null,['class'=>'form-control','placeholder'=>'Ingrese el número de serie'])!!}
  </div>
  {!!Form::submit('Editar',['class'=>'btn-warning btn-lg'])!!}
  {!!Form::close()!!}

</div>
@stop
