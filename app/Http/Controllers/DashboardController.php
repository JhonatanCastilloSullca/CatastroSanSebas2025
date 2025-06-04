<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ficha;
use App\Models\FichaIndividual;
use App\Models\FichaCotitularidad;
use App\Models\FichaEconomica;
use App\Models\FichaBienComun;

use App\Models\Lote;
use App\Models\Sectore;
use App\Models\Manzana;
use DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $fichaindividual=Ficha::where('tipo_ficha','01')->count();
        $fichaindividualestado=FichaIndividual::select(DB::raw('COUNT(esta_llenado) as cantidad'),'esta_llenado')->groupBy('esta_llenado')->get();
        $fichacotitularidad=Ficha::where('tipo_ficha','02')->count();
        $fichacotitularidadestado=FichaCotitularidad::select(DB::raw('COUNT(esta_llenado) as cantidad'),'esta_llenado')->groupBy('esta_llenado')->get();
        $fichaeconomica=Ficha::where('tipo_ficha','03')->count();
        $fichaeconomicaestado=FichaEconomica::select(DB::raw('COUNT(esta_llenado) as cantidad'),'esta_llenado')->groupBy('esta_llenado')->get();

        $fichabiencomun=Ficha::where('tipo_ficha','04')->count();
        $fichabiencomunestado=FichaBienComun::select(DB::raw('COUNT(esta_llenado) as cantidad'),'esta_llenado')->groupBy('esta_llenado')->get();

        $fichassectores=Ficha::join('tf_lotes as l','tf_fichas.id_lote','=','l.id_lote')->join('tf_manzanas as m','l.id_mzna','=','m.id_mzna')->join('tf_sectores as s','m.id_sector','=','s.id_sector')
        ->select(DB::raw('COUNT(s.id_sector) as cantidad'),'s.nomb_sector')->groupBy('s.nomb_sector')->orderBy('s.nomb_sector','asc')->get();
        $fichastipo=Ficha::select(DB::raw('COUNT(tipo_ficha) as cantidad'),'tipo_ficha')->groupBy('tipo_ficha')->get();
        $fichascalificacion=Ficha::join('tf_fichas_individuales as f','tf_fichas.id_ficha','=','f.id_ficha')->select(DB::raw('COUNT(f.clasificacion) as cantidad'),'f.clasificacion')->where('f.clasificacion','!=','0')->orderBy('cantidad','desc')->groupBy('f.clasificacion')->take(10)->get();
        $fichaspersona=Ficha::join('tf_titulares as t','tf_fichas.id_ficha','=','t.id_ficha')->join('tf_personas as p','t.id_persona','=','p.id_persona')->where('p.tipo_persona','=','1')->count();
        $fichaspersona2=Ficha::join('tf_titulares as t','tf_fichas.id_ficha','=','t.id_ficha')->join('tf_personas as p','t.id_persona','=','p.id_persona')->where('p.tipo_persona','=','2')->count();

        $totallotes=Lote::whereHas('ficha', function($query) {
            $query->where('activo','like', '%%');
        })->count();
        $totallotessector=Lote::join('tf_manzanas as m','tf_lotes.id_mzna','=','m.id_mzna')->join('tf_sectores as s','m.id_sector','=','s.id_sector')->select(DB::raw('COUNT(s.codi_sector) as cantidad'),'s.codi_sector','s.nomb_sector')
        ->whereHas('ficha', function($query) {
            $query->where('activo','like', '%%');
        })->groupBy('s.codi_sector','s.nomb_sector')->get();
        $sector=Sectore::all();
        $contadorindividual=0;
        $contadoreconomica=0;
        $contadorcotitular=0;
        $contadorbiencomun=0;
        foreach($sector as $sectores1){
            $contadorindividual = $contadorindividual+$sectores1->fichaindividual;
            $contadoreconomica = $contadoreconomica+$sectores1->fichaeconomica;
            $contadorcotitular = $contadorcotitular+$sectores1->fichacotitular;
            $contadorbiencomun = $contadorbiencomun+$sectores1->fichabiencomun;
        }
        $porcentajeindividual = round(( $fichaindividual* 100 /  $contadorindividual), 2);
        $porcentajeeconomica = round(( $fichaeconomica * 100 /  $contadoreconomica), 2);
        $porcentajecotitular = round(( $fichacotitularidad * 100/  $contadorcotitular), 2);
        $porcentajebiencomun = round(( $fichabiencomun * 100/  $contadorbiencomun), 2);

        $fichaactividades=Ficha::join('tf_autorizaciones_funcionamiento as af','tf_fichas.id_ficha','=','af.id_ficha')->join('tf_actividades as a','af.codi_actividad','=','a.codi_actividad')
        ->select(DB::raw('COUNT(a.codi_actividad) as cantidad'),'a.desc_actividad','a.codi_actividad')
        ->groupBy('a.codi_actividad','a.desc_actividad')->orderBy('cantidad','desc')->take(10)->get();

        return view('dashboard',compact('fichaindividual','fichaindividualestado','fichacotitularidad','fichacotitularidadestado','fichaeconomica',
        'fichaeconomicaestado','fichassectores','fichastipo','fichascalificacion','fichaspersona','fichaspersona2','fichabiencomun','fichabiencomunestado','totallotes','totallotessector',
        'porcentajeindividual','porcentajeeconomica','porcentajecotitular','porcentajebiencomun','fichaactividades'));
    }
}
