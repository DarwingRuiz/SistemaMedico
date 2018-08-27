<?php

namespace SistemaMedico;

use Illuminate\Database\Eloquent\Model;

class Alergias extends Model
{
    protected $table='alergia';
    protected $primaryKey='id';
    public $timestamps=false;
    protected $fillable=[
        'alergia',
        'descripcion',
        'idatleta',
    ];
}
