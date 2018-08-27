<?php

namespace SistemaMedico;

use Illuminate\Database\Eloquent\Model;

class Habitos extends Model
{
    protected $table='habitos';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'preguntas',
        'respuesta',
        'idatleta',
        'detalles',
    ];
}
