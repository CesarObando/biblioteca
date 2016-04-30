@extends('layouts.principal')
@section('content')
<div class="container">
            <div class="text-center">
                <h3 class="h3">Dirección Regional de Enseñanza Cartago</h3>
                <h3 class="h3">Red de Alcance Bibliotecólogos Escolares Cartago</h3>
                <h2 class="h2">Escuela Fray José Antonio de Liendo y Goicoechea</h2>
                <h2 class="h2">Biblioteca Omar Flores</h2>
            </div>
            <h1>Modificar Audiovisual</h1>
            {!!Form::model($audiovisual,['route'=>['audiovisual.update',$audiovisual->id],'method'=>'PUT'])!!}

                <div class="form-group">
                {!!Form::label('equipo','Equipo:')!!}
                {!!Form::select('equipo', ['Computadora' => 'Computadora', 'Pantalla' => 'Pantalla','Retroproyector'=>'Retroproyector',
                'Video Beam'=>'Video Beam','Radiograbadora'=>'Radiograbadora','Extensión eléctrica'=>'Extensión eléctrica','Parlantes'=>'Parlantes',
                'Televisor'=>'Televisor','Regleta'=>'Regleta','10'=>'Otro'],null,['class'=>'form-control','onchange'=>'especificarOtro()'])!!}
                </div>

                <label for="otro" id="l_otro" style="visibility: hidden">Otro:</label>
                <input type="text" class="form-control" name="equipo" id="otro" style="visibility: hidden">
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
                if(opcion.value === "10"){
                    document.getElementById("l_otro").setAttribute("style","visibility: visible");
                    document.getElementById("otro").setAttribute("style","visibility: visible");
                }else{
                    document.getElementById("l_otro").setAttribute("style","visibility: hidden");
                    document.getElementById("otro").setAttribute("style","visibility: hidden");
                }
            }
        </script>
@stop
