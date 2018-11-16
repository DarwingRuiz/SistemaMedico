<?php

namespace SistemaMedico;

use Illuminate\Database\Eloquent\Model;

class AparatoLocomotor extends Model
{
    protected $table='aparato_locomotor';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'preguntas',
        'respuesta',
        'idatleta',
        'detalles',
    ];
}
