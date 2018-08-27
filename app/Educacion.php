<?php

namespace SistemaMedico;

use Illuminate\Database\Eloquent\Model;

class Educacion extends Model
{
    protected $table='educacion';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'pregunta',
        'respuesta',
        'idatleta',
        'detalles',
    ];
}

