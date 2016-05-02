@extends('layouts.principal')
@section('content')
<div class="container">
            <h1>Préstamo de Libro</h1>
            <br>
            {!!Form::open(['route'=>'PrestamoLibroDocente.store','method'=>'post'])!!}
            <form name="prestamoLibroProfesor" action="listarPrestamoLibrosProfesor.html">
                <label for="nombreDocente">nombreDocente:</label>
                <input type="text" class="form-control" name="nombreDocente" id="signatura" required="">
                <br>
                <label for="seccion">Sección:</label>
                <input type="text" class="form-control" name="seccion" required="">
                <br>
                <label for="cantidadEstudiantes">Cantidad de estudiantes:</label>
                <input type="number" class="form-control" name="cantidadEstudiantes" required="">
                <br>
                <label for="cantidadEstudiantesAdecuacion">Cantidad de estudiantes con adecuaciones:</label>
                <input type="number" class="form-control" name="cantidadEstudiantesAdecuacion" required="">
                <br>
                <label for="fecha">Fecha:</label>
                <input type="date" class="form-control" name="fecha" required="">
                <br>
                <label for="materia">Materia:</label>
                <select name="materia" id="materia" class="form-control" required="">
                    <option value="">Seleccione la materia del libro</option>
                    <option value="1">Matemáticas</option>
                    <option value="2">Estudios Sociales</option>
                    <option value="3">Ciencias</option>
                    <option value="4">Español</option>
                    <option value="5">Programas de estudio</option>
                </select>
                <br>
                <label for="numeroInscripcion">Número de Inscripción:</label>
                <input type="number" class="form-control" name="numeroInscripcion" required="">
                <hr>
                <input type="submit" name="prestamoLibroProfesor" value="Préstamo" class="btn-success btn-lg">
                {!!Form::close()!!}
                <br><br>
            </form>
        </div>
@stop
