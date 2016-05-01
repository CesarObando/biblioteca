<?php

namespace gestorBiblioteca;

use Illuminate\Database\Eloquent\Model;

class MaterialComplementario extends Model
{
    protected $table = 'material_complementario';
    protected $timestamps = 'false';
    protected $fillable = 'nombre', 'marca', 'especificacion', 'numeroSerie', 'prestado', 'descartado';
}
