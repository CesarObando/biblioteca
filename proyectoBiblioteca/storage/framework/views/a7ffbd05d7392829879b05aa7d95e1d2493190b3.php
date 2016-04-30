<?php $__env->startSection('content'); ?>
<div class="container">
            <h1>Uso de Sala de Audiovisuales</h1>
            <br>
            <form name="usoSalaAudiovisuales" action="listarUsoSalaAudiovisuales.html">
                <label for="fecha">Fecha:</label>
                <input type="date" class="form-control" name="fecha" id="fecha" required="">
                <br>
                <label for="tema">Tema:</label>
                <input type="text" class="form-control" name="tema" required="">
                <br>
                <label for="seccion">Sección:</label>
                <input type="text" class="form-control" name="seccion" required="">
                <br>
                <label for="totalEstudiantes">Total estudiantes:</label>
                <input type="number" class="form-control" name="totalEstudiantes" required="">
                <br>
                <label for="docente">Docente:</label>
                <input type="text" class="form-control" name="docente" required="">
                <br>
                <label for="horaEntrada">Hora de entrada:</label>
                <input type="time" class="form-control" name="horaEntrada" required="">
                <br>
                <label for="horaSalida">Hora de salida:</label>
                <input type="time" class="form-control" name="horaSalida" required="">
                <br>
                <label for="observaciones">Observaciones:</label>
                <input type="text" class="form-control" name="observaciones">
                <hr>
                <input type="submit" name="usoSalaAudiovisuales" value="Insertar" class="btn-success btn-lg">
                <br><br>
            </form>
        </div>    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>