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
                                <th>Nombre del docente</th>
                                <th>Sección</th>
                                <th>Materia</th>
                                <th>Número de inscripción</th>
                                <th>Fecha de préstamo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Allan Moya Madrigal</td>
                                <td>6-2</td>
                                <td>Español</td>
                                <td>3432</td>
                                <td>07/04/2016</td>
                                <td><a href="listarPrestamoLibrosProfesor.html" class="btn-danger btn-sm">Terminar préstamo</a> </td>
                            </tr>

                        </tbody>
                    </table>
                </form>
                <br>
                <br>

            </div>
@stop
