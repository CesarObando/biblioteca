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
                                         '4'=>'Otro'],null,
                                         ['placeholder'=>'Seleccione la condición del solicitante',
                                         'class'=>'form-control',
                                         'onchange'=>'especificarOtraCondicion()']
                                         )!!}
                {!!Form::label('otracondicion','Otro', ['id'=>'l_otracondicion',
                                                        'style'=>'visibility: hidden'])!!}
                {!!Form::text('otracondicion',null,['id'=>'otracondicion',
                                                    'style'=>'visibility: hidden',
                                                    'class'=>'form-control']) !!}
                {!!Form::label('finesPrestamo','Fines del préstamo:')!!}
                {!!Form::select('finesPrestamo',['Desarollo curricular'=>'Desarollo curricular',
                                             'Reunión de padres de familia'=>'Reunión de padres de familia',
                                             'Escuela de padres'=>'Escuela de padres',
                                             'Capacitación docente'=>'Capacitación docente',
                                             'Consejo de profesores'=>'Consejo de profesores',
                                             '6'=>'Otro'],null,
                                             ['placeholder'=>'Seleccione el motivo del prestamo',
                                             'class'=>'form-control',
                                             'onchange'=>'especificarOtroMotivo()']
                                             )!!}
              {!!Form::label('otromotivo','Otro', ['id'=>'l_otromotivo',
                                                   'style'=>'visibility: hidden'])!!}
              {!!Form::text('otromotivo',null,['id'=>'otromotivo',
                                               'style'=>'visibility: hidden',
                                               'class'=>'form-control']) !!}
                {!!Form::label('fecha', 'Fecha') !!}
                {!!Form::date('fecha',null,['class'=>'form-control'])!!}
                {!!Form::label('hora', 'Hora') !!}
                {!!Form::time('hora',null,['class'=>'form-control'])!!}
                <hr>
                {!!Form::submit('Prestar',['class'=>'btn-success btn-lg'])!!}

            {!!Form::close()!!}
            <script>
                function especificarOtroEquipo(){
                    opcion = document.getElementById("equipo");
                    if(opcion.value === "6"){
                        document.getElementById("l_otro").setAttribute("style","visibility: visible");
                        document.getElementById("otro").setAttribute("style","visibility: visible");
                    }else{
                        document.getElementById("l_otro").setAttribute("style","visibility: hidden");
                        document.getElementById("otro").setAttribute("style","visibility: hidden");
                    }
                }
                function especificarOtroMotivo(){
                    opcion = document.getElementById("finesPrestamo");
                    if(opcion.value === "6"){
                        document.getElementById("l_otromotivo").setAttribute("style","visibility: visible");
                        document.getElementById("otromotivo").setAttribute("style","visibility: visible");
                    }else{
                        document.getElementById("l_otromotivo").setAttribute("style","visibility: hidden");
                        document.getElementById("otromotivo").setAttribute("style","visibility: hidden");
                    }
                }
                function especificarOtraCondicion(){
                    opcion = document.getElementById("condicion");
                    if(opcion.value === "4"){
                        document.getElementById("l_otracondicion").setAttribute("style","visibility: visible");
                        document.getElementById("otracondicion").setAttribute("style","visibility: visible");
                    }else{
                        document.getElementById("l_otracondicion").setAttribute("style","visibility: hidden");
                        document.getElementById("otracondicion").setAttribute("style","visibility: hidden");
                    }
                }
            </script>
        </div>
@stop
