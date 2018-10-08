<?php

namespace SistemaMedico;

use Illuminate\Database\Eloquent\Model;

class ExamenFisico extends Model
{
    protected $table = 'exfisipri';
    public $timestamps = false;
    protected $fillable = [
        'idatleta',
        'idexfisi',
        'normal',
        'Hallazgos_Arnomales'
    ];
}
