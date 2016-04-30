<?php $__env->startSection('content'); ?>
<div class="container">
            <div class="text-center">
                <h3 class="h3">Dirección Regional de Enseñanza Cartago</h3>
                <h3 class="h3">Red de Alcance Bibliotecólogos Escolares Cartago</h3>
                <h2 class="h2">Escuela Fray José Antonio de Liendo y Goicoechea</h2>
                <h2 class="h2">Biblioteca Omar Flores</h2>
            </div>
            <h1>Buscar materiales didacticos</h1>
            <form name="buscarDidactico" action="<?php echo URL::to("materialDidactico/listar"); ?>">
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
                <label for="marca">Marca:</label>
                <input type="text" class="form-control" name="marca">
                <hr>
                <input type="submit" name="buscarAudiovisual" value="Buscar" class="btn-success btn-lg">
            </form>


        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>