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
        // cuello
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

        // condiciones clinicas
        // musculo esqueletico
    //     if (Input::get('PD')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca="1";
    //         $ccap->nombre="Practica Deportiva";
    //         $ccap->valor="Si";
    //         $ccap->save();
    //     }
    //     if (Input::get('EF')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "1";
    //         $ccap->nombre = "Economia Familiar";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     if (Input::get('Educa')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "1";
    //         $ccap->nombre = "Educacion";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     if (Input::get('Da')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "1";
    //         $ccap->nombre = "Dolor Articular";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     if (Input::get('Ra')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "1";
    //         $ccap->nombre = "Rigidez en articulaciones";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     if (Input::get('Fracturas')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "1";
    //         $ccap->nombre = "Fracturas";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
        
    //     if (Input::get('DM')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "1";
    //         $ccap->nombre = "Debilidad Muscular";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     if (Input::get('HA')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "1";
    //         $ccap->nombre = "Hinchazon articular";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //    // neurologico
    //     if (Input::get('Paralisis')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "2";
    //         $ccap->nombre = "Paralisis";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     if (Input::get('Temblores')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "2";
    //         $ccap->nombre = "Temblores";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     if (Input::get('Ac')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "2";
    //         $ccap->nombre = "Alteraciones de la conciencia";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     //general
    //     if (Input::get('PP')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "3";
    //         $ccap->nombre = "Perdida de peso";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     if (Input::get('AP')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "3";
    //         $ccap->nombre = "Aumento de peso";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     if (Input::get('Fiebre')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "3";
    //         $ccap->nombre = "Fiebre";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     if (Input::get('Escalofrios')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "3";
    //         $ccap->nombre = "Escalofrios";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     //Respiratorio
    //     if (Input::get('Sibilancia')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "4";
    //         $ccap->nombre = "Sibilancia";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     if (Input::get('Tos')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "4";
    //         $ccap->nombre = "Tos";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     if (Input::get('DAR')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "4";
    //         $ccap->nombre = "Dolor al respirar";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     if (Input::get('TCS')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "4";
    //         $ccap->nombre = "Toser coagulos de sangre";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     //demartologico
    //     if (Input::get('EP')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "5";
    //         $ccap->nombre = "Erupciones/Purito";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     if (Input::get('Ulseras')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "5";
    //         $ccap->nombre = "Ulceras/Llagas";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     if (Input::get('hongos')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "5";
    //         $ccap->nombre = "Hongos en los pies";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //    // cabeza
    //     if (Input::get('Dc')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "6";
    //         $ccap->nombre = "Dolores de Cabeza";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     if (Input::get('Convulsiones')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "6";
    //         $ccap->nombre = "Convulsiones";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     if (Input::get('PConciencia')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "6";
    //         $ccap->nombre = "Perdida de la conciencia";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     //Ojo
    //     if (Input::get('cambiosVision')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "7";
    //         $ccap->nombre = "Cambios en la vision";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     if (Input::get('fotofobia')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "7";
    //         $ccap->nombre = "Fotofobia";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     if (Input::get('DE')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "7";
    //         $ccap->nombre = "Dolor/enrojecimiento";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     if (Input::get('lagrimeoe')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "7";
    //         $ccap->nombre = "Lagrimeo excesivo";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     //ONG
    //     if (Input::get('PA')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "8";
    //         $ccap->nombre = "Perdida audicion";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     if (Input::get('Vertigo')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "8";
    //         $ccap->nombre = "Vertigo";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     if (Input::get('sangradoN')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "8";
    //         $ccap->nombre = "Sangrado de nariz";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     if (Input::get('Ronquidos')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "8";
    //         $ccap->nombre = "Ronquidos";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     //Genitourinario
    //     if (Input::get('PCVe')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "9";
    //         $ccap->nombre = "Perdida control de vejiga";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     if (Input::get('MiccionF')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "9";
    //         $ccap->nombre = "Miccion frecuente";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     //cardiovascular
    //     if (Input::get('DolorP')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "10";
    //         $ccap->nombre = "Dolor en el pecho";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     if (Input::get('Palpitaciones')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "10";
    //         $ccap->nombre = "Palpitaciones";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     if (Input::get('FaltaAliento')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "10";
    //         $ccap->nombre = "Falta de aliento";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     //gastrointestinal
    //     if (Input::get('Dificultaddeglutir')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "11";
    //         $ccap->nombre = "Dificultad para deglutir";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     if (Input::get('ardorEstomacal')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "11";
    //         $ccap->nombre = "Ardor estomacal";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     if (Input::get('NV')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "11";
    //         $ccap->nombre = "Nauseas/Vomito";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     if (Input::get('Sangradointestinal')) {
    //         $ccap = new Ccap();
    //         $ccap->idatleta = $request->get('txt_atleta');
    //         $ccap->idcca = "11";
    //         $ccap->nombre = "Sangrado intestinal";
    //         $ccap->valor = "Si";
    //         $ccap->save();
    //     }
    //     //otros
    //     if ($request->get('otrosCCA')!= "") {
    //         $ccap1 = new Ccap();
    //         $ccap1->idatleta = $request->get('txt_atleta');
    //         $ccap1->idcca = "12";
    //         $ccap1->nombre = "Otros";
    //         $ccap1->valor = $request->get('otrosCCA');
    //         $ccap1->save();
    //     }
    //     //observacion
    //     if ($request->get('observacioneCCA')!= "") {
    //         $anexo = new Anexos();
    //         $anexo->idatleta = $request->get('txt_atleta');
    //         $anexo->OtrosHallazgo = "";
    //         $anexo->Recomendaciones = "";
    //         $anexo->Observaciones = $request->get('observacioneCCA');
    //         $anexo->save();
    //     }
        //ficha antropometrica
        // peso corporal
        $mytime = Carbon::now('America/Managua');
        $FA=new FichaAntropometica();
        $FA->idatleta = $request->get('txt_atleta'); 
        $FA->NombreyApellido=$request->get("nombre");
        $FA->sexo = $request->get("genero");
        $FA->EvaluacionN = $request->get("numEvaluacion");
        $FA->FechadeEvaluacion = Carbon::createFromFormat('d/m/Y', $request->input('fechaEx'));
        $FA->FechadeNacimiento = Carbon::createFromFormat('d/m/Y', $request->input('fechaNac'));
        if ($request->get("genero")=="Masculino") {
            $FA->Mestruacion = "";    
        }
        elseif ($request->get("genero") == "Femenino") {
            $FA->Mestruacion = $request->get("genero"); 
        }
        $FA->Antropometrista = $request->get("Antropometrista");
        $FA->Anotador = $request->get("anotador");
        $FA->idfat ="1";
        $FA->TOMA1 = $request->get("PCtoma1");
        $FA->TOMA2 = $request->get("PCtoma2");
        $FA->TOMA3 = $request->get("PCtoma3");
        $FA->PromedioOMediana = $request->get("PCpromed");
        $FA->save();
        //talla
        $mytime = Carbon::now('America/Managua');
        $FA = new FichaAntropometica();
        $FA->idatleta = $request->get('txt_atleta');
        $FA->NombreyApellido = $request->get("nombre");
        $FA->sexo = $request->get("genero");
        $FA->EvaluacionN = $request->get("numEvaluacion");
        $FA->FechadeEvaluacion = Carbon::createFromFormat('d/m/Y', $request->input('fechaEx'));
        $FA->FechadeNacimiento = Carbon::createFromFormat('d/m/Y', $request->input('fechaNac'));
        if ($request->get("genero") == "Masculino") {
            $FA->Mestruacion = "";
        } elseif ($request->get("genero") == "Femenino") {
            $FA->Mestruacion = $request->get("genero");
        }
        $FA->Antropometrista = $request->get("Antropometrista");
        $FA->Anotador = $request->get("anotador");
        $FA->idfat = "2";
        $FA->TOMA1 = $request->get("Ttoma1");
        $FA->TOMA2 = $request->get("Ttoma2");
        $FA->TOMA3 = $request->get("Ttoma3");
        $FA->PromedioOMediana = $request->get("Tpromed");
        $FA->save();
        // talla sentado
        $mytime = Carbon::now('America/Managua');
        $FA = new FichaAntropometica();
        $FA->idatleta = $request->get('txt_atleta');
        $FA->NombreyApellido = $request->get("nombre");
        $FA->sexo = $request->get("genero");
        $FA->EvaluacionN = $request->get("numEvaluacion");
        $FA->FechadeEvaluacion = Carbon::createFromFormat('d/m/Y', $request->input('fechaEx'));
        $FA->FechadeNacimiento = Carbon::createFromFormat('d/m/Y', $request->input('fechaNac'));
        if ($request->get("genero") == "Masculino") {
            $FA->Mestruacion = "";
        } elseif ($request->get("genero") == "Femenino") {
            $FA->Mestruacion = $request->get("genero");
        }
        $FA->Antropometrista = $request->get("Antropometrista");
        $FA->Anotador = $request->get("anotador");
        $FA->idfat = "3";
        $FA->TOMA1 = $request->get("Tstoma1");
        $FA->TOMA2 = $request->get("Tstoma2");
        $FA->TOMA3 = $request->get("Tstoma3");
        $FA->PromedioOMediana = $request->get("Tspromed");
        $FA->save();
        //envergadura
        $mytime = Carbon::now('America/Managua');
        $FA = new FichaAntropometica();
        $FA->idatleta = $request->get('txt_atleta');
        $FA->NombreyApellido = $request->get("nombre");
        $FA->sexo = $request->get("genero");
        $FA->EvaluacionN = $request->get("numEvaluacion");
        $FA->FechadeEvaluacion = Carbon::createFromFormat('d/m/Y', $request->input('fechaEx'));
        $FA->FechadeNacimiento = Carbon::createFromFormat('d/m/Y', $request->input('fechaNac'));
        if ($request->get("genero") == "Masculino") {
            $FA->Mestruacion = "";
        } elseif ($request->get("genero") == "Femenino") {
            $FA->Mestruacion = $request->get("genero");
        }
        $FA->Antropometrista = $request->get("Antropometrista");
        $FA->Anotador = $request->get("anotador");
        $FA->idfat = "4";
        $FA->TOMA1 = $request->get("Etoma1");
        $FA->TOMA2 = $request->get("Etoma2");
        $FA->TOMA3 = $request->get("Etoma3");
        $FA->PromedioOMediana = $request->get("Epromed");
        $FA->save();
        //Subescapular
        $mytime = Carbon::now('America/Managua');
        $FA = new FichaAntropometica();
        $FA->idatleta = $request->get('txt_atleta');
        $FA->NombreyApellido = $request->get("nombre");
        $FA->sexo = $request->get("genero");
        $FA->EvaluacionN = $request->get("numEvaluacion");
        $FA->FechadeEvaluacion = Carbon::createFromFormat('d/m/Y', $request->input('fechaEx'));
        $FA->FechadeNacimiento = Carbon::createFromFormat('d/m/Y', $request->input('fechaNac'));
        if ($request->get("genero") == "Masculino") {
            $FA->Mestruacion = "";
        } elseif ($request->get("genero") == "Femenino") {
            $FA->Mestruacion = $request->get("genero");
        }
        $FA->Antropometrista = $request->get("Antropometrista");
        $FA->Anotador = $request->get("anotador");
        $FA->idfat = "5";
        $FA->TOMA1 = $request->get("SCtoma1");
        $FA->TOMA2 = $request->get("SCtoma2");
        $FA->TOMA3 = $request->get("SCtoma3");
        $FA->PromedioOMediana = $request->get("SCpromed");
        $FA->save();
        //Tricipital
        $mytime = Carbon::now('America/Managua');
        $FA = new FichaAntropometica();
        $FA->idatleta = $request->get('txt_atleta');
        $FA->NombreyApellido = $request->get("nombre");
        $FA->sexo = $request->get("genero");
        $FA->EvaluacionN = $request->get("numEvaluacion");
        $FA->FechadeEvaluacion = Carbon::createFromFormat('d/m/Y', $request->input('fechaEx'));
        $FA->FechadeNacimiento = Carbon::createFromFormat('d/m/Y', $request->input('fechaNac'));
        if ($request->get("genero") == "Masculino") {
            $FA->Mestruacion = "";
        } elseif ($request->get("genero") == "Femenino") {
            $FA->Mestruacion = $request->get("genero");
        }
        $FA->Antropometrista = $request->get("Antropometrista");
        $FA->Anotador = $request->get("anotador");
        $FA->idfat = "6";
        $FA->TOMA1 = $request->get("TTtoma1");
        $FA->TOMA2 = $request->get("TTtoma2");
        $FA->TOMA3 = $request->get("TTtoma3");
        $FA->PromedioOMediana = $request->get("TTpromed");
        $FA->save();
        //Bicipital
        $mytime = Carbon::now('America/Managua');
        $FA = new FichaAntropometica();
        $FA->idatleta = $request->get('txt_atleta');
        $FA->NombreyApellido = $request->get("nombre");
        $FA->sexo = $request->get("genero");
        $FA->EvaluacionN = $request->get("numEvaluacion");
        $FA->FechadeEvaluacion = Carbon::createFromFormat('d/m/Y', $request->input('fechaEx'));
        $FA->FechadeNacimiento = Carbon::createFromFormat('d/m/Y', $request->input('fechaNac'));
        if ($request->get("genero") == "Masculino") {
            $FA->Mestruacion = "";
        } elseif ($request->get("genero") == "Femenino") {
            $FA->Mestruacion = $request->get("genero");
        }
        $FA->Antropometrista = $request->get("Antropometrista");
        $FA->Anotador = $request->get("anotador");
        $FA->idfat = "7";
        $FA->TOMA1 = $request->get("BCtoma1");
        $FA->TOMA2 = $request->get("BCtoma2");
        $FA->TOMA3 = $request->get("BCtoma3");
        $FA->PromedioOMediana = $request->get("BCpromed");
        $FA->save();
        //Supracrestal o cresta iliaca
        $mytime = Carbon::now('America/Managua');
        $FA = new FichaAntropometica();
        $FA->idatleta = $request->get('txt_atleta');
        $FA->NombreyApellido = $request->get("nombre");
        $FA->sexo = $request->get("genero");
        $FA->EvaluacionN = $request->get("numEvaluacion");
        $FA->FechadeEvaluacion = Carbon::createFromFormat('d/m/Y', $request->input('fechaEx'));
        $FA->FechadeNacimiento = Carbon::createFromFormat('d/m/Y', $request->input('fechaNac'));
        if ($request->get("genero") == "Masculino") {
            $FA->Mestruacion = "";
        } elseif ($request->get("genero") == "Femenino") {
            $FA->Mestruacion = $request->get("genero");
        }
        $FA->Antropometrista = $request->get("Antropometrista");
        $FA->Anotador = $request->get("anotador");
        $FA->idfat = "8";
        $FA->TOMA1 = $request->get("CItoma1");
        $FA->TOMA2 = $request->get("CItoma2");
        $FA->TOMA3 = $request->get("CItoma3");
        $FA->PromedioOMediana = $request->get("CIpromed");
        $FA->save();
        //Supracrestal o suprailiaco
        $mytime = Carbon::now('America/Managua');
        $FA = new FichaAntropometica();
        $FA->idatleta = $request->get('txt_atleta');
        $FA->NombreyApellido = $request->get("nombre");
        $FA->sexo = $request->get("genero");
        $FA->EvaluacionN = $request->get("numEvaluacion");
        $FA->FechadeEvaluacion = Carbon::createFromFormat('d/m/Y', $request->input('fechaEx'));
        $FA->FechadeNacimiento = Carbon::createFromFormat('d/m/Y', $request->input('fechaNac'));
        if ($request->get("genero") == "Masculino") {
            $FA->Mestruacion = "";
        } elseif ($request->get("genero") == "Femenino") {
            $FA->Mestruacion = $request->get("genero");
        }
        $FA->Antropometrista = $request->get("Antropometrista");
        $FA->Anotador = $request->get("anotador");
        $FA->idfat = "9";
        $FA->TOMA1 = $request->get("SCotoma1");
        $FA->TOMA2 = $request->get("SCotoma2");
        $FA->TOMA3 = $request->get("SCotoma3");
        $FA->PromedioOMediana = $request->get("SCopromed");
        $FA->save();
        //Abdominal
        $mytime = Carbon::now('America/Managua');
        $FA = new FichaAntropometica();
        $FA->idatleta = $request->get('txt_atleta');
        $FA->NombreyApellido = $request->get("nombre");
        $FA->sexo = $request->get("genero");
        $FA->EvaluacionN = $request->get("numEvaluacion");
        $FA->FechadeEvaluacion = Carbon::createFromFormat('d/m/Y', $request->input('fechaEx'));
        $FA->FechadeNacimiento = Carbon::createFromFormat('d/m/Y', $request->input('fechaNac'));
        if ($request->get("genero") == "Masculino") {
            $FA->Mestruacion = "";
        } elseif ($request->get("genero") == "Femenino") {
            $FA->Mestruacion = $request->get("genero");
        }
        $FA->Antropometrista = $request->get("Antropometrista");
        $FA->Anotador = $request->get("anotador");
        $FA->idfat = "10";
        $FA->TOMA1 = $request->get("ABtoma1");
        $FA->TOMA2 = $request->get("ABtoma2");
        $FA->TOMA3 = $request->get("ABtoma3");
        $FA->PromedioOMediana = $request->get("ABpromed");
        $FA->save();
        //Muslo anterior
        $mytime = Carbon::now('America/Managua');
        $FA = new FichaAntropometica();
        $FA->idatleta = $request->get('txt_atleta');
        $FA->NombreyApellido = $request->get("nombre");
        $FA->sexo = $request->get("genero");
        $FA->EvaluacionN = $request->get("numEvaluacion");
        $FA->FechadeEvaluacion = Carbon::createFromFormat('d/m/Y', $request->input('fechaEx'));
        $FA->FechadeNacimiento = Carbon::createFromFormat('d/m/Y', $request->input('fechaNac'));
        if ($request->get("genero") == "Masculino") {
            $FA->Mestruacion = "";
        } elseif ($request->get("genero") == "Femenino") {
            $FA->Mestruacion = $request->get("genero");
        }
        $FA->Antropometrista = $request->get("Antropometrista");
        $FA->Anotador = $request->get("anotador");
        $FA->idfat = "11";
        $FA->TOMA1 = $request->get("MAtoma1");
        $FA->TOMA2 = $request->get("MAtoma2");
        $FA->TOMA3 = $request->get("MAtoma3");
        $FA->PromedioOMediana = $request->get("MApromed");
        $FA->save();
        //
        // $mytime = Carbon::now('America/Managua');
        // $FA = new FichaAntropometica();
        // $FA->idatleta = $request->get('txt_atleta');
        // $FA->NombreyApellido = $request->get("nombre");
        // $FA->sexo = $request->get("genero");
        // $FA->EvaluacionN = $request->get("numEvaluacion");
        // $FA->FechadeEvaluacion = Carbon::createFromFormat('d/m/Y', $request->input('fechaEx'));
        // $FA->FechadeNacimiento = Carbon::createFromFormat('d/m/Y', $request->input('fechaNac'));
        // if ($request->get("genero") == "Masculino") {
        //     $FA->Mestruacion = "";
        // } elseif ($request->get("genero") == "Femenino") {
        //     $FA->Mestruacion = $request->get("genero");
        // }
        // $FA->Antropometrista = $request->get("Antropometrista");
        // $FA->Anotador = $request->get("anotador");
        // $FA->idfat = "1";
        // $FA->TOMA1 = $request->get("PCtoma1");
        // $FA->TOMA2 = $request->get("PCtoma2");
        // $FA->TOMA3 = $request->get("PCtoma3");
        // $FA->PromedioOMediana = $request->get("PCpromed");
        // $FA->save();
        // //
        // $mytime = Carbon::now('America/Managua');
        // $FA = new FichaAntropometica();
        // $FA->idatleta = $request->get('txt_atleta');
        // $FA->NombreyApellido = $request->get("nombre");
        // $FA->sexo = $request->get("genero");
        // $FA->EvaluacionN = $request->get("numEvaluacion");
        // $FA->FechadeEvaluacion = Carbon::createFromFormat('d/m/Y', $request->input('fechaEx'));
        // $FA->FechadeNacimiento = Carbon::createFromFormat('d/m/Y', $request->input('fechaNac'));
        // if ($request->get("genero") == "Masculino") {
        //     $FA->Mestruacion = "";
        // } elseif ($request->get("genero") == "Femenino") {
        //     $FA->Mestruacion = $request->get("genero");
        // }
        // $FA->Antropometrista = $request->get("Antropometrista");
        // $FA->Anotador = $request->get("anotador");
        // $FA->idfat = "1";
        // $FA->TOMA1 = $request->get("PCtoma1");
        // $FA->TOMA2 = $request->get("PCtoma2");
        // $FA->TOMA3 = $request->get("PCtoma3");
        // $FA->PromedioOMediana = $request->get("PCpromed");
        // $FA->save();
        // $valor = Carbon::createFromFormat('d/m/Y', $request->input('fechaEx'));
        // dd($valor);
        
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
