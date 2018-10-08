<?php

namespace SistemaMedico\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use SistemaMedico\Atleta;
use SistemaMedico\ExamenFisico;

class ExamenFisicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "akldsadj";
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
        // cuello
        $examen = new ExamenFisico();
        $examen->idatleta=$request->get('txt_atleta');
        $examen->idexfisi="1";
        if (Input::get('Si_Cuello')) {
            $examen->normal="Si";
            $examen->Hallazgos_Anormales="";
            $examen->save();
        }
        else {
            $examen->normal = "No";
            $examen->Hallazgos_Anormales = "HA_Cuello";
            $examen->save();
        }
        // espalda
        $examen = new ExamenFisico();
        $examen->idatleta = $request->get('txt_atleta');
        $examen->idexfisi = "2";
        if (Input::get('Si_Espalda')) {
            $examen->normal = "Si";
            $examen->Hallazgos_Anormales = "";
            $examen->save();
        } else {
            $examen->normal = "No";
            $examen->Hallazgos_Anormales = "HA_espalda";
            $examen->save();
        }
        // Hombro
        $examen = new ExamenFisico();
        $examen->idatleta = $request->get('txt_atleta');
        $examen->idexfisi = "3";
        if (Input::get('Si_Hombro')) {
            $examen->normal = "Si";
            $examen->Hallazgos_Anormales = "";
            $examen->save();
        } else {
            $examen->normal = "No";
            $examen->Hallazgos_Anormales = "HA_hombro";
            $examen->save();
        }
        // codo
        $examen = new ExamenFisico();
        $examen->idatleta = $request->get('txt_atleta');
        $examen->idexfisi = "4";
        if (Input::get('Si_Codo')) {
            $examen->normal = "Si";
            $examen->Hallazgos_Anormales = "";
            $examen->save();
        } else {
            $examen->normal = "No";
            $examen->Hallazgos_Anormales = "HA_codo";
            $examen->save();
        }
        // muñeca
        $examen = new ExamenFisico();
        $examen->idatleta = $request->get('txt_atleta');
        $examen->idexfisi = "5";
        if (Input::get('Si_Muñeca')) {
            $examen->normal = "Si";
            $examen->Hallazgos_Anormales = "";
            $examen->save();
        } else {
            $examen->normal = "No";
            $examen->Hallazgos_Anormales = "HA_muñeca";
            $examen->save();
        }
        // cadera
        $examen = new ExamenFisico();
        $examen->idatleta = $request->get('txt_atleta');
        $examen->idexfisi = "6";
        if (Input::get('Si_Cadera')) {
            $examen->normal = "Si";
            $examen->Hallazgos_Anormales = "";
            $examen->save();
        } else {
            $examen->normal = "No";
            $examen->Hallazgos_Anormales = "HA_cadera";
            $examen->save();
        }
        // rodilla
        $examen = new ExamenFisico();
        $examen->idatleta = $request->get('txt_atleta');
        $examen->idexfisi = "7";
        if (Input::get('Si_Rodilla')) {
            $examen->normal = "Si";
            $examen->Hallazgos_Anormales = "";
            $examen->save();
        } else {
            $examen->normal = "No";
            $examen->Hallazgos_Anormales = "HA_rodilla";
            $examen->save();
        }
        // pienra
        $examen = new ExamenFisico();
        $examen->idatleta = $request->get('txt_atleta');
        $examen->idexfisi = "8";
        if (Input::get('Si_Pierna')) {
            $examen->normal = "Si";
            $examen->Hallazgos_Anormales = "";
            $examen->save();
        } else {
            $examen->normal = "No";
            $examen->Hallazgos_Anormales = "HA_pierna";
            $examen->save();
        }
        // dedos
        $examen = new ExamenFisico();
        $examen->idatleta = $request->get('txt_atleta');
        $examen->idexfisi = "9";
        if (Input::get('Si_dedos')) {
            $examen->normal = "Si";
            $examen->Hallazgos_Anormales = "";
            $examen->save();
        } else {
            $examen->normal = "No";
            $examen->Hallazgos_Anormales = "HA_dedos3";
            $examen->save();
        }
        //$examen->
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
