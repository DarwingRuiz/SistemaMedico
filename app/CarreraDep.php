<?php

namespace SistemaMedico;

use Illuminate\Database\Eloquent\Model;

class CarreraDep extends Model
{
    protected $table='carreradeportiva';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'prueba',
        'resultado',
        'fechalugar',
        'evento',
        'idDatosAtleta',

    ];
}
