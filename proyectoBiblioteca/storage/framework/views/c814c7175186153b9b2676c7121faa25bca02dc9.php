<?php $__env->startSection('content'); ?>
<div class="container">
            <h1>Buscar préstamos</h1>
            <br>
            <form name="buscarPrestamoDidactico" action="<?php echo URL::to("materialDidactico/listarPrestamos"); ?>">
                <label for="nombreSolicitante">Nombre del solicitante:</label>
                <input type="text" class="form-control" name="nombreSolicitante" id="signatura">
                <br>
                <label for="equipo">Equipo:</label>
                <select name="equipo" id="equipo" class="form-control">
                    <option value="">Seleccione el material didactico</option>
                    <option value="1">Mapa</option>
                    <option value="2">Juego</option>
                    <option value="3">Abaco</option>
                    <option value="4">Lapices y lapiceros</option>
                    <option value="5">Laminas educativas</option>
                    <option value="6">Otro</option>
                </select>
                <br>
                <label for="fecha">Fecha:</label>
                <input type="date" class="form-control" name="fecha">
                <hr>
                <input type="submit" name="buscarPrestamoDidactico" value="Buscar" class="btn-success btn-lg">
                <br><br>
            </form>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>