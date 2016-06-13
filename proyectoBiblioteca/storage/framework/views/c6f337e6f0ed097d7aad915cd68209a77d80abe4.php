<?php $__env->startSection('content'); ?>
<div class="container">
            <h1>Modificar Libro</h1>
            <br>
            <?php echo Form::model($libro,['route'=>['libro.update',$libro->id],'method'=>'PUT']); ?>

            <form name="modificarLibro" action="listarLibros.html">
                <label for="signatura">Signatura:</label>
                <input type="text" class="form-control" name="signatura" required="" value= <?php echo e($libro->signatura); ?>>
                <br>
                <label for="numeroInscripcion">Número de Inscripción:</label>
                <input type="number" class="form-control" name="numeroInscripcion" required="" value= <?php echo e($libro->numeroInscripcion); ?>>
                <br>
                <label for="fecha">Fecha:</label>
                <input type="date" class="form-control" name="fecha" required="" value= <?php echo e($libro->fecha); ?>>
                <br>
                <label for="autor">Autor:</label>
                <input type="text" class="form-control" name="autor" required="" value= <?php echo e($libro->autor); ?>>
                <br>
                <label for="titulo">Título:</label>
                <input type="text" class="form-control" name="titulo" required="" value= <?php echo e($libro->titulo); ?>>
                <br>
                <label for="edicion">Edición:</label>
                <input type="text" class="form-control" name="edicion" required="" value= <?php echo e($libro->edicion); ?>>
                <br>
                <label for="lugar">Lugar:</label>
                <input type="text" class="form-control" name="lugar" required="" value= <?php echo e($libro->lugar); ?>>
                <br>
                <label for="editorial">Editorial:</label>
                <input type="text" class="form-control" name="editorial" required="" value= <?php echo e($libro->editorial); ?>>
                <br>
                <label for="ano">Año:</label>
                <input type="int" class="form-control" name="ano" required="" value= <?php echo e($libro->ano); ?>>
                <br>
                <label for="observaciones">Observaciones:</label>
                <input type="int" class="form-control" name="observaciones" required="" value= <?php echo e($libro->observaciones); ?>>
                <hr>
                <input type="submit" name="modificarLibro" value="Modificar" class="btn-warning btn-lg">
                <?php echo Form::close(); ?>

                <br><br>
            </form>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>