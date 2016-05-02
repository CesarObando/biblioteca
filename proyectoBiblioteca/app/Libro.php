<?php

namespace gestorBiblioteca;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'libro';

    protected $fillable = ['numeroInscripcion','signatura','fecha','autor','titulo','edicion','lugar','editorial','ano','observaciones'];
}
