<?php

namespace SistemaMedico;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
     protected $table='hospital';
     protected $primaryKey='id';
      protected $fillable=['nombre'];
      public $timestamps = false;

}
