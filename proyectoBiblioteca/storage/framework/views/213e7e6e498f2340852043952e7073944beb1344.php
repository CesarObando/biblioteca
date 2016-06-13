<?php $__env->startSection('content'); ?>
<div class="container">
  <h1>Insertar Nuevo Audiovisual</h1>

  <?php echo Form::open(['route'=>'audiovisual.store','method'=>'post']); ?>


  <label for="equipo">Equipo:</label>
  <select name="equipo" id="equipo" class="form-control" required="" onchange="especificarOtro()">
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
    <option value="Otro">Otro</option>
  </select>
  <label for="otro" id="l_otro" style="visibility: hidden">Otro:</label>
  <input type="text" class="form-control" name="otro" id="otro" style="visibility: hidden">
  <label for="marca">Marca:</label>
  <input type="text" class="form-control" name="marca" required="">
  <label for="modelo">Modelo:</label>
  <input type="text" class="form-control" name="modelo" required="">
  <label for="numeroSerie">Número de serie:</label>
  <input type="text" class="form-control" name="numeroSerie" required="">
  <hr>
  <input type="submit" name="insertarAudiovisual" value="Insertar" class="btn-success btn-lg">
  <?php echo Form::close(); ?>


  <script>
  function especificarOtro(){
    opcion = document.getElementById("equipo");
    if(opcion.value === "Otro"){
      document.getElementById("l_otro").setAttribute("style","visibility: visible");
      document.getElementById("otro").setAttribute("style","visibility: visible");
    }else{
      document.getElementById("l_otro").setAttribute("style","visibility: hidden");
      document.getElementById("otro").setAttribute("style","visibility: hidden");
    }
  }
  </script>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>