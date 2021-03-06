<?php 

namespace SistemaMedico;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    //protected $primaryKey='id_categoria';
    protected $fillable = ['categoria','iddeporte'];
     public $timestamps = false;

    public function atleta(){
      // return $this->belongsToMany('\SistemaMedico\Atleta','atleta_categoria_deporte')
      // ->withPivot('atleta_id','categoria_id');
         return $this->belongsToMany('\SistemaMedico\Atleta ');
      }

      // public function deporte(){
      //  	return $this->belongsToMany('\SistemaMedico\Deporte','Atleta_Categoria_Deporte')
      //   ->withPivot('deporte_id','id_atleta');
      // }
}
