<?php

namespace SistemaMedico;

use Illuminate\Database\Eloquent\Model;

class Deporte extends Model
{
    protected $table='deporte';
    // protected $primaryKey='id_deporte';
    protected $fillable=['nombre'];

   public function atleta(){
    	return $this->belongsToMany('\SistemaMedico\Atleta','Atleta_Categoria_Deporte')
     ->withPivot('atleta_id');
   }
   public function categoria(){
   return $this->belongsToMany('\SistemaMedico\Categoria','Atleta_Categoria_Deporte')
   ->withPivot('categoria_id');
   }
}
