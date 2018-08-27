<?php

namespace SistemaMedico;

use Illuminate\Database\Eloquent\Model;

class CarreraDeportiva extends Model
{
    protected $table='carrera_deportiva';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'preguntas',
        'respuesta',
        'detalles',
        'idatleta',
    ];
}