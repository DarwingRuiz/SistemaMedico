<?php

namespace SistemaMedico\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use SistemaMedico\Atleta;
use SistemaMedico\ExamenFisico;
use SistemaMedico\Anexos;
use SistemaMedico\Ccap;

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
        //ndd($request->get('txt_atleta'));
            // if (Input::get('Si_Cuello')) {
            //     $examen = new ExamenFisico();
            //     $examen->idatleta=$request->get('txt_atleta');
            //     $examen->idexfisi="1";
            //     $examen->normal="Si";
            //     $examen->Hallazgos_Anormales="";
            //     $examen->save();
            // }
            // else {
            //     $examen = new ExamenFisico();
            //     $examen->idatleta=$request->get('txt_atleta');
            //     $examen->idexfisi="1";
            //     $examen->normal = "No";
            //     $examen->Hallazgos_Anormales = "HA_Cuello";
            //     $examen->save();
            // }
            // // espalda
            // if (Input::get('Si_Espalda')) {
            //     $examen = new ExamenFisico();
            //     $examen->idatleta = $request->get('txt_atleta');
            //     $examen->idexfisi = "2";
            //     $examen->normal = "Si";
            //     $examen->Hallazgos_Anormales = "";
            //     $examen->save();
            // } else {
            //     $examen = new ExamenFisico();
            //     $examen->idatleta = $request->get('txt_atleta');
            //     $examen->idexfisi = "2";
            //     $examen->normal = "No";
            //     $examen->Hallazgos_Anormales = "HA_espalda";
            //     $examen->save();
            // }
            // // Hombro
            // if (Input::get('Si_Hombro')) {

            //     $examen = new ExamenFisico();
            //     $examen->idatleta = $request->get('txt_atleta');
            //     $examen->idexfisi = "3";
            //     $examen->normal = "Si";
            //     $examen->Hallazgos_Anormales = "";
            //     $examen->save();
            // } else {
            //     $examen = new ExamenFisico();
            //     $examen->idatleta = $request->get('txt_atleta');
            //     $examen->idexfisi = "3";
            //     $examen->normal = "No";
            //     $examen->Hallazgos_Anormales = "HA_hombro";
            //     $examen->save();
            // }
            // // codo
            // if (Input::get('Si_Codo')) {
            //     $examen = new ExamenFisico();
            //     $examen->idatleta = $request->get('txt_atleta');
            //     $examen->idexfisi = "4";
            //     $examen->normal = "Si";
            //     $examen->Hallazgos_Anormales = "";
            //     $examen->save();
            // } else {
            //     $examen = new ExamenFisico();
            //     $examen->idatleta = $request->get('txt_atleta');
            //     $examen->idexfisi = "4";
            //     $examen->normal = "No";
            //     $examen->Hallazgos_Anormales = "HA_codo";
            //     $examen->save();
            // }
            // // muñeca
            // if (Input::get('Si_Muñeca')) {
            //     $examen = new ExamenFisico();
            //     $examen->idatleta = $request->get('txt_atleta');
            //     $examen->idexfisi = "5";
            //     $examen->normal = "Si";
            //     $examen->Hallazgos_Anormales = "";
            //     $examen->save();
            // } else {
            //     $examen = new ExamenFisico();
            //     $examen->idatleta = $request->get('txt_atleta');
            //     $examen->idexfisi = "5";
            //     $examen->normal = "No";
            //     $examen->Hallazgos_Anormales = "HA_muñeca";
            //     $examen->save();
            // }
            // // cadera
            // if (Input::get('Si_Cadera')) {
            //     $examen = new ExamenFisico();
            //     $examen->idatleta = $request->get('txt_atleta');
            //     $examen->idexfisi = "6";
            //     $examen->normal = "Si";
            //     $examen->Hallazgos_Anormales = "";
            //     $examen->save();
            // } else {
            //     $examen = new ExamenFisico();
            //     $examen->idatleta = $request->get('txt_atleta');
            //     $examen->idexfisi = "6";
            //     $examen->normal = "No";
            //     $examen->Hallazgos_Anormales = "HA_cadera";
            //     $examen->save();
            // }
            // // rodilla
            // if (Input::get('Si_Rodilla')) {
            //     $examen = new ExamenFisico();
            //     $examen->idatleta = $request->get('txt_atleta');
            //     $examen->idexfisi = "7";
            //     $examen->normal = "Si";
            //     $examen->Hallazgos_Anormales = "";
            //     $examen->save();
            // } else {
            //     $examen = new ExamenFisico();
            //     $examen->idatleta = $request->get('txt_atleta');
            //     $examen->idexfisi = "7";
            //     $examen->normal = "No";
            //     $examen->Hallazgos_Anormales = "HA_rodilla";
            //     $examen->save();
            // }
            // // pienra
            // if (Input::get('Si_Pierna')) {
            //     $examen = new ExamenFisico();
            //     $examen->idatleta = $request->get('txt_atleta');
            //     $examen->idexfisi = "8";
            //     $examen->normal = "Si";
            //     $examen->Hallazgos_Anormales = "";
            //     $examen->save();
            // } else {
            //     $examen = new ExamenFisico();
            //     $examen->idatleta = $request->get('txt_atleta');
            //     $examen->idexfisi = "8";
            //     $examen->normal = "No";
            //     $examen->Hallazgos_Anormales = "HA_pierna";
            //     $examen->save();
            // }
            // // dedos
            // if (Input::get('Si_dedos')) {
            //     $examen = new ExamenFisico();
            //     $examen->idatleta = $request->get('txt_atleta');
            //     $examen->idexfisi = "9";
            //     $examen->normal = "Si";
            //     $examen->Hallazgos_Anormales = "";
            //     $examen->save();
            // } else {
            //     $examen = new ExamenFisico();
            //     $examen->idatleta = $request->get('txt_atleta');
            //     $examen->idexfisi = "9";
            //     $examen->normal = "No";
            //     $examen->Hallazgos_Anormales = "HA_dedos3";
            //     $examen->save();
            // }
            // //Anexo
            // $anexo=new Anexo();
            // $anexo->idatleta = $request->get('txt_atleta');
            // $anexo->OtrosHallazgo=$request->get('otroshallazgos');
            // $anexo->Recomendaciones=$request->get('Recomendaciones');
            // $anexo->Observaciones="";
            // $anexo->save();

        
        if (Input::get('PD')) {
            $ccap = new Ccap();
            $ccap->idatleta = $request->get('txt_atleta');
            $ccap->idcca="1";
            $ccap->nombre="Practica Deportiva";
            $ccap->valor="Si";
            $ccap->save();
        }
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
