<?php $__env->startSection('content'); ?>
<div class="container">
            <h1>Buscar libros</h1>
            <br>
            <form name="buscarLibro" action="<?php echo URL::to("libro/listar"); ?>">
                <label for="autor">Autor:</label>
                <input type="text" class="form-control" name="autor">
                <br>
                <label for="titulo">Título:</label>
                <input type="text" class="form-control" name="titulo">
                <br>
                <label for="editorial">Editorial:</label>
                <input type="text" class="form-control" name="editorial">
                <br>
                <label for="ano">Año:</label>
                <input type="date" class="form-control" name="ano">
                 <br>
                <hr>
                <input type="submit" name="buscarLibro" value="Buscar" class="btn-success btn-lg">
                <br><br>
            </form>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>