<?php

namespace SistemaMedico;

use Illuminate\Database\Eloquent\Model;

class Situacion_laboral extends Model
{
    protected $table='situacion_laboral';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'preguntas',
        'respuesta',
        'idDatosAtleta',
    ];
}
