<?php

namespace gestorBiblioteca;

use Illuminate\Database\Eloquent\Model;

class SalaAudiovisuales extends Model
{
  protected $table = 'prestamo_sala_audiovisuales';
  public $timestamps = false;
  protected $fillable = ['nombreSolicitante','tema','seccion','totalEstudiantes','fecha','horaEntrada','horaSalida','observaciones'];
}
