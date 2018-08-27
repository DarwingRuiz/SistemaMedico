<?php

namespace SistemaMedico;

use Illuminate\Database\Eloquent\Model;

class Apoyo_Economico extends Model
{
    protected $table='apoyo_economico';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'preguntas',
        'respuesta',
        'idatleta',
        'detalles',
    ];
}

