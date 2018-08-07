<?php

namespace SistemaMedico\Http\Controllers;

use Illuminate\Http\Request;
use SistemaMedico\Atleta;
use storage;
use Illuminate\Support\Facades\Input;
//use SistemaMedico\Http\Requests\AtletaFormRequest;
use Carbon\Carbon;
use Response;
use DB;
use SistemaMedico\Categoria;
use SistemaMedico\Deporte;
//use Laracasts\Flash\Flash;

//use SistemaMedico\Http\Requests;
//use SistemaMedico\Http\Controllers\Controller;


class AtletaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atleta=Atleta::orderBy('pnombre','ASC')->paginate(5);
      $atleta->each(function ($atleta){
          $atleta->deporte;
          $atleta->categoria;
      });
       /* dd($atleta);*/
        return view('Atleta.index')->with("atletas",$atleta);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //variables deporte y categoria

        //$states = Deporte::list('nombre','id');
        //$deporte = DB::table('deporte')->pluck("nombre","id")->all();
        //$deporte=DB::table('deporte')->get();
        $deporte=Deporte::all();
        $hospital=DB::table('hospital')->get();
        return view('Atleta.create',compact('deporte','hospital'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $atleta=new Atleta;
        $mytime = Carbon::now('America/Managua');
        if (Input::hasFile('foto'))
        {
            $file=$request->file('foto');
            $path=public_path().'/imagenes/perfiles/';
            $name=$request->get('pnombre').$file->getClientOriginalName();
            $file->move($path,$name);
            $atleta->foto=$name;
        }
        $atleta->pnombre=$request->get('pnombre');
        $atleta->snombre=$request->get('snombre');
        $atleta->papellido=$request->get('papellido');
        $atleta->sapellido=$request->get('sapellido');
        $atleta->nombrecompleto=$request->get('pnombre')." ".$request->get('snombre')." ".$request->get('papellido')." ".$request->get('sapellido');
        $atleta->edad=$request->get('edad');
        $atleta->fecharegistro=$mytime->toDateTimeString();
        $atleta->genero=$request->get('genero');
        $atleta->numcedula=$request->get('numcedula');
        $atleta->correoe=$request->get('correoe');
        $atleta->tconvencional=$request->get('tconvencional');
        $atleta->tcelular=$request->get('tcelular');
        if ($request->get('genero')=="Masculino"){
            $atleta->embarazo="no";
        }
        elseif ($request->get('genero')=="Femenino"){
            $atleta->embarazo=$request->get('embarazo');
        }
        $atleta->tseguro=$request->get('seguro');

        if ($request->get('seguro')=="Si"){
            $atleta->hospital=$request->get('hospitalafiliado');
        }
        else{
            $atleta->hospital="1";
        }
        $atleta->direccion=$request->get('direccion');
        $atleta->departamento=$request->get('departamento');
        $atleta->municipio=$request->get('municipio');
        $atleta->nombremadre=$request->get('nombremadre');
        $atleta->telmadre=$request->get('telmadre');
        $atleta->nombrepadre=$request->get('nombrepadre');
        $atleta->telpadre=$request->get('telpadre');
        $atleta->emergencia=$request->get('emergencia');
        $atleta->diremergencia=$request->get('diremergencia');
        $atleta->save();

        $atleta->deporte()->sync($request->deporte);
        $atleta->categoria()->sync($request->categoria);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
