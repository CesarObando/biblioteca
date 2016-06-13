<?php $__env->startSection('content'); ?>
<div class="container">
            <h1>Préstamo de material audiovisual</h1>
            <br>
            <?php echo Form::model($audiovisual,['route'=>['prestamoAudiovisual.store',$audiovisual->id],'method'=>'post']); ?>

            <div class="form-group">
            <?php echo Form::hidden('id',null,['class'=>'form-control']); ?>

            <?php echo Form::label('equipo','Equipo:'); ?>

            <?php echo Form::text('equipo',null,['class'=>'form-control','disabled'=>'']); ?>

          </div>
            <div class="form-group">
            <?php echo Form::label('marca','Marca:'); ?>

            <?php echo Form::text('marca',null,['class'=>'form-control','disabled'=>'']); ?>

          </div>
          <div class="form-group">
          <?php echo Form::label('modelo','Modelo:'); ?>

          <?php echo Form::text('modelo',null,['class'=>'form-control','disabled'=>'']); ?>

          </div>
          <div class="form-group">
          <?php echo Form::label('numeroSerie','Número de serie:'); ?>

          <?php echo Form::text('numeroSerie',null,['class'=>'form-control','disabled'=>'']); ?>

        </div>

                <label for="nombreSolicitante">Nombre del solicitante:</label>
                <input type="text" class="form-control" name="nombreSolicitante" id="signatura" required="">
                <br>
                <label for="condicion">Condición:</label>
                <select name="condicion" id="condicion" class="form-control" required="" onchange="especificarOtraCondicion()">
                    <option value="">Seleccione la condición del solicitante</option>
                    <option value="Docente">Docente</option>
                    <option value="Administrativo">Administrativo</option>
                    <option value="Estudiante">Estudiante</option>
                    <option value="4">Otro</option>
                </select>
                <label for="otro" id="l_otracondicion" style="visibility: hidden">Otro:</label>
                <input type="text" class="form-control" name="otracondicion" id="otracondicion" style="visibility: hidden">
                <br>

                <label for="otro" id="l_otro" style="visibility: hidden">Otro:</label>
                <input type="text" class="form-control" name="otro" id="otro" style="visibility: hidden">
                <br>
                <label for="finesPrestamo">Fines del préstamo:</label>
                <select name="finesPrestamo" id="finesPrestamo" class="form-control" required="" onchange="especificarOtroMotivo()">
                    <option value="">Seleccione el equipo</option>
                    <option value="Desarollo curricular">Desarollo curricular</option>
                    <option value="Reunión de padres de familia">Reunión de padres de familia</option>
                    <option value="Escuela de padres">Escuela de padres</option>
                    <option value="Capacitación docente">Capacitación docente</option>
                    <option value="Consejo de profesores">Consejo de profesores</option>
                    <option value="6">Otro</option>
                </select>
                <label for="otromotivo" id="l_otromotivo" style="visibility: hidden">Otro:</label>
                <input type="text" class="form-control" name="otromotivo" id="otromotivo" style="visibility: hidden">
                <br>
                <label for="fecha">Fecha:</label>
                <input type="date" class="form-control" name="fecha" required="">
                <br>
                <label for="hora">Hora:</label>
                <input type="time" class="form-control" name="hora" required="">
                <hr>
                <?php echo Form::submit('Prestar',['class'=>'btn-success btn-lg']); ?>

            <?php echo Form::close(); ?>

            <script>
                function especificarOtroEquipo(){
                    opcion = document.getElementById("equipo");
                    if(opcion.value === "10"){
                        document.getElementById("l_otro").setAttribute("style","visibility: visible");
                        document.getElementById("otro").setAttribute("style","visibility: visible");
                    }else{
                        document.getElementById("l_otro").setAttribute("style","visibility: hidden");
                        document.getElementById("otro").setAttribute("style","visibility: hidden");
                    }
                }
                function especificarOtroMotivo(){
                    opcion = document.getElementById("finesPrestamo");
                    if(opcion.value === "6"){
                        document.getElementById("l_otromotivo").setAttribute("style","visibility: visible");
                        document.getElementById("otromotivo").setAttribute("style","visibility: visible");
                    }else{
                        document.getElementById("l_otromotivo").setAttribute("style","visibility: hidden");
                        document.getElementById("otromotivo").setAttribute("style","visibility: hidden");
                    }
                }
                function especificarOtraCondicion(){
                    opcion = document.getElementById("condicion");
                    if(opcion.value === "4"){
                        document.getElementById("l_otracondicion").setAttribute("style","visibility: visible");
                        document.getElementById("otracondicion").setAttribute("style","visibility: visible");
                    }else{
                        document.getElementById("l_otracondicion").setAttribute("style","visibility: hidden");
                        document.getElementById("otracondicion").setAttribute("style","visibility: hidden");
                    }
                }
            </script>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>