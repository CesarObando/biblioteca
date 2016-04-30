<?php $__env->startSection('content'); ?>
<div class="container">
            <div class="text-center">
                <h3 class="h3">Dirección Regional de Enseñanza Cartago</h3>
                <h3 class="h3">Red de Alcance Bibliotecólogos Escolares Cartago</h3>
                <h2 class="h2">Escuela Fray José Antonio de Liendo y Goicoechea</h2>
                <h2 class="h2">Biblioteca Omar Flores</h2>
            </div>
            <h1>Insertar Nuevo Audiovisual</h1>

            <?php echo Form::open(['route'=>'audiovisual.store','method'=>'post']); ?>


            <div class="form-group">
            <?php echo Form::label('equipo','Equipo:'); ?>

            <?php echo Form::select('equipo', ['Computadora' => 'Computadora', 'Pantalla' => 'Pantalla','Retroproyector'=>'Retroproyector',
            'Video Beam'=>'Video Beam','Radiograbadora'=>'Radiograbadora','Extensión eléctrica'=>'Extensión eléctrica','Parlantes'=>'Parlantes',
            'Televisor'=>'Televisor','Regleta'=>'Regleta','10'=>'Otro'],null,['class'=>'form-control','onchange'=>'especificarOtro()']); ?>

            </div>
            <label for="otro" id="l_otro" style="visibility: hidden">Otro:</label>
            <input type="text" class="form-control" name="equipo" id="otro" style="visibility: hidden">
            <div class="form-group">
            <?php echo Form::label('marca','Marca:'); ?>

            <?php echo Form::text('marca',null,['class'=>'form-control','placeholder'=>'Ingrese la marca']); ?>

            </div>
            <div class="form-group">
            <?php echo Form::label('modelo','Modelo:'); ?>

            <?php echo Form::text('modelo',null,['class'=>'form-control','placeholder'=>'Ingrese el modelo']); ?>

            </div>
            <div class="form-group">
            <?php echo Form::label('numeroSerie','Número de serie:'); ?>

            <?php echo Form::text('numeroSerie',null,['class'=>'form-control','placeholder'=>'Ingrese el número de serie']); ?>

            </div>
            <?php echo Form::submit('Registrar',['class'=>'btn-success btn-lg']); ?>

            <?php echo Form::close(); ?>


            <script>
                function especificarOtro(){
                    opcion = document.getElementById("equipo");
                    if(opcion.value === "10"){
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