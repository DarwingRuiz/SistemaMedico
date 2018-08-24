<?php

namespace SistemaMedico\Http\Controllers;

use Illuminate\Http\Request;

use SistemaMedico\Categoria;
Use DB;

class WebServicesController extends Controller
{
      public function byCategoria($id)
     {
       return Categoria::where('iddeporte',$id)->get();
     }

      public function byMunicipio($id)
     {
       // return Categoria::where('iddeporte',$id)->get();
     	return DB::table('municipio')->where('Departamento_id','=',$id)->get();
     }
}
