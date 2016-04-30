@extends('layouts.principal')
@section('content')
<div class="table-responsive container">
                <br>
                <br>
                <h1>Servicio de Internet</h1>
                <br>
                <form>
                    <table class="table table-condensed table-hover table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>Nombre del solicitante</th>
                                <th>Fecha</th>
                                <th>Sección</th>
                                <th>Hora de entrada</th>
                                <th>Hora de salida</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Cesar Obando Solano</td>
                                <td>10/04/2016</td>
                                <td>6-2</td>
                                <td>09:00 a.m.</td>
                                <td>10:0 a.m.</td>
                                <td><a class="btn-danger btn-sm">Terminar préstamo</a> </td>
                            </tr>

                        </tbody>
                    </table>
                </form>
                <br>
                <br>

            </div>
@stop
