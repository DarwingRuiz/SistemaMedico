<?php

namespace SistemaMedico\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use SistemaMedico\Atleta;
use SistemaMedico\ExamenFisico;
use SistemaMedico\Anexos;
use SistemaMedico\Ccap;
use SistemaMedico\FichaAntropometica;
use Carbon\Carbon;

class ExamenFisicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ExamenFisico.vistaculera');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inputs = Input::all();
        $id = $inputs['id'];
        $atleta=Atleta::where('id','=', $id)->get();
        // dd($atleta);
        // $nombre = $inputs['nombre'];
        return view('ExamenFisico.create', compact('atleta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'tengo que retornar este  id ';
        // $atleta = Atleta::findOrFail($id);
        // return view('vistas.vista_1', compact('atleta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'tengo que retornar este  id ';
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
