@extends('layouts.principal')
@section('content')
<div class="table-responsive container">
                <br>
                <br>
                <h1>Libros</h1>
                <br>
                <form>
                    <table class="table table-condensed table-hover table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>Signatura</th>
                                <th>No. de Inscripción</th>
                                <th>Autor</th>
                                <th>Título</th>
                                <th>Edicón</th>
                                <th>Fecha</th>
                                <th>Lugar</th>
                                <th>Editorial</th>
                                <th>Año</th>
                                <th>Observaciones</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        @foreach($libros as $libro)
                        <tbody>
                            <tr>
                                <td>{{$libro->signatura}}</td>
                                <td>{{$libro->numeroInscripcion}}</td>
                                <td>{{$libro->autor}}</td>
                                <td>{{$libro->titulo}}</td>
                                <td>{{$libro->edicion}}</td>
                                <td>{{$libro->fecha}}</td>
                                <td>{{$libro->lugar}}</td>
                                <td>{{$libro->editorial}}</td>
                                <td>{{$libro->ano}}</td>
                                <td>{{$libro->observaciones}}</td>
                                <td>
                                   {!!link_to_route('libro.editar', $title = 'Editar', $parameters = $libro->id, $attributes = ['class'=>'btn-warning btn-sm'])!!}
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </form>
                <br>
                <br>

            </div>

@stop
