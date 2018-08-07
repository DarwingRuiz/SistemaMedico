<?php

namespace SistemaMedico;

use Illuminate\Database\Eloquent\Model;

class Atleta extends Model
{
    //
     protected $table='datosatleta';
    protected $primaryKey='id';
    public $timestamps = false;

    protected $fillable=[
        'foto',
        'pnombre',
        'snombre',
        'papellido',
        'sapellido',
        'nombrecompleto',
        'edad',
        'fecharegistro',
        'genero',
        'numcedula',
        'correoe',
        'tconvencional',
        'tcelular',
        'tcelular',
        'seguro',
        'hospital',
        'direccion',
        'departamento',
        'municipio',
        'nombremadre',
        'telmadre',
        'nombrepadre',
        'telpadre',
        'emergencia',
        'diremergencia',
        'embarazo'
    ];
}
