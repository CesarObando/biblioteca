<?php $__env->startSection('content'); ?>
<div class="container">
            <div class="text-center">
                <h3 class="h3">Dirección Regional de Enseñanza Cartago</h3>
                <h3 class="h3">Red de Alcance Bibliotecólogos Escolares Cartago</h3>
                <h2 class="h2">Escuela Fray José Antonio de Liendo y Goicoechea</h2>
                <h2 class="h2">Biblioteca Omar Flores</h2>
            </div>
            <h1>Buscar audiovisuales</h1>
            <form name="buscarAudiovisual" action="<?php echo URL::to("audiovisual/listar"); ?>">
                <label for="equipo">Equipo:</label>
                <select name="equipo" id="equipo" class="form-control">
                    <option value="">Seleccione el equipo</option>
                    <option value="1">Computadora</option>
                    <option value="2">Pantalla</option>
                    <option value="3">Retroproyector</option>
                    <option value="4">Video Beam</option>
                    <option value="5">Radiograbadora</option>
                    <option value="6">Extensión eléctrica</option>
                    <option value="7">Parlantes</option>
                    <option value="8">Televisor</option>
                    <option value="9">Regleta</option>
                    <option value="10">Otro</option>
                </select>
                <label for="marca">Marca:</label>
                <input type="text" class="form-control" name="marca">
                <hr>
                <input type="submit" name="buscarAudiovisual" value="Buscar" class="btn-success btn-lg">
            </form>


        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>