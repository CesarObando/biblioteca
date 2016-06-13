<?php $__env->startSection('content'); ?>
<div class="container">
            <div class="text-center">
                <h3 class="h3">Dirección Regional de Enseñanza Cartago</h3>
                <h3 class="h3">Red de Alcance Bibliotecólogos Escolares Cartago</h3>
                <h2 class="h2">Escuela Fray José Antonio de Liendo y Goicoechea</h2>
                <h2 class="h2">Biblioteca Omar Flores</h2>
            </div>
            <h1>Modificar material didactico</h1>
            <?php echo Form::model($materialDidactico,['route'=>['materialDidactico.update',$materialDidactico->id],'method'=>'PUT']); ?>


                <div class="form-group">
                <?php echo Form::label('nombre','Equipo:'); ?>

                <?php echo Form::select('nombre', ['Mapa' => 'Mapa',
                                           'Juego'=>'Juego',
                                           'Abaco'=>'Abaco',
                                           'Lapices'=>'Lapices',
                                           'Laminas'=>'Laminas',
                                           '6'=>'Otro'],null,
                                           ['class'=>'form-control',
                                           'placeholder'=>'Seleccione el material didactico']); ?>

                </div>

                <div class="form-group">
                <?php echo Form::label('marca','Marca:'); ?>

                <?php echo Form::text('marca',null,['class'=>'form-control','placeholder'=>'Ingrese la marca']); ?>

                </div>
                <div class="form-group">
                <?php echo Form::label('especificacion','Especificación:'); ?>

                <?php echo Form::text('especificacion',null,['class'=>'form-control','placeholder'=>'Ingrese el modelo']); ?>

                </div>
                <div class="form-group">
                <?php echo Form::label('numeroSerie','Número de serie:'); ?>

                <?php echo Form::text('numeroSerie',null,['class'=>'form-control','placeholder'=>'Ingrese el número de serie']); ?>

              </div>
              <?php echo Form::submit('Editar',['class'=>'btn-warning btn-lg']); ?>

            <?php echo Form::close(); ?>


        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>