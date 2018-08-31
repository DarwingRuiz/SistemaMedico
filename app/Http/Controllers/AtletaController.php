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
use SistemaMedico\Cuestionariomedicamentos;
Use SistemaMedico\Http\Requests\AtletaFormRequest;
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
        $atleta=DB::table('datosatleta as atle')
                ->join('atleta_categoria_deporte as acp','acp.atleta_id','=','atle.id_atleta')
                ->join('categorias as cat','cat.id_categoria','=','acp.categoria_id')
                ->join('deporte as dep','dep.id_deporte','=','cat.iddeporte')
                ->select('atle.*','cat.categoria as categoria','dep.nombre as deporte')
               // ->where('atle.id_atleta','=','acp.id_atleta')
                ->orderBy('atle.pnombre','desc')->get();
        // $cuest_medico=Cuestionariomedicamentos::find($atleta->id_atleta);
        // dd($cuest_medico);
        
        // foreach($atleta as $d) {
        //     $cm=DB::table('medicamentos as med')
        //     ->where('med.idatleta','=',$d->id_atleta)->get();
        // }
        //$cm=Cuestionariomedicamentos::get();
        
        //dd($cm);
        return view('Atleta.index',compact('atleta','cm'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamento=DB::table('departamento')->get();
        //dd($departamento);
        $deporte=Deporte::all();
        $hospital=DB::table('hospital')->get();
        return view('Atleta.create',compact('deporte','hospital','departamento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AtletaFormRequest $request)
    {
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
        if ($request->get('genero')=="Masculino")
        {
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
        // $atleta->departamento=$request->get('departamento');
        $atleta->municipio=$request->get('municipio');
        $atleta->nombremadre=$request->get('nombremadre');
        $atleta->telmadre=$request->get('telmadre');
        $atleta->nombrepadre=$request->get('nombrepadre');
        $atleta->telpadre=$request->get('telpadre');
        $atleta->emergencia=$request->get('emergencia');
        $atleta->diremergencia=$request->get('diremergencia');
        $atleta->save();
        
        $atleta->categoria()->attach($request->get('categoria'));
        return redirect('/atleta');
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
