<?php $__env->startSection('content'); ?>
<div class="container">
            <h1>Buscar uso de Internet</h1>
            <br>
            <form name="buscarUsoServicioInternet" action="<?php echo URL::to("servicioInternet/listar"); ?>">
                <label for="fecha">Fecha:</label>
                <input type="date" class="form-control" name="fecha" id="fecha">
                <br>
                <label for="nombre">Nombre del solicitante:</label>
                <input type="text" class="form-control" name="nombre">
                <br>
                <label for="seccion">Sección:</label>
                <input type="text" class="form-control" name="seccion">
                <br>
                <label for="horaEntrada">Hora de entrada:</label>
                <input type="time" class="form-control" name="horaEntrada">
                <br>
                <hr>
                <input type="submit" name="buscarUsoServicioInternet" value="Buscar" class="btn-success btn-lg">
                <br><br>
            </form>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>