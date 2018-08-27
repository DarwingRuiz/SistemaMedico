<?php

namespace SistemaMedico;

use Illuminate\Database\Eloquent\Model;

class AparatoLocomotor extends Model
{
    protected $table='aparato_ locomotor';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'pregunta',
        'respuesta',
        'idatleta',
        'detalles',
    ];
}
