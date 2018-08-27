<?php

namespace SistemaMedico;

use Illuminate\Database\Eloquent\Model;

class ConsiteApoyo extends Model
{
    protected $table='consite_apoyo';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
        'preguntas',
        'respuesta',
        'idatleta',
    ];
}
