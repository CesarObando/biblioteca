<?php

namespace gestorBiblioteca;

use Illuminate\Database\Eloquent\Model;

class ServicioInternet extends Model
{
  protected $table = 'prestamo_servicio_internet';
  public $timestamps = false;
  protected $fillable = ['nombreSolicitante','seccion','tema','fecha', 'horaEntrada', 'horaSalida'];
}
