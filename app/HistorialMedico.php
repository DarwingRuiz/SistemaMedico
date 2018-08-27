<?php

namespace SistemaMedico;

use Illuminate\Database\Eloquent\Model;

class HistorialMedico extends Model
{
    protected $table='historial_medico';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=[
      'pregunta',
      'respuesta',
      'detalles',
      'idatleta',

    ];
}
