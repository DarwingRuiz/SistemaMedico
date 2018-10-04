<?php

namespace SistemaMedico;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Atleta_Categoria_Deporte extends Pivot
{
//  public $table='atleta_deporte_categoria';
    protected $primaryKey='id';
    public $timestamps=false;
}
