<?php $__env->startSection('content'); ?>
<div class="container">
  <h1> Buscar préstamos a estudiantes</h1>
  <br>
  <form name="buscarPrestamoLibroEstudiante" action="<?php echo URL::to("libro/listarPrestamosEstudiante"); ?>">
    <label for="autor">Autor:</label>
    <input type="text" class="form-control" name="autor">
    <br>
    <label for="titulo">Título:</label>
    <input type="text" class="form-control" name="titulo">
    <br>
    <label for="fecha">Fecha de préstamo:</label>
    <input type="date" class="form-control" name="fecha">
    <br>
    <label for="vence">Fecha de vencimiento:</label>
    <input type="date" class="form-control" name="vence">
    <br>
    <label for="nombre">Nombre del solicitante:</label>
    <input type="text" class="form-control" name="nombre">
    <hr>
    <input type="submit" name="buscarPrestamoLibro" value="Buscar" class="btn-success btn-lg">
    <br><br>
  </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>