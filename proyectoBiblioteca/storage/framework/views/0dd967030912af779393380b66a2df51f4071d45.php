<?php $__env->startSection('content'); ?>
<div class="container">
            <div class="text-center">
                <h3 class="h3">Dirección Regional de Enseñanza Cartago</h3>
                <h3 class="h3">Red de Alcance Bibliotecólogos Escolares Cartago</h3>
                <h2 class="h2">Escuela Fray José Antonio de Liendo y Goicoechea</h2>
                <h2 class="h2">Biblioteca Omar Flores</h2>
            </div>
            <h1>Modificar Audiovisual</h1>
            <?php echo Form::model($audiovisual,['route'=>['audiovisual.update',$audiovisual->id],'method'=>'PUT']); ?>


                <div class="form-group">
                <?php echo Form::label('equipo','Equipo:'); ?>

                <?php echo Form::select('equipo', ['Computadora' => 'Computadora',
                                          'Pantalla' => 'Pantalla',
                                          'Retroproyector'=>'Retroproyector',
                                          'Video Beam'=>'Video Beam',
                                          'Radiograbadora'=>'Radiograbadora',
                                          'Extensión eléctrica'=>'Extensión eléctrica',
                                          'Parlantes'=>'Parlantes',
                                          'Televisor'=>'Televisor',
                                          'Regleta'=>'Regleta',
                                          'Otro'=>'Otro'],null,['class'=>'form-control',
                                          'placeholder'=>'Seleccione el equipo','onchange'=>'especificarOtro()']); ?>

                </div>
                <div class="form-group">
                <?php echo Form::label('otro','Otro:',['class'=>'form-control','style'=>'visibility: hidden']); ?>

                <?php echo Form::text('otro',null,['class'=>'form-control','style'=>'visibility: hidden']); ?>

                </div>
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
              <?php echo Form::submit('Editar',['class'=>'btn-warning btn-lg']); ?>

            <?php echo Form::close(); ?>

        </div>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>