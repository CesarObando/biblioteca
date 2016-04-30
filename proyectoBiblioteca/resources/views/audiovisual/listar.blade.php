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
                                <th>Id</th>
                                <th>Equipo</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Serie</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Video Beam</td>
                                <td>Epson</td>
                                <td>EP-X5698</td>
                                <td>023159856</td>
                                <td><a href="{!!URL::to("audiovisual/editar")!!}" class="btn-warning btn-sm">Editar</a>&nbsp; <a href="{!!URL::to("audiovisual/prestar")!!}" class="btn-warning btn-sm">Prestar</a><br><br><a class="btn-danger btn-sm">Eliminar</a> </td>
                            </tr>

                        </tbody>
                    </table>
                </form>
                <br>
                <br>

            </div>
@stop
