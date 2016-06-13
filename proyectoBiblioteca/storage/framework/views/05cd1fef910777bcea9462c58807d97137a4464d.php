<?php $__env->startSection('content'); ?>
<div class="container">
            <h1>Buscar préstamos</h1>
            <br>
            <form name="buscarPrestamoAudiovisualTerminado" action="<?php echo URL::to("audiovisual/listarPrestamosTerminados"); ?>">
                <label for="nombreSolicitante">Nombre del solicitante:</label>
                <input type="text" class="form-control" name="nombreSolicitante" id="signatura">
                <br>
                <label for="equipo">Equipo:</label>
                <select name="equipo" id="equipo" class="form-control">
                  <option value="">Seleccione el equipo</option>
                  <option value="Computadora">Computadora</option>
                  <option value="Pantalla">Pantalla</option>
                  <option value="Retroproyector">Retroproyector</option>
                  <option value="Video Beam">Video Beam</option>
                  <option value=" Radiograbadora">Radiograbadora</option>
                  <option value="Extensión eléctrica">Extensión eléctrica</option>
                  <option value="Parlantes">Parlantes</option>
                  <option value="Televisor">Televisor</option>
                  <option value="Regleta">Regleta</option>
                  <option value="10">Otro</option>
                </select>
                <br>
                <label for="fecha">Fecha:</label>
                <input type="date" class="form-control" name="fecha">
                <hr>
                <input type="submit" name="buscarPrestamoAudiovisualTerminado" value="Buscar" class="btn-success btn-lg">
                <br><br>
            </form>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>