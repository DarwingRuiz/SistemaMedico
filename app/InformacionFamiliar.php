<?php

namespace SistemaMedico;

use Illuminate\Database\Eloquent\Model;

class InformacionFamiliar extends Model
{
    protected $table='informacion_familiar';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'preguntas',
        'respuesta',
        'idatleta',
        'detalles',
    ];
}
