<?php

namespace SistemaMedico;

use Illuminate\Database\Eloquent\Model;

class HistoralFamiliar extends Model
{
    protected $table='historia_familiar';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'preguntas',
        'respuesta',
        'idatleta',
    ];
}
