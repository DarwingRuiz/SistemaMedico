<?php

namespace SistemaMedico;

use Illuminate\Database\Eloquent\Model;

class CarreraDepoFamiliar extends Model
{
    protected $table='carrera_deportiva_familiar';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'resultado',
        'fechalugar',
        'evento',
        'idDatosAtleta',

    ];
}