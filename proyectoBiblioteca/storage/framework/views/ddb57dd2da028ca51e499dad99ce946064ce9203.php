<?php $__env->startSection('content'); ?>
<div class="container">
            <h1>Préstamo de Libro</h1>
            <br>
            <?php echo Form::model($libro,['route'=>['PrestamoLibroDocente.store',$libro->id],'method'=>'post']); ?>

            <div class="form-group">
            <?php echo Form::hidden('id',null,['class'=>'form-control']); ?>

            <?php echo Form::label('titulo','Libro:'); ?>

            <?php echo Form::text('titulo',null,['class'=>'form-control','disabled'=>'']); ?>

          </div>
          <label for="signatura">Signatura:</label>
          <input type="text" class="form-control" name="signatura" id="signatura" disabled="" value= <?php echo e($libro->signatura); ?>>
          <br>
          <label for="numeroInscripcion">Número de Inscripción:</label>
          <input type="number" class="form-control" name="numeroInscripcion" disabled="" value= <?php echo e($libro->numeroInscripcion); ?>>
          <br>
          <label for="autor">Autor:</label>
          <input type="text" class="form-control" name="autor" disabled="" value= <?php echo e($libro->autor); ?>>
          <br>
                <br>
                <label for="nombreSolicitante">Nombre Docente:</label>
                <input type="text" class="form-control" name="nombreSolicitante" id="signatura" required="">
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
                <input type="number" class="form-control" name="numeroInscripcion" required="" value="<?php echo e($libro->numeroInscripcion); ?>">
                <hr>
                <input type="submit" name="prestamoLibroProfesor" value="Préstamo" class="btn-success btn-lg">
                <?php echo Form::close(); ?>

                <br><br>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>