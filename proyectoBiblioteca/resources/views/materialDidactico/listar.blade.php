@extends('layouts.principal')
@section('content')
<div class="table-responsive container">
                <br>
                <br>
                <h1>Materiales didacticos</h1>
                <br>
                <form>
                    <table class="table table-condensed table-hover table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>Equipo</th>
                                <th>Marca</th>
                                <th>Especificación</th>
                                <th>Numero de Serie</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($materialesDidacticos as $materialDidactico)
                            <tr>
                                <td>{{$materialDidactico->nombre}}</td>
                                <td>{{$materialDidactico->marca}}</td>
                                <td>{{$materialDidactico->especificacion}}</td>
                                <td>{{$materialDidactico->numeroSerie}}</td>
                                <td>

                                  @if($materialDidactico->prestado===0)
                                  <td>Disponible</td>
                                  @else
                                  <td>Prestado</td>
                                  @endif
                                  <td>
                                    @if($materialDidactico->prestado===1)
                                    {!!link_to_action('MaterialDidacticoController@eliminar', $title = 'Eliminar', $parameters = $materialDidactico->id, $attributes = ['class'=>'btn-danger btn-sm'])!!}
                                    @else
                                    {!!link_to_action('PrestamoMaterialDidacticoController@show', $title = 'Prestar', $parameters = $materialDidactico->id, $attributes = ['class'=>'btn-warning btn-sm'])!!}
                                    {!!link_to_action('MaterialDidacticoController@eliminar', $title = 'Eliminar', $parameters = $materialDidactico->id, $attributes = ['class'=>'btn-danger btn-sm'])!!}
                                    @endif
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
