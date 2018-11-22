<?php

namespace SistemaMedico;

use Illuminate\Database\Eloquent\Model;

class FichaAntropometica extends Model
{
    protected $table = "fichaantropometrica";
    public $timestamps = false;
    protected $fillable = [
        'idatleta',
        'NombreyApellido',
        'EvaluacionN',
        'FechadeEvaluacion',
        'Sexo',
        'FechadeNacimiento',
        'Mestruacion',
        'Antropometrista',
        'Anotador',
        'idfat',
        'TOMA1',
        'TOMA2',
        'TOMA3',
        'PromedioOMediana',
    ];

}
