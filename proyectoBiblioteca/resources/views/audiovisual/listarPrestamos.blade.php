@extends('layouts.principal')
@section('content')
<div class="table-responsive container">
                <br>
                <br>
                <h1>Audiovisuales</h1>
                <br>
                <form>
                    <table class="table table-condensed table-hover table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>Nombre del solicitante</th>
                                <th>Equipo</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Serie</th>
                                <th>Fecha de préstamo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        @foreach($prestamosAudiovisual as $prestamoAudiovisual)
                        <tbody>
                            <tr>
                                <td>{{$prestamoAudiovisual->nombreSolicitante}}</td>
                                <td>{{$prestamoAudiovisual->equipo}}</td>
                                <td>{{$prestamoAudiovisual->marca}}</td>
                                <td>{{$prestamoAudiovisual->modelo}}</td>
                                <td>{{$prestamoAudiovisual->numeroSerie}}</td>
                                <td>{{$prestamoAudiovisual->fecha}}</td>
                                <td>{!!link_to_action('PrestamoAudiovisualController@eliminarPrestamo', $title = 'Terminar', $parameters = $prestamoAudiovisual->id, $attributes = ['class'=>'btn-danger btn-sm'])!!} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </form>
                <br>
                <br>

            </div>
@stop
