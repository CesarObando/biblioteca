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
                                  {!!link_to_action('PrestamoMaterialDidacticoController@show', $title = 'Prestar', $parameters = $materialDidactico->id, $attributes = ['class'=>'btn-warning btn-sm'])!!}

                                  <a href="{!!URL::to("materialDidactico/editar")!!}" class="btn-warning btn-sm">Editar</a>

                                  <br><br><a class="btn-danger btn-sm">Eliminar</a>
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
