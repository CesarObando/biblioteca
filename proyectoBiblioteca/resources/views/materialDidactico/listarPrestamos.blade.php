@extends('layouts.principal')
@section('content')
<div class="table-responsive container">
                <br>
                <br>
                <h1>Prestamos Material didactico</h1>
                <br>
                <form>
                    <table class="table table-condensed table-hover table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>Nombre del solicitante</th>
                                <th>Equipo</th>
                                <th>Marca</th>
                                <th>Especificación</th>
                                <th>Serie</th>
                                <th>Fecha de préstamo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($prestamosMaterialDidactico as $prestamoMaterialDidactico)
                            <tr>
                                <td>{{$prestamoMaterialDidactico->nombreSolicitante}}</td>
                                <td>Mapa</td>
                                <td>Mapax</td>
                                <td>Mapa Mundi</td>
                                <td>84378</td>
                                <td>{{$prestamoMaterialDidactico->fecha}}</td>
                                <td>
                                  {!!link_to_action('PrestamoMaterialDidacticoController@terminarPrestamo',
                                                    $title = 'Terminar Prestamo',
                                                    $parameters = $prestamoMaterialDidactico->id,
                                                    $attributes = ['class'=>'btn-warning btn-sm'])!!}


                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                </form>
                <br>
                <br>

            </div>
@stop
