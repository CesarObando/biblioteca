<?php

namespace gestorBiblioteca;

use Illuminate\Database\Eloquent\Model;

class PrestamoLibroDocente extends Model
{
    protected $table = 'prestamo_libro_docente';
    protected $fillable = ['libro','nombreSolicitante','fecha','materia','seccion','cantidadEstudiantes','cantidadEstudiantesAdecuacion','terminado'];
}
