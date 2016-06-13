@extends('layouts.principal')
@section('content')
<div class="container">
  <h1>Modificar Audiovisual</h1>
  {!!Form::model($audiovisual,['route'=>['audiovisual.update',$audiovisual->id],'method'=>'PUT'])!!}

  <div class="form-group">
    {!!Form::label('equipo','Equipo:')!!}
    {!!Form::select('equipo', ['Computadora' => 'Computadora',
    'Pantalla' => 'Pantalla',
    'Retroproyector'=>'Retroproyector',
    'Video Beam'=>'Video Beam',
    'Radiograbadora'=>'Radiograbadora',
    'Extensión eléctrica'=>'Extensión eléctrica',
    'Parlantes'=>'Parlantes',
    'Televisor'=>'Televisor',
    'Regleta'=>'Regleta',
    'Otro'=>'Otro'],null,['class'=>'form-control',
    'placeholder'=>'Seleccione el equipo','onchange'=>'especificarOtro()'])!!}
  </div>
  <div class="form-group">
    <input type="hidden" class="form-control" name="otro" id="otro" placeholder="Otro" value="">
  </div>
  <div class="form-group">
    {!!Form::label('marca','Marca:')!!}
    {!!Form::text('marca',null,['class'=>'form-control','placeholder'=>'Ingrese la marca'])!!}
  </div>
  <div class="form-group">
    {!!Form::label('modelo','Modelo:')!!}
    {!!Form::text('modelo',null,['class'=>'form-control','placeholder'=>'Ingrese el modelo'])!!}
  </div>
  <div class="form-group">
    {!!Form::label('numeroSerie','Número de serie:')!!}
    {!!Form::text('numeroSerie',null,['class'=>'form-control','placeholder'=>'Ingrese el número de serie'])!!}
  </div>
  {!!Form::submit('Editar',['class'=>'btn-warning btn-lg'])!!}
  {!!Form::close()!!}
</div>

<script>
function especificarOtro(){
    opcion = document.getElementById("equipo");
    if(opcion.value === "Otro"){
        document.getElementById("otro").setAttribute("type","text");
    }else{
        document.getElementById("otro").setAttribute("type","hidden");
    }
}
</script>
@stop
