<?php

namespace SistemaMedico;

use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    protected $table='habitacion';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'preguntas',
        'respuesta',
        'idatleta',
        'detalles',
    ];
}
