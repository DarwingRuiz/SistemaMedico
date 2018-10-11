<?php

namespace SistemaMedico;

use Illuminate\Database\Eloquent\Model;

class Ccap extends Model
{
    protected $table="ccap";
    public $timestamps=false;
    protected $fillable=[
        'idatleta',
        'idcca',
        'nombre',
        'valor',
    ];

}
