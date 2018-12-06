<?php

namespace SistemaMedico\Http\Controllers;

use Illuminate\Http\Request;

use SistemaMedico\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use SistemaMedico\Http\Requests\HistorialMedicoFormRequest;
use DB;
use SistemaMedico\HistorialMedico;
use SistemaMedico\HistoralFamiliar;
use SistemaMedico\AparatoLocomotor;
use SistemaMedico\CarreraDep;
use SistemaMedico\CarreraDeportiva;
use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;
use SistemaMedico\Cuestionariomedicamentos;
use SistemaMedico\Alergias;
use SistemaMedico\CarreraDepoFamiliar;
use SistemaMedico\Situacion_laboral;
use SistemaMedico\Apoyo_Economico;
use SistemaMedico\ConsiteApoyo;
use SistemaMedico\InformacionFamiliar;
use SistemaMedico\Educacion;
use SistemaMedico\Habitacion;
use SistemaMedico\Habitos;
class CuestionarioMedicoController extends Controller
{

    public function __construct()
    {
         //$this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {

        $inputs=Input::all();
        $id = $inputs['id'];
        $name=$inputs['nombre'];
        $salida=$id."     ".$name;
        /*dd($salida);*/
        return view('HistorialMedico.index',["atleta_id"=>$id,"nombre"=>$name]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inputs=Input::all();
        $id = $inputs['id'];
        $nombre=$inputs['nombre'];
        //dd($nombre);
        /*
         * comienzo de los modelos
         * modelo medicamentos
         */
        return view('HistorialMedico.crear',compact('id','nombre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->get("txt_otrosapoyos1"));
        // dd($request->get('txtotra_alergia'));
        /**
         *todo lo que tiene que ver con alergias
         *a medicamentos
         * */
        if (Input::get('btnrelajantes')) {
            // El usuario marcó el checkbox
            /*dd($request->get('btnrelajantes'));*/
            $cuestionario=new Cuestionariomedicamentos();
            $cuestionario->medicamento=$request->get('btnrelajantes');
            $cuestionario->descripcion=$request->get('txt_medicamentos');
            $cuestionario->idatleta=$request->get('txt_atleta');
            $cuestionario->save();
        } 
        if (Input::get('antiflamatorio'))
        {
            $cuestionario2=new Cuestionariomedicamentos();
            $cuestionario2->medicamento=$request->get('antiflamatorio');
            $cuestionario2->descripcion=$request->get('txt_antiinflamatorios');
            $cuestionario2->idatleta=$request->get('txt_atleta');
            $cuestionario2->save();
        }
        if (Input::get('analgesico'))
        {
            $cuestionario3=new Cuestionariomedicamentos();
            $cuestionario3->medicamento=$request->get('analgesico');
            $cuestionario3->descripcion=$request->get('txt_analgesicos');
            $cuestionario3->idatleta=$request->get('txt_atleta');
            $cuestionario3->save();
        }
        if (Input::get('btn_otros'))
        {
            $cuestionario3=new Cuestionariomedicamentos();
            $cuestionario3->medicamento=$request->get('btn_otros');
            $cuestionario3->descripcion=$request->get('txt_medicamentos_otros');
            $cuestionario3->idatleta=$request->get('txt_atleta');
            $cuestionario3->save();
        }
        /**
         *todo lo que tenga que ver con
         *otras alergias
         * */
        if ($request->get('alergia')=='si')
        {

            if (Input::get('medicamento_alergia'))
            {
                $alergias=new Alergias();
                $alergias->alergia=$request->get('medicamento_alergia');
                $alergias->descripcion=$request->get('txt_medicamentos_alergicos');
                $alergias->idatleta=$request->get('txt_atleta');
                $alergias->save();
            }
            if (Input::get('polen'))
            {
                $alergias=new Alergias();
                $alergias->alergia=$request->get('polen');
                $alergias->descripcion=$request->get('txt_alergia_polen');
                $alergias->idatleta=$request->get('txt_atleta');
                $alergias->save();
            }
            if (Input::get('comida'))
            {
                $alergias=new Alergias();
                $alergias->alergia=$request->get('comida');
                $alergias->descripcion=$request->get('txtalergiacomida');
                $alergias->idatleta=$request->get('txt_atleta');
                $alergias->save();
            }
            if (Input::get('piquetesdeinsectos'))
            {
                $alergias=new Alergias();
                $alergias->alergia=$request->get('piquetesdeinsectos');
                $alergias->descripcion=$request->get('txtpiquete');
                $alergias->idatleta=$request->get('txt_atleta');
                $alergias->save();
            }
            if (Input::get('otrosalergias'))
            {
                $alergias=new Alergias();
                $alergias->alergia=$request->get('otrosalergias');
                $alergias->descripcion=$request->get('txtotra_alergia');
                $alergias->idatleta=$request->get('txt_atleta');
                $alergias->save();
            }
        }
        else
        {
            /*
            *que guarde que no tiene alergias
             * */
            // $alergias=new Alergias();
            // $alergias->alergia="no tiene alergias";
            // $alergias->descripcion=" ";
            // $alergias->idatleta=$request->get('txt_atleta');
            // $alergias->save();

        }
        /**
         * **
        *todo lo que tiene que ver con el historial medico
         *pregunta 1
         */

        $historial=new HistorialMedico();
        $historial->pregunta="A) ¿Alguna vez un doctor te ha prohibido limitado tu participacion en deportes por alguna razon?";
        $historial->respuesta=$request->get('pregunta_A');
        $historial->detalles= " ";
        $historial->idatleta=$request->get('txt_atleta');
        $historial->save();
        /*
         * pregunta 2*/
        $historial=new HistorialMedico();
        $historial->pregunta="B)¿Has sido ingresado alguna vez en el hospital?";
        $historial->respuesta=$request->get('pregunta_B');
        $historial->detalles= " ";
        $historial->idatleta=$request->get('txt_atleta');
        $historial->save();
        /*
         * pregunta 3*/
        $historial=new HistorialMedico();
        $historial->pregunta="C)¿Has tenido cirugia alguna vez?";
        $historial->respuesta=$request->get('pregunta_C');
        $historial->detalles= " ";
        $historial->idatleta=$request->get('txt_atleta');
        $historial->save();
        /*
         * pregunta 4*/
        $historial=new HistorialMedico();
        $historial->pregunta="D) ¿Usas lentes o lentes de contacto?";
        $historial->respuesta=$request->get('pregunta_D');
        $historial->detalles= " ";
        $historial->idatleta=$request->get('txt_atleta');
        $historial->save();
        /*
         * pregunta 5*/
        $historial=new HistorialMedico();
        $historial->pregunta="E) ¿Nascite o te falta un riñon,un ojo,untesticulo u algun otro órgano?";
        $historial->respuesta=$request->get('pregunta_E');
        $historial->detalles= " ";
        $historial->idatleta=$request->get('txt_atleta');
        $historial->save();
        /*
         * pregunta 6*/
        $historial=new HistorialMedico();
        $historial->pregunta="F) ¿Te has desmayado durante o despues de hacer ejercicios?";
        $historial->respuesta=$request->get('pregunta_F');
        $historial->detalles= " ";
        $historial->idatleta=$request->get('txt_atleta');
        $historial->save();
        /*
         * pregunta 7*/
        $historial=new HistorialMedico();
        $historial->pregunta="G) ¿Has tenido alguna vez molestias dolor o presion en el pecho cuando haces ejercicios?";
        $historial->respuesta=$request->get('pregunta_G');
        $historial->detalles= " ";
        $historial->idatleta=$request->get('txt_atleta');
        $historial->save();
        /*
         * pregunta 8*/
        $historial=new HistorialMedico();
        $historial->pregunta="H) ¿Alguna vez has tenido palpitaciones o latidos irregulares cuando haces ejercicios?";
        $historial->respuesta=$request->get('pregunta_H');
        $historial->detalles= " ";
        $historial->idatleta=$request->get('txt_atleta');
        $historial->save();
        /*
         * pregunta 9*/
        /* */
        if ($request->get('pregunta_I')=="Si"){
            $historial=new HistorialMedico();
            $historial->pregunta="I) ¿Te ha dicho un doctor que tienes un problema del corazon?";
            $historial->respuesta=$request->get('pregunta_I');
            $historial->detalles= " ";
            $historial->idatleta=$request->get('txt_atleta');
            $historial->save();
            //
            $historial=new HistorialMedico();
            $historial->pregunta="I.a) Presion alta";
            $historial->respuesta=$request->get('presion_alta');
            $historial->detalles= " ";
            $historial->idatleta=$request->get('txt_atleta');
            $historial->save();
            /*2*/
            $historial=new HistorialMedico();
            $historial->pregunta="I.b) Solo en el corazón ";
            $historial->respuesta=$request->get('Soplo');
            $historial->detalles= " ";
            $historial->idatleta=$request->get('txt_atleta');
            $historial->save();
            /*3*/
            $historial=new HistorialMedico();
            $historial->pregunta="I.c) Nivel alto de Colesterol ";
            $historial->respuesta=$request->get('colesterol');
            $historial->detalles= " ";
            $historial->idatleta=$request->get('txt_atleta');
            $historial->save();
            /*4*/
            $historial=new HistorialMedico();
            $historial->pregunta="I.d) otro";
            $historial->respuesta=$request->get('otroenfer');
            if ($request->get('otroenfer')=='Si') {
                 $historial->detalles= $request->get('txt_especificacion_otros');
            }
            else if ($request->get('otroenfer')=='No') {
               $historial->detalles= " ";
            }
           
            $historial->idatleta=$request->get('txt_atleta');
            $historial->save();
        }
        else  if ($request->get('pregunta_I')=="No"){
            $historial=new HistorialMedico();
            $historial->pregunta="I) ¿Te ha dicho un doctor que tienes un problema del corazon?";
            $historial->respuesta=$request->get('pregunta_I');
            $historial->detalles= " ";
            $historial->idatleta=$request->get('txt_atleta');
            $historial->save();
        }
        /* pregunta 10*/
        $historial=new HistorialMedico();
        $historial->pregunta="J) ¿Alguna vez un doctor te ha pedido que te hagas una prueba del corazon¿Ej:Electrocardiograma?";
        $historial->respuesta=$request->get('pregunta_J');
        $historial->detalles= " ";
        $historial->idatleta=$request->get('txt_atleta');
        $historial->save();
        /*
         * pregunta 11*/
        $historial=new HistorialMedico();
        $historial->pregunta="K) ¿Te sientes mareado o te falta el aire mas de lo esperado cuando haces ejercicios?";
        $historial->respuesta=$request->get('pregunta_K');
        $historial->detalles= " ";
        $historial->idatleta=$request->get('txt_atleta');
        $historial->save();
        /*
         * pregunta 12*/
        $historial=new HistorialMedico();
        $historial->pregunta="L) ¿Has tenido una convulsion inexplicable?";
        $historial->respuesta=$request->get('pregunta_L');
        $historial->detalles= " ";
        $historial->idatleta=$request->get('txt_atleta');
        $historial->save();
        /*
         * historial familiar
         * pregunta 1
         * */
        $historialFamiliar=new HistoralFamiliar();
        $historialFamiliar->preguntas="¿Has tenido algun familiar que haya fallecido a causa de problemas de corazon, o bien que haya fallecido de forma inexplicable antes de los 50 años?";
        $historialFamiliar->respuesta=$request->get('pregunta_fam_1');
        $historialFamiliar->idatleta=$request->get('txt_atleta');
        $historialFamiliar->save();
        /*pregunta 2*/
        $historialFamiliar=new HistoralFamiliar();
        $historialFamiliar->preguntas="¿Alguien de tu familia tiene problemas del corazon, un marcapaso o un desfibrilador en su corazon?";
        $historialFamiliar->respuesta=$request->get('pregunta_fam_2');
        $historialFamiliar->idatleta=$request->get('txt_atleta');
        $historialFamiliar->save();
        /*pregunta 3*/
        $historialFamiliar=new HistoralFamiliar();
        $historialFamiliar->preguntas="¿Ha sufridoalgun familiar un desmayo inexplicable o convulsiones?";
        $historialFamiliar->respuesta=$request->get('pregunta_fam_3');
        $historialFamiliar->idatleta=$request->get('txt_atleta');
        $historialFamiliar->save();
        /*pregunta 4*/
        $historialFamiliar=new HistoralFamiliar();
        $historialFamiliar->preguntas="¿alguien de su familia padece de Diabetes?";
        $historialFamiliar->respuesta=$request->get('pregunta_fam_4');
        $historialFamiliar->idatleta=$request->get('txt_atleta');
        $historialFamiliar->save();
        /*pregunta 5*/
        $historialFamiliar=new HistoralFamiliar();
        $historialFamiliar->preguntas="¿alguien de su familia padece de asma?";
        $historialFamiliar->respuesta=$request->get('pregunta_fam_5');
        $historialFamiliar->idatleta=$request->get('txt_atleta');
        $historialFamiliar->save();

        /*Aparato locomotor
        */
        /*
         * pregunta 1*/
        $aparato=new AparatoLocomotor();
        $aparato->preguntas="¿Alguna vez ha perdido un entrenamiento o evento por haber sufrido lesion en el hueso, tendon o musculo?";
        $aparato->respuesta=$request->get('pregunta_locomotor_1');
        $aparato->detalles= " ";
        $aparato->idatleta=$request->get('txt_atleta');
        $aparato->save();
        /*pregunta 2*/
        $aparato=new AparatoLocomotor();
        $aparato->preguntas="¿Te has fracturado alguna vez un hueso o dislocado una articulacion?";
        $aparato->respuesta=$request->get('pregunta_locomotor_2');
        $aparato->detalles= " ";
        $aparato->idatleta=$request->get('txt_atleta');
        $aparato->save();
        /*pregunta 3*/
        $aparato=new AparatoLocomotor();
        $aparato->preguntas="¿Has sufrido alguna lesion que haya requerido radiografias,tomografias, o resonancia magnetica, soporte ortopedico,como yeso o tablilla?";
        $aparato->respuesta=$request->get('pregunta_locomotor_3');
        $aparato->detalles= " ";
        $aparato->idatleta=$request->get('txt_atleta');
        $aparato->save();
        /*pregunta 4*/
        $aparato=new AparatoLocomotor();
        $aparato->preguntas="¿Usas regularmente una tablilla/soporte ortopedico u otro dispositivo de asistencia?";
        $aparato->respuesta=$request->get('pregunta_locomotor_4');
        $aparato->detalles= " ";
        $aparato->idatleta=$request->get('txt_atleta');
        $aparato->save();
        /*pregunta 5*/
        $aparato=new AparatoLocomotor();
        $aparato->preguntas="¿Tienes calambres frecuentes en los musculos cuando haces ejercicios?";
        $aparato->respuesta=$request->get('pregunta_locomotor_5');
        $aparato->detalles= " ";
        $aparato->idatleta=$request->get('txt_atleta');
        $aparato->save();
        /*pregunta 6*/
        $aparato=new AparatoLocomotor();
        $aparato->preguntas="¿Has tenido Hinchazon en alguna de tus articulaciones?";
        $aparato->respuesta=$request->get('pregunta_locomotor_6');
        $aparato->detalles= " ";
        $aparato->idatleta=$request->get('txt_atleta');
        $aparato->save();
        /*pregunta 7*/
        $aparato=new AparatoLocomotor();
        $aparato->preguntas="Cirugias(especifique que tipo de cirugias y cuando fue realizada)";
        $aparato->respuesta=" ";
        $aparato->detalles=$request->get('cirugias');
        $aparato->idatleta=$request->get('txt_atleta');
        $aparato->save();
        /*pregunta 8*/
        $aparato=new AparatoLocomotor();
        $aparato->preguntas="Hospitalizaciones(Especifique si ha sido hospitalizado,las fechas y las causas)";
        $aparato->respuesta=" ";
        $aparato->detalles=$request->get('hospitalizaciones');
        $aparato->idatleta=$request->get('txt_atleta');
        $aparato->save();


        /**
         * Compitiendo*/
        $preguntacarrera1=new CarreraDeportiva();
        $preguntacarrera1->preguntas ="Cuanto Tiempo lleva Compitiendo";
        $preguntacarrera1->respuesta=$request->get("compitiendo");
        $preguntacarrera1->idatleta = $request->get('txt_atleta');
        $preguntacarrera1->detalles="";
        $preguntacarrera1->save();

        $prueba = Input::get('prueba');
        $resultado= Input::get('resultado');
        $fecha= Input::get('fechaYlugar');
        $evento=Input::get('evento');
        if ($prueba[0]!=""&& $resultado[0]!="" && $fecha[0]!="" && $evento[0]!="") {
            for ($i = 0; $i < count($prueba); $i++) {
                $carrera = new CarreraDep();
                $carrera->idDatosAtleta = $request->get('txt_atleta');
                $carrera->resultado = $resultado[$i];
                $carrera->prueba = $prueba[$i];
                $carrera->fechalugar = $fecha[$i];
                $carrera->evento = $evento[$i];
                $carrera->save();
            }
        }
        $evento2 = $request->get('evento_fam');
        $resultado2= $request->get('resultado_fam');
        $fecha2= $request->get('fechaYlugarfam');
        if ( $resultado2[0]!="" && $fecha2[0]!="" && $evento2[0]!="") {
            for ($i = 0; $i < count($evento2); $i++) {
                $carrera = new CarreraDepoFamiliar();
                $carrera->idDatosAtleta = $request->get('txt_atleta');
                $carrera->resultado = $resultado2[$i];
                $carrera->fechalugar = $fecha2[$i];
                $carrera->evento = $evento2[$i];
                $carrera->save();
            }
        }
        /*entrenamiento*/
        $preguntacarrera2=new CarreraDeportiva();
        $preguntacarrera2->preguntas ="Entreno";
        $preguntacarrera2->respuesta=$request->get("entrenamiento");
        $preguntacarrera2->idatleta = $request->get('txt_atleta');
        if ($request->get('sesiones')!=""){
            $preguntacarrera2->detalles=$request->get('sesiones');
        }
        else{
            $preguntacarrera2->detalles="";
        }
        $preguntacarrera2->save();
        /*horas*/
        $preguntacarrera3=new CarreraDeportiva();
        $preguntacarrera3->preguntas ="Horas de entrenamiento por sesion";
        $preguntacarrera3->respuesta=$request->get("por_sesion");
        $preguntacarrera3->idatleta = $request->get('txt_atleta');
        $preguntacarrera3->detalles="";
        $preguntacarrera3->save();
        /*
         * modalidad
         * */
        $preguntacarrera4=new CarreraDeportiva();
        $preguntacarrera4->preguntas ="Modalidad de entrenamiento";
        $preguntacarrera4->respuesta=$request->get("modalidad_entrenamiento");
        $preguntacarrera4->idatleta = $request->get('txt_atleta');
        $preguntacarrera4->detalles="";
        $preguntacarrera4->save();
        /*
         * plan de entrenamiento
         * */
        $preguntacarrera5=new CarreraDeportiva();
        $preguntacarrera5->preguntas ="Cuento con un plan de entrenamiento que";
        $preguntacarrera5->respuesta=$request->get("plan");
        $preguntacarrera5->idatleta = $request->get('txt_atleta');
        $preguntacarrera5->detalles="";
        $preguntacarrera5->save();
        /*
         * actividades
         * */
        $preguntacarrera6=new CarreraDeportiva();
        $preguntacarrera6->preguntas ="sus actividades se adaptan a sus horararios y sesiones de entrenamiento";
        $preguntacarrera6->respuesta=$request->get("acti");
        if ($request->get("acti")=="Si")
        {
            $preguntacarrera6->detalles="";
        }
        elseif ($request->get("acti")=="Medianamente")
        {
            $preguntacarrera6->detalles=$request->get("mediporque");
        }
        elseif ($request->get("acti")=="No")
        {
            $preguntacarrera6->detalles=$request->get("no_porque");
        }
        $preguntacarrera6->idatleta = $request->get('txt_atleta');
        $preguntacarrera6->save();

        /*
         * sitio de entrenamiento
         * */
        $pregunta7=new CarreraDeportiva();
        $pregunta7->preguntas="Su sitio de entrenamiento es";
        $pregunta7->respuesta=$request->get("sitio");
        if (Input::get('inad'))
        {
            $pregunta7->detalles=$request->get("inadec");
        }
        else{
            $pregunta7->detalles="";
        }
        $pregunta7->idatleta = $request->get('txt_atleta');
        $pregunta7->save();

        /**
         * situacion laboral y personas a cargo
         */
        $st=new Situacion_laboral();
        $st->preguntas="Trabaja Actualmente";
        $st->respuesta=$request->get("trabaja");
        $st->idDatosAtleta= $request->get('txt_atleta');
        $st->save();
        $st2=new Situacion_laboral();
        $st2->preguntas="Tiene personas a cargo";
        $st2->respuesta=$request->get("personas");
        $st2->idDatosAtleta= $request->get('txt_atleta');
        $st2->save();

        /**
         *Apoyo economico
         */
        $var=$request->get("economica");
        if ($var!=null) {
            for ($i = 0; $i < count($var); $i++) {
                $ap=new Apoyo_Economico();
                $ap->preguntas="las necesidades economicas del atleta para su practica deportiva son asumidas por";
                if ($var[$i]=="Otros Familiares")
                {
                    $ap->respuesta="Otros Familiares";
                    $ap->detalles=$request->get("txt_otrosmiembros");
                    $ap->idatleta= $request->get('txt_atleta');
                    $ap->save();
                }
                elseif ($var[$i]=="Otros")
                {
                    $ap->respuesta="Otros";
                    $ap->detalles=$request->get("txt_otrospersonas");
                    $ap->idatleta= $request->get('txt_atleta');
                    $ap->save();
                }
                elseif ($var[$i]=="Otros apoyos")
                {
                    $ap->respuesta="Otros apoyos";
                    $ap->detalles=$request->get("txt_otrosapoyos1");
                    $ap->idatleta= $request->get('txt_atleta');
                    $ap->save();
                }
                else{
                    $ap->respuesta=$var[$i];
                    $ap->detalles="";
                    $ap->idatleta= $request->get('txt_atleta');
                    $ap->save();
                }
            }
        }

        /**
         *el resto sobre economico
         */
        $var2=$request->get("consiste");
        if ($var2!=null) {
            for ($i = 0; $i < count($var2); $i++) {
                $ap=new ConsiteApoyo();
                $ap->preguntas="En que consiste el apoyo que recibe";
                $ap->respuesta=$var2[$i];
                $ap->idatleta= $request->get('txt_atleta');
                $ap->save();
            }
        }
        $var3=$request->get("invierte");
        if ($var3!=null) {
            for ($i = 0; $i < count($var2); $i++) {
                $ap=new ConsiteApoyo();
                $ap->preguntas="En que invierte su apoyo monetario";
                $ap->respuesta=$var2[$i];
                $ap->idatleta= $request->get('txt_atleta');
                $ap->save();
            }
        }
        /**
         *informacion Familiar
         */
        $var=$request->get("vive");
        if ($var!=null) {
            for ($i = 0; $i < count($var); $i++) {
                $ap=new InformacionFamiliar();
                $ap->preguntas="Con quien vive";
                if ($var[$i]=="Hermanos")
                {
                    $ap->respuesta="Hermanos";
                    $ap->detalles=$request->get("txt_Chermanos");
                    $ap->idatleta= $request->get('txt_atleta');
                    $ap->save();
                }
                elseif ($var[$i]=="Hijos")
                {
                    $ap->respuesta="Hijos";
                    $ap->detalles=$request->get("txt_cHijos");
                    $ap->idatleta= $request->get('txt_atleta');
                    $ap->save();
                }
                elseif ($var[$i]=="Otros Familiares")
                {
                    $ap->respuesta="Otros ";
                    $ap->detalles=$request->get("txt_Qfamiliar");
                    $ap->idatleta= $request->get('txt_atleta');
                    $ap->save();
                }
                elseif ($var[$i]=="Otros")
                {
                    $ap->respuesta="Otros ";
                    $ap->detalles=$request->get("txt_Qotros");
                    $ap->idatleta= $request->get('txt_atleta');
                    $ap->save();
                }
                else{
                    $ap->respuesta=$var[$i];
                    $ap->detalles="";
                    $ap->idatleta= $request->get('txt_atleta');
                    $ap->save();
                }
            }
        }
        /**
         * pregunta 2 de la familia
        */
        $inf=new InformacionFamiliar();
        $inf->preguntas="Tiene Hijos";
        $inf->respuesta=$request->get("btnhijos");
        $inf->detalles="    ";
        $inf->idatleta= $request->get('txt_atleta');
        $inf->save();
        /**
         * pregunta 2 de la familia
         */
        $inf2=new InformacionFamiliar();
        $inf2->preguntas="Proyecta Tener Hijos";
        $inf2->respuesta=$request->get("pmhijos");
        $inf2->detalles="";
        $inf2->idatleta= $request->get('txt_atleta');
        $inf2->save();
       /**
        * con cuantos vive
        */
        $inf3=new InformacionFamiliar();
        $inf3->preguntas="Numero de personas con las que Vive";
        if ($request->get("numvive")=="4 o menos"){
            $inf3->respuesta=$request->get("numvive");
            $inf3->detalles=$request->get("txt_menosde4");
            $inf3->idatleta= $request->get('txt_atleta');
            $inf3->save();
        }
        else{
            $inf3->respuesta=$request->get("numvive");
            $inf3->detalles="";
            $inf3->idatleta= $request->get('txt_atleta');
            $inf3->save();
        }
       /**
        *todo sobre educacion
        */
        $inf3=new Educacion();
        $inf3->pregunta="Estudia Actualmente";
        $inf3->respuesta=$request->get("Est");
        $inf3->detalles="";
        $inf3->idatleta= $request->get('txt_atleta');
        $inf3->save();

        $inf4=new Educacion();
        $inf4->pregunta="Ultimo nivel academico terminado";
        $inf4->respuesta=$request->get("nivelaca");
        if ($request->get("nivelaca") =="Especializacion/Maestria") {

            $inf4->detalles=$request->get("especializacion_maestria");
        }
        $inf4->idatleta= $request->get('txt_atleta');
        $inf4->save();
        if (!empty($request->get("txt_donde_Estudia")))
        {
            $inf5=new Educacion();
            $inf5->pregunta="¿Donde Estudia?";
            $inf5->respuesta=$request->get("txt_donde_Estudia");
            $inf5->detalles="";
            $inf5->idatleta= $request->get('txt_atleta');
            $inf5->save();
        }
        
       
        /**
         *
         * todo sobre habitacion
         */
        $inf5=new Habitacion();
        $inf5->preguntas="Como calificaria su barrio";
        $inf5->respuesta=$request->get("barrio");
        if ($request->get("barrio")=="Otros")
        {
            $inf5->detalles=$request->get("txtotrosbarrios");
        }
        else{
        $inf5->detalles="";
        }
        $inf5->idatleta= $request->get('txt_atleta');
        $inf5->save();

        $inf6=new Habitacion();
        $inf6->preguntas="Como describiria el estado de la vivienda en que reside actualmente";
        $inf6->respuesta=$request->get("vivienda");
        $inf6->detalles="";
        $inf6->idatleta= $request->get('txt_atleta');
        $inf6->save();
        /**
         * todo sobre habitos
        */
        $inf7=new Habitos();
        $inf7->preguntas="Usted fuma";
        $inf7->respuesta=$request->get("fuma");
        if ($request->get("fuma")=="Si")
        {
            $inf7->detalles=$request->get("si_fuma");
        }
        else{
            $inf7->detalles="";
        }
        $inf7->idatleta= $request->get('txt_atleta');
        $inf7->save();

        $inf8=new Habitos();
        $inf8->preguntas="Usted toma";
        $inf8->respuesta=$request->get("toma");
        if ($request->get("fuma")=="Si")
        {
            $inf8->detalles=$request->get("cerveza");
        }
        else{
            $inf8->detalles="";
        }
        $inf8->idatleta= $request->get('txt_atleta');
        $inf8->save();

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
