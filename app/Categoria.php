<?php

namespace SistemaMedico;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    // protected $primaryKey='id_categoria';
    protected $fillable = ['categoria','iddeporte'];

    public function atleta(){
      return $this->belongsToMany('\SistemaMedico\Atleta','Atleta_Categoria_Deporte')
      ->withPivot('id_deporte');
      }

      public function deportes(){
       	return $this->belongsToMany('\SistemaMedico\Deporte','Atleta_Categoria_Deporte')
        ->withPivot('id_atleta');
      }
}
