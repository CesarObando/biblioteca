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
                            </tr>
                        </thead>
                        @foreach($prestamosAudiovisualTerminados as $prestamoAudiovisual)
                        <tbody>
                            <tr>
                                <td>{{$prestamoAudiovisual->nombreSolicitante}}</td>
                                <td>{{$prestamoAudiovisual->equipo}}</td>
                                <td>{{$prestamoAudiovisual->marca}}</td>
                                <td>{{$prestamoAudiovisual->modelo}}</td>
                                <td>{{$prestamoAudiovisual->numeroSerie}}</td>
                                <td>{{$prestamoAudiovisual->fecha}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </form>
                <br>
                <br>

            </div>
@stop
