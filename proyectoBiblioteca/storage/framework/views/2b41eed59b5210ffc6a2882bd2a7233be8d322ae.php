<?php $__env->startSection('content'); ?>
<div class="container">
  <h1>Buscar préstamos a docentes terminados</h1>
  <br>
  <form name="buscarPrestamoLibroProfesorTerminado" action="<?php echo URL::to("libro/listarPrestamosDocenteTerminados"); ?>">
    <label for="nombreDocente">nombreDocente:</label>
    <input type="text" class="form-control" name="nombreDocente" id="signatura">
    <br>
    <label for="seccion">Sección:</label>
    <input type="text" class="form-control" name="seccion">
    <br>
    <label for="fecha">Fecha:</label>
    <input type="date" class="form-control" name="fecha">
    <br>
    <label for="materia">Materia:</label>
    <select name="materia" id="materia" class="form-control">
      <option value="">Seleccione la materia del libro</option>
      <option value="1">Matemáticas</option>
      <option value="2">Estudios Sociales</option>
      <option value="3">Ciencias</option>
      <option value="4">Español</option>
      <option value="5">Programas de estudio</option>
    </select>
    <hr>
    <input type="submit" name="buscarPrestamoLibroProfesorTerminado" value="Buscar" class="btn-success btn-lg">
    <br><br>
  </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>