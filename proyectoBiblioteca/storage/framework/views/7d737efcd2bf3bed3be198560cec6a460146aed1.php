<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="css/style_table.css">
</head>
<body>
    <div class="text-center">
      <h3 class="h3">Dirección Regional de Enseñanza Cartago</h3>
      <h3 class="h3">Red de Alcance Bibliotecólogos Escolares Cartago</h3>
      <h2 class="h2">Escuela Fray José Antonio de Liendo y Goicoechea</h2>
      <h2 class="h2">Biblioteca Omar Flores</h2>
    </div>
  <div class="table-responsive container">
    <br>
    <br>
    <h1>Préstamos de libros a estudiantes</h1>
    <br>
    <table class="table table-condensed table-hover table-bordered table-responsive">
      <thead>
        <tr>
          <th>Nombre del solicitante</th>
          <th>Correo Electrónico</th>
          <th>Teléfono</th>
          <th>Dirección</th>
          <th>Sección</th>
          <th>Título del Libro</th>
          <th>Fecha de préstamo</th>
          <th>Vence</th>
        </tr>
      </thead>
      <?php foreach($prestamosLibroEstudiante as $prestamo): ?>
      <tbody>
        <tr>
          <td><?php echo e($prestamo->nombreSolicitante); ?></td>
          <td><?php echo e($prestamo->correoSolicitante); ?></td>
          <td><?php echo e($prestamo->telefonoSolicitante); ?></td>
          <td><?php echo e($prestamo->direccionSolicitante); ?></td>
          <td><?php echo e($prestamo->seccionSolicitante); ?></td>
          <td><?php echo e($prestamo->titulo); ?></td>
          <td><?php echo e($prestamo->fechaPrestamo); ?></td>
          <td><?php echo e($prestamo->fechaVencimiento); ?></td>
        </tr>

      </tbody>
      <?php endforeach; ?>
    </table>
    <br>
    <br>
  </div>
</body>

</html>
