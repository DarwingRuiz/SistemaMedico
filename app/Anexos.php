<?php

namespace SistemaMedico;

use Illuminate\Database\Eloquent\Model;

class Anexos extends Model
{
    protected $table='anexos';
    protected $fillable=[
        'idatleta',
        'OtrosHallazgo',
        'Recomendaciones',
        'Observaciones'
    ];
}
