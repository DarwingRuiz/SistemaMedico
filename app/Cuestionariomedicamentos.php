<?php

namespace SistemaMedico;

use Illuminate\Database\Eloquent\Model;

class Cuestionariomedicamentos extends Model
{
 protected $table='medicamentos';
 protected $primaryKey='id';
 public $timestamps=false;

 protected $fillable=[
     'medicamentos',
     'descripcion',
     'idatleta',
 ];

    public function  atleta(){
        return $this->belongsToMany('\SistemaMedico\Atleta');
    }
}
