<?php
 
namespace SistemaMedico;

use Illuminate\Database\Eloquent\Model;

class Atleta extends Model
{
    //
    protected $table='datosatleta';
    //protected $primaryKey = 'id_atleta';
    public $timestamps = false;

    protected $fillable=[
        'foto',
        'pnombre',
        'snombre',
        'papellido',
        'sapellido',
        'nombrecompleto',
        'edad',
        'fecharegistro',
        'genero',
        'numcedula',
        'correoe',
        'tconvencional',
        'tcelular',
        'tcelular',
        'seguro',
        'hospital',
        'direccion',
        'departamento',
        'municipio',
        'nombremadre',
        'telmadre',
        'nombrepadre',
        'telpadre',
        'emergencia',
        'diremergencia',
        'embarazo'];

    public function categoria(){
        // return $this->belongsToMany('\SistemaMedico\Categoria','atleta_categoria_deporte')
        //     ->withPivot('categoria_id','atleta_id');
        return $this->belongsToMany('\SistemaMedico\Categoria');
        // return $this->belongsToMany('App\User')->using('App\UserRole');
    }

    // public function deporte(){
    //     return $this->belongsToMany('\SistemaMedico\Deporte','Atleta_Categoria_Deporte')
    //         ->withPivot('deporte_id','categoria_id');
    // }
    
}
