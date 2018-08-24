<?php

namespace SistemaMedico;

use Illuminate\Database\Eloquent\Model;

class Deporte extends Model
{
    protected $table='deporte';
    // protectedotected $primaryKey='id_deporte';
    protected $fillable=['nombre'];

   public function atleta(){
    	return $this->belongsToMany('\SistemaMedico\Atleta','Atleta_Categoria_Deporte')
     ->withPivot('id_atleta','id_categoria');
   }
   public function categoria(){
   return $this->belongsToMany('\SistemaMedico\Categoria','Atleta_Categoria_Deporte')
   ->withPivot('id_categoria','id_atleta');
   }
}
