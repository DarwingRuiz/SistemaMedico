<?php

namespace SistemaMedico\Http\Controllers;

use Illuminate\Http\Request;

use SistemaMedico\Categoria;

class WebServicesController extends Controller
{
      public function byCategoria($id)
     {
       return Categoria::where('iddeporte',$id)->get();
     }
}
