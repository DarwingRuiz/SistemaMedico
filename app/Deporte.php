<?php

namespace SistemaMedico;

use Illuminate\Database\Eloquent\Model;

class Deporte extends Model
{
    protected $table='deporte';
    protected $primaryKey='id';
    protected $fillable=['nombre'];
}
