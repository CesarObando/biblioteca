@extends('layouts.principal')
@section('content')
<div class="container">
            <div class="text-center">
                <h3 class="h3">Dirección Regional de Enseñanza Cartago</h3>
                <h3 class="h3">Red de Alcance Bibliotecólogos Escolares Cartago</h3>
                <h2 class="h2">Escuela Fray José Antonio de Liendo y Goicoechea</h2>
                <h2 class="h2">Biblioteca Omar Flores</h2>
            </div>
            <h1>Modificar material didactico</h1>
            {!!Form::model($materialDidactico,['route'=>['materialDidactico.update',$materialDidactico->id],'method'=>'PUT'])!!}

                <div class="form-group">
                {!!Form::label('nombre','Equipo:')!!}
                {!!Form::select('nombre', ['Mapa' => 'Mapa',
                                           'Pantalla' => 'Pantalla',
                                           'Juego'=>'Juego',
                                           'Abaco'=>'Abaco',
                                           'Lapices'=>'Lapices',
                                           'Laminas'=>'Laminas',
                                           '6'=>'Otro'],null,
                                           ['class'=>'form-control',
                                           'placeholder'=>'Seleccione el material didactico'])!!}
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
