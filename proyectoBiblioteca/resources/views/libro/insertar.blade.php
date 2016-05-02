@extends('layouts.principal')
@section('content')
<div class="container">
            <h1>Insertar Nuevo Libro</h1>
            <br>

                {!!Form::open(['route'=>'libro.store','method'=>'post'])!!}

            <form name="insertarLibro" action="index.html">
               <label for="signatura">Signatura:</label>
                <input type="text" class="form-control" name="signatura" id="signatura" required="">
                <br>
                <label for="numeroInscripcion">Número de Inscripción:</label>
                <input type="number" class="form-control" name="numeroInscripcion" required="">
                 <br>
                <label for="fecha">Fecha:</label>
                <input type="date" class="form-control" name="fecha" required="">
                <br>
                <label for="autor">Autor:</label>
                <input type="text" class="form-control" name="autor" required="">
                <br>
                <label for="titulo">Título:</label>
                <input type="text" class="form-control" name="titulo" required="">
                <br>
                <label for="edicion">Edición:</label>
                <input type="text" class="form-control" name="edicion" required="">
                <br>
                <label for="lugar">Lugar:</label>
                <input type="text" class="form-control" name="lugar" required="">
                <br>
                <label for="editorial">Editorial:</label>
                <input type="text" class="form-control" name="editorial" required="">
                <br>
                <label for="ano">Año:</label>
                <input type="date" class="form-control" name="ano" required="">
                 <br>
                <label for="observaciones">Observaciones:</label>
                <input type="text" class="form-control" name="observaciones" required="">
                <hr>
                <input type="submit" name="insertarLibro" value="Insertar" class="btn-success btn-lg">
                {!!Form::close()!!}
                <br><br>
            </form>
        </div>
@stop
