<?php $__env->startSection('content'); ?>
<div class="container">
            <h1>Préstamo de Libro</h1>
            <br>
            <form name="prestamoLibroEstudiante" action="listarPrestamoLibrosEstudiante.html">
                <label for="signatura">Signatura:</label>
                <input type="text" class="form-control" name="signatura" id="signatura" required="">
                <br>
                <label for="numeroInscripcion">Número de Inscripción:</label>
                <input type="number" class="form-control" name="numeroInscripcion" required="">
                <br>
                <label for="autor">Autor:</label>
                <input type="text" class="form-control" name="autor" required="">
                <br>
                <label for="titulo">Título:</label>
                <input type="text" class="form-control" name="titulo" required="">
                <br>
                <label for="fecha">Fecha:</label>
                <input type="date" class="form-control" name="fecha" required="">
                <br>
                <label for="vence">Vence:</label>
                <input type="date" class="form-control" name="vence" required="">
                <br>
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" required="">
                <br>
                <label for="correo">Correo electrónico:</label>
                <input type="email" class="form-control" name="correo" required="">
                <br>
                <label for="telefono">Teléfono:</label>
                <input type="tel" class="form-control" name="telefono" required="">
                <br>
                <label for="direccion">Dirección:</label>
                <input type="text" class="form-control" name="direccion" required="">
                <br>
                <label for="seccion">Sección:</label>
                <input type="text" class="form-control" name="seccion" required="">
                <hr>
                <input type="submit" name="prestamoLibroEstudiante" value="Préstamo" class="btn-success btn-lg">
                <br><br>
            </form>
        </div>    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>