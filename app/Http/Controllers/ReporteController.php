<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sectore;
use App\Models\Manzana;
use App\Models\Ficha;
use App\Models\Titular;
use App\Models\User;
use App\Models\Actividades;
use App\Models\Persona;
use App\Models\UniCat;
use App\Models\TablaCodigo;
use App\Models\FichaIndividual;
use App\Models\Institucion;
use Carbon\Carbon;
use DB;

class ReporteController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:reporte.index')->only('reportelista');

        $this->middleware('can:impresion.verficha')->only('verficha');
        $this->middleware('can:impresion.verfichainformativa')->only('verfichainformativa');
        $this->middleware('can:impresion.vercertificado')->only('vercertificado');
        $this->middleware('can:impresion.veradministracion')->only('veradministracion');
        $this->middleware('can:impresion.verinformativaeconomica')->only('verinformativaeconomica');
        $this->middleware('can:impresion.vercnumeracion')->only('vercnumeracion');

        $this->middleware('can:reporte.reportepersona')->only('reportepersona');
        $this->middleware('can:reporte.reporteusuario')->only('reporteusuario');
        $this->middleware('can:reporte.reporteusuarioauth')->only('reporteusuarioauth');
        $this->middleware('can:reporte.reportefechas')->only('reportefechas');
        $this->middleware('can:reporte.fichapuerta')->only('fichapuerta');
        $this->middleware('can:reporte.fichapredio')->only('fichapredio');
        $this->middleware('can:reporte.fichaconstrucciones')->only('fichaconstrucciones');
        $this->middleware('can:reporte.fichaantiguedad')->only('fichaantiguedad');
        $this->middleware('can:reporte.llenadoficha')->only('llenadoficha');
        $this->middleware('can:reporte.porlote')->only('porlote');

    }
    public function reportelista(Request $request)
    {
        $i=1;

        $sectores=Sectore::orderBy('codi_sector','asc')->get();
        $manzanas=Manzana::orderBy('codi_mzna','asc')->get();

        $sector2=$request->buscarSector;
        $manzana2=$request->buscarManzana;
        if($request->buscarFicha!=""){
            $ficha2=str_pad($request->buscarFicha,7,'0',STR_PAD_LEFT);
        }else{
            $ficha2=$request->buscarFicha;
        }
        $tipoficha=$request->buscarTipo;
        $ficha=Ficha::where('activo','LIKE','%%')->orderBy('nume_ficha','asc');
        if($request->buscarSector!='0'){
            $ficha=$ficha->whereHas('lote.manzana', function($query) use ($sector2) {
                $query->where('id_sector','=', $sector2);
            });
        }
        if($request->buscarManzana!=0 ){
            $ficha=$ficha->whereHas('lote', function($query) use ($manzana2) {
                $query->where('id_mzna','=', $manzana2);
            });
        }
        if($request->buscarFicha!=""){
            $ficha=$ficha->where('nume_ficha','=',$ficha2);
        }
        if($request->buscarTipo!=0){
            $ficha=$ficha->where('tipo_ficha','=',$tipoficha);
        }
        $ficha=$ficha->get();
        $total=0;

        if($request->buscarSector==''&&$request->buscarManzana==''&&$request->buscarFicha==''&&$request->buscarTipo=='')
        {
            $ficha=[];
        }

        return view('pages.reporte.index',compact('i','sectores','manzanas','ficha2','ficha','sector2','manzana2','tipoficha'));
    }

    public function verficha(Request $request)
    {
        $sectores=Sectore::orderby('codi_sector')->get();
        $manzanas=Manzana::orderby('codi_mzna')->get();

        $sector2=$request->buscarSector;
        $manzana2=$request->buscarManzana;
        if($request->buscarFicha!=""){
            $ficha2=str_pad($request->buscarFicha,7,'0',STR_PAD_LEFT);
        }else{
            $ficha2=$request->buscarFicha;
        }


        $ficha=Ficha::where('activo','LIKE','%%');
        if($request->buscarSector!='0'){
            $ficha=$ficha->whereHas('lote.manzana', function($query) use ($sector2) {
                $query->where('id_sector','=', $sector2);
            });
        }
        if($request->buscarManzana!=0 ){
            $ficha=$ficha->whereHas('lote', function($query) use ($manzana2) {
                $query->where('id_mzna','=', $manzana2);
            });
        }
        if($request->buscarFicha!=""){
            $ficha=$ficha->where('nume_ficha','=',$ficha2);
        }
        $ficha=$ficha->where('tipo_ficha','=','01');

        $ficha=$ficha->get();
        $total=0;

        return view('pages.reporte.verficha',compact('sectores','ficha2','manzanas','ficha','sector2','manzana2'));
    }

    public function verfichainformativa(Request $request)
    {
        $sectores=Sectore::orderby('codi_sector')->get();
        $manzanas=Manzana::orderby('codi_mzna')->get();

        $sector2=$request->buscarSector;
        $manzana2=$request->buscarManzana;
        if($request->buscarFicha!=""){
            $ficha2=str_pad($request->buscarFicha,7,'0',STR_PAD_LEFT);
        }else{
            $ficha2=$request->buscarFicha;
        }


        $ficha=Ficha::where('activo','LIKE','%%');
        if($request->buscarSector!='0'){
            $ficha=$ficha->whereHas('lote.manzana', function($query) use ($sector2) {
                $query->where('id_sector','=', $sector2);
            });
        }
        if($request->buscarManzana!=0 ){
            $ficha=$ficha->whereHas('lote', function($query) use ($manzana2) {
                $query->where('id_mzna','=', $manzana2);
            });
        }
        if($request->buscarFicha!=""){
            $ficha=$ficha->where('nume_ficha','=',$ficha2);
        }
        $ficha=$ficha->where('tipo_ficha','=','01');

        $ficha=$ficha->get();
        $total=0;

        return view('pages.reporte.verfichainformativa',compact('sectores','ficha2','manzanas','ficha','sector2','manzana2'));
    }





    public function vercertificado(Request $request)
    {
        $sectores=Sectore::orderby('codi_sector')->get();
        $manzanas=Manzana::orderby('codi_mzna')->get();

        $sector2=$request->buscarSector;
        $manzana2=$request->buscarManzana;
        if($request->buscarFicha!=""){
            $ficha2=str_pad($request->buscarFicha,7,'0',STR_PAD_LEFT);
        }else{
            $ficha2=$request->buscarFicha;
        }

        $ficha=Ficha::where('activo','LIKE','%%');
        if($request->buscarSector!='0'){
            $ficha=$ficha->whereHas('lote.manzana', function($query) use ($sector2) {
                $query->where('id_sector','=', $sector2);
            });
        }
        if($request->buscarManzana!=0 ){
            $ficha=$ficha->whereHas('lote', function($query) use ($manzana2) {
                $query->where('id_mzna','=', $manzana2);
            });
        }
        if($request->buscarFicha!=""){
            $ficha=$ficha->where('nume_ficha','=',$ficha2);
        }
        $ficha=$ficha->where('tipo_ficha','=','01');

        $ficha=$ficha->get();
        $total=0;

        return view('pages.reporte.vercertificado',compact('sectores','ficha2','manzanas','ficha','sector2','manzana2'));
    }


    public function veradministracion(Request $request)
    {
        $sectores=Sectore::orderby('codi_sector')->get();
        $manzanas=Manzana::orderby('codi_mzna')->get();
        $sector2=$request->buscarSector;
        $manzana2=$request->buscarManzana;
        if($request->buscarFicha!=""){
            $ficha2=str_pad($request->buscarFicha,7,'0',STR_PAD_LEFT);
        }else{
            $ficha2=$request->buscarFicha;
        }

        $ficha=Ficha::where('activo','LIKE','%%');
        if($request->buscarSector!='0'){
            $ficha=$ficha->whereHas('lote.manzana', function($query) use ($sector2) {
                $query->where('id_sector','=', $sector2);
            });
        }
        if($request->buscarManzana!=0 ){
            $ficha=$ficha->whereHas('lote', function($query) use ($manzana2) {
                $query->where('id_mzna','=', $manzana2);
            });
        }
        if($request->buscarFicha!=""){
            $ficha=$ficha->where('nume_ficha','=',$ficha2);
        }
        $ficha=$ficha->where('tipo_ficha','=','01');

        $ficha=$ficha->get();
        $total=0;

        return view('pages.reporte.veradministracion',compact('sectores','manzanas','ficha2','ficha','sector2','manzana2'));
    }


    public function verinformativaeconomica(Request $request)
    {
        $sectores=Sectore::orderby('codi_sector')->get();
        $manzanas=Manzana::orderby('codi_mzna')->get();
        $sector2=$request->buscarSector;
        $manzana2=$request->buscarManzana;
        if($request->buscarFicha!=""){
            $ficha2=str_pad($request->buscarFicha,7,'0',STR_PAD_LEFT);
        }else{
            $ficha2=$request->buscarFicha;
        }
        $ficha=Ficha::where('activo','LIKE','%%')->where('tipo_ficha','LIKE','03');
        if($request->buscarSector!='0'){
            $ficha=$ficha->whereHas('lote.manzana', function($query) use ($sector2) {
                $query->where('id_sector','=', $sector2);
            });
        }
        if($request->buscarManzana!=0 ){
            $ficha=$ficha->whereHas('lote', function($query) use ($manzana2) {
                $query->where('id_mzna','=', $manzana2);
            });
        }if($request->buscarFicha!=""){
            $ficha=$ficha->where('nume_ficha','=',$ficha2);
        }

        $ficha=$ficha->get();
        $total=0;

        return view('pages.reporte.verinformativaeconomica',compact('sectores','ficha2','manzanas','ficha','sector2','manzana2'));
    }


    public function vercnumeracion(Request $request)
    {
        $sectores=Sectore::orderby('codi_sector')->get();
        $manzanas=Manzana::orderby('codi_mzna')->get();
        $sector2=$request->buscarSector;
        $manzana2=$request->buscarManzana;
        if($request->buscarFicha!=""){
            $ficha2=str_pad($request->buscarFicha,7,'0',STR_PAD_LEFT);
        }else{
            $ficha2=$request->buscarFicha;
        }
        $ficha=Ficha::where('activo','LIKE','%%');
        if($request->buscarSector!='0'){
            $ficha=$ficha->whereHas('lote.manzana', function($query) use ($sector2) {
                $query->where('id_sector','=', $sector2);
            });
        }
        if($request->buscarManzana!=0 ){
            $ficha=$ficha->whereHas('lote', function($query) use ($manzana2) {
                $query->where('id_mzna','=', $manzana2);
            });
        }
        if($request->buscarFicha!=""){
            $ficha=$ficha->where('nume_ficha','=',$ficha2);
        }
        $ficha=$ficha->where('tipo_ficha','=','01');

        $ficha=$ficha->get();
        $total=0;

        return view('pages.reporte.vercnumeracion',compact('sectores','ficha2','manzanas','ficha','sector2','manzana2'));
    }
    public function reportepersona(Request $request)
    {
        $titulares=Titular::all();
        $titulares=$titulares->unique('id_persona');
        $titular2=$request->buscarTitular;
        $ficha=Ficha::where('activo','LIKE','%%');
        if($request->buscarSector!='0'){
            $ficha=$ficha->whereHas('titulars', function($query) use ($titular2) {
                $query->where('id_persona','=', $titular2);
            })->orwhereHas('titular', function($query) use ($titular2) {
                $query->where('id_persona','=', $titular2);
            });
        }

        $ficha=$ficha->get();
        $numero = count($ficha);
        $total=0;

        if($request->buscarTitular=='')
        {
            $ficha=[];
        }

        return view('pages.reporte.reportepersona',compact('titulares','numero','titular2','ficha'));
    }

    public function reportetitulares(Request $request)
    {
        $sectores  = Sectore::orderby('codi_sector')->get();
        $sector2 = $request->buscarSector;

        $now = now('America/Lima');

        // Subconsulta de áreas (igual que antes pero sin ->toSql())
        $areaPorLote = DB::table('tf_uni_cat as u')
        ->join('tf_fichas as f', 'u.id_uni_cat', '=', 'f.id_uni_cat')
        ->leftJoin('tf_fichas_bienes_comunes as tb', 'f.id_ficha', '=', 'tb.id_ficha')
        ->leftJoin('tf_fichas_individuales as ti', 'f.id_ficha', '=', 'ti.id_ficha')
        ->leftJoin('tf_construcciones as tc', 'f.id_ficha', '=', 'tc.id_ficha')
        ->whereIn('f.tipo_ficha', ['01','04'])
        ->groupBy('u.id_lote','u.id_edificacion','u.codi_entrada','u.codi_piso')
        ->selectRaw("
            u.id_lote,
            u.id_edificacion,
            u.codi_entrada,
            u.codi_piso,
            MAX(CASE WHEN f.tipo_ficha = '04' AND tb.area_verificada IS NOT NULL
                    THEN tb.area_verificada ELSE ti.area_verificada END) AS area_seleccionada,
            SUM(tc.area_verificada) AS total_construcciones
        ");

        // Traemos TODO en una sola consulta
        $titulares = UniCat::query()
        // sector por whereExists (más barato que whereHas en cascada)
        ->whereExists(function($q) use ($sector2) {
            $q->select(DB::raw(1))
            ->from('tf_lotes as l')
            ->join('tf_manzanas as m', 'm.id_mzna', '=', 'l.id_mzna')
            ->join('tf_sectores as s', 's.id_sector', '=', 'm.id_sector')
            ->whereColumn('l.id_lote', 'tf_uni_cat.id_lote')
            ->where('s.id_sector', $sector2);
        })
        // Adjunta áreas
        ->joinSub($areaPorLote, 'area_por_lote', function($j) {
            $j->on('tf_uni_cat.id_lote', '=', 'area_por_lote.id_lote')
            ->on('tf_uni_cat.id_edificacion', '=', 'area_por_lote.id_edificacion')
            ->on('tf_uni_cat.codi_entrada', '=', 'area_por_lote.codi_entrada')
            ->on('tf_uni_cat.codi_piso', '=', 'area_por_lote.codi_piso');
        })
        // Lotes para ordenar
        ->leftJoin('tf_lotes as l', 'tf_uni_cat.id_lote', '=', 'l.id_lote')
        ->leftJoin('tf_edificaciones as e', 'e.id_edificacion', '=', 'tf_uni_cat.id_edificacion')

        // ===== Subselects para PUERTA/VÍA =====
        ->addSelect([
            'tf_uni_cat.*',
            'l.id_mzna',
            'l.codi_lote',
            'area_por_lote.area_seleccionada',
            'area_por_lote.total_construcciones',

            // tipo_via / nomb_via / codi_via (desde tf_puertas + tf_vias) y nume_muni
            'tipo_via' => DB::table('tf_puertas as p')
                ->join('tf_ingresos as i', 'i.id_puerta', '=', 'p.id_puerta')
                ->join('tf_fichas as f', 'f.id_ficha', '=', 'i.id_ficha')
                ->join('tf_vias as v', 'v.id_via', '=', 'p.id_via')
                ->whereColumn('f.id_uni_cat', 'tf_uni_cat.id_uni_cat')
                ->where('p.tipo_puerta', 'P')
                ->where('f.tipo_ficha', '01')
                ->orderBy('f.fecha_grabado', 'desc')
                ->limit(1)->select('v.tipo_via'),

            'nomb_via' => DB::table('tf_puertas as p')
                ->join('tf_ingresos as i', 'i.id_puerta', '=', 'p.id_puerta')
                ->join('tf_fichas as f', 'f.id_ficha', '=', 'i.id_ficha')
                ->join('tf_vias as v', 'v.id_via', '=', 'p.id_via')
                ->whereColumn('f.id_uni_cat', 'tf_uni_cat.id_uni_cat')
                ->where('p.tipo_puerta', 'P')
                ->where('f.tipo_ficha', '01')
                ->orderBy('f.fecha_grabado', 'desc')
                ->limit(1)->select('v.nomb_via'),

            'codi_via' => DB::table('tf_puertas as p')
                ->join('tf_ingresos as i', 'i.id_puerta', '=', 'p.id_puerta')
                ->join('tf_fichas as f', 'f.id_ficha', '=', 'i.id_ficha')
                ->join('tf_vias as v', 'v.id_via', '=', 'p.id_via')
                ->whereColumn('f.id_uni_cat', 'tf_uni_cat.id_uni_cat')
                ->where('p.tipo_puerta', 'P')
                ->where('f.tipo_ficha', '01')
                ->orderBy('f.fecha_grabado', 'desc')
                ->limit(1)->select('v.codi_via'),

            'nume_muni' => DB::table('tf_puertas as p')
                ->join('tf_ingresos as i', 'i.id_puerta', '=', 'p.id_puerta')
                ->join('tf_fichas as f', 'f.id_ficha', '=', 'i.id_ficha')
                ->whereColumn('f.id_uni_cat', 'tf_uni_cat.id_uni_cat')
                ->where('p.tipo_puerta', 'P')
                ->where('f.tipo_ficha', '01')
                ->orderBy('f.fecha_grabado', 'desc')
                ->limit(1)->select('p.nume_muni'),

            // ===== Subselect USO más reciente (desc_uso) =====
            'desc_uso' => DB::table('tf_fichas as f')
                ->join('tf_fichas_individuales as fi', 'fi.id_ficha', '=', 'f.id_ficha')
                ->join('tf_usos as u', 'u.codi_uso', '=', 'fi.codi_uso')
                ->whereColumn('f.id_uni_cat','tf_uni_cat.id_uni_cat')
                ->where('f.tipo_ficha','01')
                ->orderBy('f.fecha_grabado','desc')
                ->limit(1)->select('u.desc_uso'),

            // ===== Subselects TITULARES agregados (para no hacer 3 bucles en Blade) =====
            // NOMBRES (respeta persona natural / jurídica)
            'titulares_nombres' => DB::table('tf_titulares as t')
            ->join('tf_fichas as f', 'f.id_ficha', '=', 't.id_ficha')
            ->join('tf_personas as p', 'p.id_persona', '=', 't.id_persona')
            ->whereColumn('f.id_uni_cat','tf_uni_cat.id_uni_cat')
            // OJO: en PG, si tipo_ficha es texto usa ['01','02']; si es numérico usa [1,2].
            ->whereIn('f.tipo_ficha', ['01','02'])
            ->selectRaw("
                string_agg(
                    (
                        CASE
                            WHEN p.tipo_persona = '1' THEN concat_ws(' ', p.nombres, p.ape_paterno, p.ape_materno)
                            WHEN p.tipo_persona = '2' THEN p.razon_social
                            ELSE 'Otro'
                        END
                    )::text,
                    E'\n'
                    ORDER BY f.fecha_grabado DESC
                )
            "),

            // ===== PORCENTAJES =====
            'titulares_porcentajes' => DB::table('tf_titulares as t')
            ->join('tf_fichas as f', 'f.id_ficha', '=', 't.id_ficha')
            ->whereColumn('f.id_uni_cat','tf_uni_cat.id_uni_cat')
            ->whereIn('f.tipo_ficha', ['01','02'])
            ->selectRaw("
                string_agg(
                    t.porc_cotitular::text,
                    E'\n'
                    ORDER BY f.fecha_grabado DESC
                )
            "),

            // ===== DOCUMENTOS =====
            'titulares_documentos' => DB::table('tf_titulares as t')
            ->join('tf_fichas as f', 'f.id_ficha', '=', 't.id_ficha')
            ->join('tf_personas as p', 'p.id_persona', '=', 't.id_persona')
            ->whereColumn('f.id_uni_cat','tf_uni_cat.id_uni_cat')
            ->whereIn('f.tipo_ficha', ['01','02'])
            ->selectRaw("
                string_agg(
                    p.nume_doc::text,
                    E'\n'
                    ORDER BY f.fecha_grabado DESC
                )
            "),
        ])
        ->orderBy('l.id_mzna')
        ->orderBy('l.codi_lote')

        /* 1) Que la edificación '99' vaya PRIMERO; el resto después */
        ->orderByRaw("
        CASE
            WHEN COALESCE(NULLIF(e.codi_edificacion,''),'99') = '99' THEN 0
            ELSE 1
        END ASC
        ")

        /* 2) Para las edificaciones que NO son '99', orden ascendente numérico por edificación */
        ->orderByRaw("
        CASE
            WHEN COALESCE(NULLIF(e.codi_edificacion,''),'99') <> '99'
            THEN NULLIF(e.codi_edificacion,'')::int
        END ASC NULLS LAST
        ")

        /* 3) Dentro de cada edificación, priorizar la BC (99/99/999) primero */
        ->orderByRaw("
        CASE
            WHEN tf_uni_cat.codi_entrada = '99'
            AND tf_uni_cat.codi_piso    = '99'
            AND tf_uni_cat.codi_unidad  = '999'
            THEN 0 ELSE 1
        END ASC
        ")

        /* 4) Para el resto (no BC), ordenar por entrada → piso → unidad numéricamente */
        ->orderByRaw("
        CASE
            WHEN NOT (tf_uni_cat.codi_entrada='99' AND tf_uni_cat.codi_piso='99' AND tf_uni_cat.codi_unidad='999')
            THEN NULLIF(BTRIM(tf_uni_cat.codi_entrada),'')::int
        END ASC NULLS LAST
        ")
        ->orderByRaw("
        CASE
            WHEN NOT (tf_uni_cat.codi_entrada='99' AND tf_uni_cat.codi_piso='99' AND tf_uni_cat.codi_unidad='999')
            THEN NULLIF(BTRIM(tf_uni_cat.codi_piso),'')::int
        END ASC NULLS LAST
        ")
        ->orderByRaw("
        CASE
            WHEN NOT (tf_uni_cat.codi_entrada='99' AND tf_uni_cat.codi_piso='99' AND tf_uni_cat.codi_unidad='999')
            THEN NULLIF(BTRIM(tf_uni_cat.codi_unidad),'')::int
        END ASC NULLS LAST
        ")


        ->get();



        $numero = count($titulares);
        $total = 0;
        return view('pages.reporte.reportetitulares', compact('titulares', 'sectores', 'sector2', 'numero'));
    }


    

    public function reporteusuario(Request $request)
    {
        $fechainicio=$request->buscarFechaInicio;
        $fechafin=$request->buscarFechaFin;
        $usuarios=User::all();
        $usuario2=$request->buscarUsuario;
        $ficha=Ficha::where('activo','LIKE','%%');
        if($request->buscarFechaInicio!=''){
            $ficha=$ficha->where('fecha_grabado','>=',$fechainicio)->where('fecha_grabado','<=',$fechafin);
        }
        if($request->buscarUsuario!=0){
            $ficha=$ficha->where('id_usuario','=',$usuario2);
        }
        $ficha=$ficha->get();
        $numero = count($ficha);
        $total=0;
        if($request->buscarFechaInicio=='' && $request->buscarFechaFin=='' && $request->buscarUsuario=='')
        {
            $ficha=[];
            $numero = 0;
        }

        return view('pages.reporte.reporteusuario',compact('ficha','fechainicio','fechafin','usuarios','usuario2','numero'));
    }
    public function reporteusuarioauth(Request $request)
    {
        $fechainicio=$request->buscarFechaInicio;
        $fechafin= strtotime($request->buscarFechaFin."+ 1 days");

        $fechafin=date("Y-m-d",strtotime($request->buscarFechaFin."+ 1 days"));



        $usuarios=User::all();
        $usuario2=\Auth::user()->id_usuario;
        $ficha=Ficha::where('activo','LIKE','%%');
        if($request->buscarFechaInicio!=''){
            $ficha=$ficha->where('fecha_grabado','>=',$fechainicio)->where('fecha_grabado','<=',$fechafin);
        }
            $ficha=$ficha->where('id_usuario','=',$usuario2);
        $ficha=$ficha->get();
        $numero = count($ficha);
        $total=0;
        $fechafin=date("Y-m-d",strtotime($fechafin."- 1 days"));

        if($request->buscarFechaInicio=='' && $request->buscarFechaFin=='')
        {
            $ficha=[];
            $numero = 0;
        }

        return view('pages.reporte.reporteusuarioauth',compact('ficha','fechainicio','fechafin','usuarios','usuario2','numero'));
    }

    public function reportefechas(Request $request)
    {
        $fechainicio=$request->buscarFechaInicio;
        $fechafin=$request->buscarFechaFin;
        $ficha=Ficha::where('activo','LIKE','%%');
        if($request->buscarFechaInicio!=''){
            $ficha=$ficha->where('fecha_grabado','>=',$fechainicio)->where('fecha_grabado','<=',$fechafin);
        }
        $ficha=$ficha->get();
        $numero = count($ficha);
        $total=0;
        if($request->buscarFechaInicio=='' || $request->buscarFechaFin=='' )
        {
            $ficha=[];
        }

        return view('pages.reporte.reportefechas',compact('ficha','fechainicio','fechafin','numero'));
    }

    public function fichapuerta(Request $request)
    {
        $sectores=Sectore::orderby('codi_sector')->get();
        $manzanas=Manzana::orderby('codi_mzna')->get();
        $puertas=TablaCodigo::where('id_tabla','=','TPR')->orderby('codigo','asc')->get();


        $sector2=$request->buscarSector;
        $manzana2=$request->buscarManzana;
        $puerta2=$request->buscarPuerta;
        if($request->buscarFicha!=""){
            $ficha2=str_pad($request->buscarFicha,7,'0',STR_PAD_LEFT);
        }else{
            $ficha2=$request->buscarFicha;
        }


        $ficha=Ficha::where('activo','LIKE','%%');
        if($request->buscarSector!='0'){
            $ficha=$ficha->whereHas('lote.manzana', function($query) use ($sector2) {
                $query->where('id_sector','=', $sector2);
            });
        }
        if($request->buscarManzana!=0 ){
            $ficha=$ficha->whereHas('lote', function($query) use ($manzana2) {
                $query->where('id_mzna','=', $manzana2);
            });
        }
        if($request->buscarPuerta!=0 ){
            $ficha=$ficha->whereHas('puertas', function($query) use ($puerta2) {
                $query->where('codi_puerta','=', $puerta2);
            });
        }
        $ficha=$ficha->where('tipo_ficha','=','01');

        $ficha=$ficha->get();
        $numero = count($ficha);
        $total=0;
        return view('pages.reporte.fichapuerta',compact('sectores','ficha2','puertas','puerta2','manzanas','ficha','sector2','manzana2','numero'));
    }

    public function fichapredio(Request $request)
    {
        $sectores=Sectore::orderby('codi_sector')->get();
        $manzanas=Manzana::orderby('codi_mzna')->get();
        $clasificacion=TablaCodigo::where('id_tabla','=','CDP')->orderby('codigo','asc')->get();


        $sector2=$request->buscarSector;
        $manzana2=$request->buscarManzana;
        $clasificacion2=$request->buscarClasificacion;


        $ficha=Ficha::where('tipo_ficha','LIKE','01');
        if($request->buscarSector!='0'){
            $ficha=$ficha->whereHas('lote.manzana', function($query) use ($sector2) {
                $query->where('id_sector','=', $sector2);
            });
        }
        if($request->buscarManzana!=0 ){
            $ficha=$ficha->whereHas('lote', function($query) use ($manzana2) {
                $query->where('id_mzna','=', $manzana2);
            });
        }

        if($request->buscarClasificacion!=0 ){
            $ficha=$ficha->whereHas('fichaindividual', function($query) use ($clasificacion2) {
                $query->where('clasificacion','=', $clasificacion2);
            });
        }


        $ficha=$ficha->get();
        $numero = count($ficha);
        $total=0;
        return view('pages.reporte.fichapredio',compact('sectores','clasificacion','clasificacion2','manzanas','ficha','sector2','manzana2','numero'));
    }


    public function fichaconstrucciones(Request $request)
    {
        $sectores=Sectore::orderby('codi_sector')->get();
        $manzanas=Manzana::orderby('codi_mzna')->get();



        $construccion=TablaCodigo::where('id_tabla','=','MEP')->orderby('codigo','asc')->get();


        $sector2=$request->buscarSector;
        $manzana2=$request->buscarManzana;
        $construccion2=$request->buscarConstruccion;


        $ficha=Ficha::where('tipo_ficha','LIKE','01');
        if($request->buscarSector!='0'){
            $ficha=$ficha->whereHas('lote.manzana', function($query) use ($sector2) {
                $query->where('id_sector','=', $sector2);
            });
        }
        if($request->buscarManzana!=0 ){
            $ficha=$ficha->whereHas('lote', function($query) use ($manzana2) {
                $query->where('id_mzna','=', $manzana2);
            });
        }

        if($request->buscarConstruccion!=0 ){
            $ficha=$ficha->whereHas('construccions', function($query) use ($construccion2) {
                $query->where('mep','=', $construccion2);
            });
        }


        $ficha=$ficha->get();
        $numero = count($ficha);
        $total=0;
        return view('pages.reporte.fichaconstrucciones',compact('sectores','construccion','construccion2','manzanas','ficha','sector2','manzana2','numero'));
    }

    public function llenadoficha(Request $request)
    {
        $i=0;
        $fechainicio=$request->buscarFechaInicio;
        $ficha=Ficha::join('tf_usuarios as u','tf_fichas.id_usuario','=','u.id_usuario')
        ->select('u.ape_paterno','u.ape_materno','u.nombres',DB::raw('COUNT(tf_fichas.id_usuario) as cantidad'))
        ->whereDate('tf_fichas.fecha_grabado',$fechainicio)->groupBy('u.ape_paterno','u.ape_materno','u.nombres')->orderBy('cantidad','desc')->get();
        return view('pages.reporte.llenadoficha',compact('ficha','fechainicio','i'));
    }

    public function porlote(Request $request)
    {
        $sectores=Sectore::orderBy('codi_sector','asc')->get();
        $manzanas=Manzana::orderBy('codi_mzna','asc')->get();

        $sector2=$request->buscarSector;
        $manzana2=$request->buscarManzana;

        $ficha=Ficha::select('id_lote',DB::raw('COUNT(id_lote) as cantidad'))->where('activo','LIKE','%%')->groupBy('id_lote');
        if($request->buscarSector!='0'){
            $ficha=$ficha->whereHas('lote.manzana', function($query) use ($sector2) {
                $query->where('id_sector','=', $sector2);
            });
        }
        if($request->buscarManzana!=0 ){
            $ficha=$ficha->whereHas('lote', function($query) use ($manzana2) {
                $query->where('id_mzna','=', $manzana2);
            });
        }
        $ficha=$ficha->get();

        $total=0;

        if($request->buscarSector==''&&$request->buscarManzana=='')
        {
            $ficha=[];
        }

        return view('pages.reporte.porlote',compact('sectores','manzanas','ficha','sector2','manzana2'));
    }

    public function fichaantiguedad(Request $request)
    {
        $sectores=Sectore::orderby('codi_sector')->get();
        $manzanas=Manzana::orderby('codi_mzna')->get();

        $hoy = Carbon::now('America/Lima');




        $sector2=$request->buscarSector;
        $manzana2=$request->buscarManzana;
        $antiguedad2=$request->buscarAntiguedad;




        $ficha=Ficha::where('tipo_ficha','LIKE','01');
        if($request->buscarSector!='0'){
            $ficha=$ficha->whereHas('lote.manzana', function($query) use ($sector2) {
                $query->where('id_sector','=', $sector2);
            });
        }
        if($request->buscarManzana!=0 ){
            $ficha=$ficha->whereHas('lote', function($query) use ($manzana2) {
                $query->where('id_mzna','=', $manzana2);
            });
        }
        if($request->buscarAntiguedad!=0 ){

            switch($antiguedad2) {
                case('1'):
                    $fechauso = $antiguedad2 ;

                    $fechaactual = $hoy;
                    $nuevafecha = strtotime ('-10 year' , strtotime($fechaactual)); //Se resta un año menos
                    $nuevafecha = date ('Y-m-d',$nuevafecha);

                    if($nuevafecha > $fechauso){

                        $ficha=$ficha->whereHas('construccions', function($query) use ($nuevafecha) {
                            $query->where('fecha','>', $nuevafecha);
                        });

                    }else{

                    }

                    break;


                case('2'):

                    $fechauso = $antiguedad2 ;

                    $fechaactual = $hoy;
                    $nuevafecha = strtotime ('-20 year' , strtotime($fechaactual)); //Se resta un año menos
                    $nuevafecha = date ('Y-m-d',$nuevafecha);

                    if($nuevafecha > $fechauso){

                        $ficha=$ficha->whereHas('construccions', function($query) use ($nuevafecha) {
                            $query->where('fecha','>', $nuevafecha);
                        });

                    }else{

                    }

                    break;

                case('3'):

                    $fechauso = $antiguedad2 ;

                    $fechaactual = $hoy;
                    $nuevafecha = strtotime ('-30 year' , strtotime($fechaactual)); //Se resta un año menos
                    $nuevafecha = date ('Y-m-d',$nuevafecha);

                    if($nuevafecha > $fechauso){

                        $ficha=$ficha->whereHas('construccions', function($query) use ($nuevafecha) {
                            $query->where('fecha','>', $nuevafecha);
                        });

                    }else{

                    }

                    break;

                case('4'):

                    $fechauso = $antiguedad2 ;

                    $fechaactual = $hoy;
                    $nuevafecha = strtotime ('-40 year' , strtotime($fechaactual)); //Se resta un año menos
                    $nuevafecha = date ('Y-m-d',$nuevafecha);

                    if($nuevafecha > $fechauso){

                        $ficha=$ficha->whereHas('construccions', function($query) use ($nuevafecha) {
                            $query->where('fecha','>', $nuevafecha);
                        });

                    }else{

                    }

                    break;

                case('5'):

                    $fechauso = $antiguedad2 ;

                    $fechaactual = $hoy;
                    $nuevafecha = strtotime ('-50 year' , strtotime($fechaactual)); //Se resta un año menos
                    $nuevafecha = date ('Y-m-d',$nuevafecha);

                    if($nuevafecha > $fechauso){

                        $ficha=$ficha->whereHas('construccions', function($query) use ($nuevafecha) {
                            $query->where('fecha','>', $nuevafecha);
                        });

                    }else{

                    }

                    break;

                case('6'):

                    $fechauso = $antiguedad2 ;

                    $fechaactual = $hoy;
                    $nuevafecha = strtotime ('-60 year' , strtotime($fechaactual)); //Se resta un año menos
                    $nuevafecha = date ('Y-m-d',$nuevafecha);

                    if($nuevafecha > $fechauso){

                        $ficha=$ficha->whereHas('construccions', function($query) use ($nuevafecha) {
                            $query->where('fecha','>', $nuevafecha);
                        });

                    }else{

                    }

                    break;
                case('7'):

                    $fechauso = $antiguedad2 ;

                    $fechaactual = $hoy;
                    $nuevafecha = strtotime ('-70 year' , strtotime($fechaactual)); //Se resta un año menos
                    $nuevafecha = date ('Y-m-d',$nuevafecha);

                    if($nuevafecha > $fechauso){

                        $ficha=$ficha->whereHas('construccions', function($query) use ($nuevafecha) {
                            $query->where('fecha','>', $nuevafecha);
                        });

                    }else{

                    }

                    break;

                case('8'):

                    $fechauso = $antiguedad2 ;

                    $fechaactual = $hoy;
                    $nuevafecha = strtotime ('-80 year' , strtotime($fechaactual)); //Se resta un año menos
                    $nuevafecha = date ('Y-m-d',$nuevafecha);

                    if($nuevafecha > $fechauso){

                        $ficha=$ficha->whereHas('construccions', function($query) use ($nuevafecha) {
                            $query->where('fecha','>', $nuevafecha);
                        });

                    }else{

                    }

                    break;

                case('9'):

                    $fechauso = $antiguedad2 ;

                    $fechaactual = $hoy;
                    $nuevafecha = strtotime ('-90 year' , strtotime($fechaactual)); //Se resta un año menos
                    $nuevafecha = date ('Y-m-d',$nuevafecha);

                    if($nuevafecha > $fechauso){

                        $ficha=$ficha->whereHas('construccions', function($query) use ($nuevafecha) {
                            $query->where('fecha','>', $nuevafecha);
                        });

                    }else{

                    }

                    break;

                default:
                    $msg = 'Something went wrong.';
            }


        }



        $ficha=$ficha->get();
        $numero = count($ficha);
        $total=0;
        return view('pages.reporte.fichaantiguedad',compact('sectores','manzanas','antiguedad2','ficha','sector2','manzana2','numero'));
    }
    public function fichasmasivas(Request $request)
    {
        $sectores=Sectore::orderBy('codi_sector','asc')->get();
        $manzanas=Manzana::orderBy('codi_mzna','asc')->get();

        $sector2=$request->buscarSector;
        $manzana2=$request->buscarManzana;
        $tipoficha=$request->buscarTipo;

        if($request->buscarSector!=0 && $request->buscarManzana!=0 && $request->buscarTipo!=0){
            if($request->buscarSector!="" && $request->buscarManzana!="" && $request->buscarTipo!=""){
                $this->fichaIndividuales($sector2,$manzana2,$tipoficha);
            }
        }

        return view('pages.reporte.fichasmasivas',compact('sectores','manzanas','sector2','manzana2','tipoficha'));
    }
     public function fichaIndividuales($sector,$manzana,$tipo_ficha)
    {
        $fichas=Ficha::where('activo','LIKE','%%')->orderBy('nume_ficha','asc');
        if($sector!='0'){
            $fichas=$fichas->whereHas('lote.manzana', function($query) use ($sector) {
                $query->where('id_sector','=', $sector);
            });
        }
        if($manzana!=0 ){
            $fichas=$fichas->whereHas('lote', function($query) use ($manzana) {
                $query->where('id_mzna','=', $manzana);
            });
        }
        if($tipo_ficha!=0){
            $fichas=$fichas->where('tipo_ficha','=',$tipo_ficha);
        }
        $fichas=$fichas->get();


        $fileName = 'Reporte Masivo de Fichas.pdf';
        $mpdf = new \Mpdf\Mpdf([
            'format' => [210, 297],
            'margin_left' => 10,
            'margin_right' => 10,
            'margin_top' => 10,
            'margin_bottom' => 10,
            'margin_header' => 10,
            'margin_footer' => 10,
        ]);
        $logos=Institucion::first();
        switch($tipo_ficha) {
            case('01'):
                $html = \View::make('pages.pdf.individuales',compact('sector','fichas','logos'));
                break;

            case('02'):
                $html = \View::make('pages.pdf.cotitularidades',compact('sector','fichas','logos'));
                break;

            case('04'):
                $html = \View::make('pages.pdf.bienescomuneses',compact('sector','fichas','logos'));
                break;

            case('03'):
                $html = \View::make('pages.pdf.economicas',compact('sector','fichas','logos'));
                break;

            case('05'):
                $html = \View::make('pages.pdf.bienculturaleses',compact('sector','fichas','logos'));
                break;

            case('06'):
                $html = \View::make('pages.pdf.rurales',compact('sector','fichas','logos'));
                break;

            default:
            $html = \View::make('pages.pdf.individuales',compact('sector','fichas','logos'));
        }
        $html = $html->render();
        $mpdf->WriteHTML($html);
        $mpdf->Output($fileName,'D');
    }


    public function fichaanexo(Request $request)
    {
        $sectores=Sectore::orderby('codi_sector')->get();
        $manzanas=Manzana::orderby('codi_mzna')->get();

        $sector2=$request->buscarSector;
        $manzana2=$request->buscarManzana;

        $ficha=Ficha::where('activo','LIKE','%%');
        if($request->buscarSector!='0'){
            $ficha=$ficha->whereHas('lote.manzana', function($query) use ($sector2) {
                $query->where('id_sector','=', $sector2);
            });
        }
        if($request->buscarManzana!=0 ){
            $ficha=$ficha->whereHas('lote', function($query) use ($manzana2) {
                $query->where('id_mzna','=', $manzana2);
            });
        }


        $ficha=$ficha->get();
        $numero = count($ficha);
        $total=0;
        return view('pages.reporte.fichaanexo',compact('sectores','manzanas','ficha','sector2','manzana2','numero'));
    }

    public function actividadeconomica(Request $request)
    {
        $actividades = Actividades::orderBy('codi_actividad', 'asc')->get();
        $sectores = Sectore::all();

        $actividad2 = $request->buscarActividad;
        $sector2 = $request->buscarSector;


        $ficha = Ficha::where('activo', 'LIKE', '%%');
        if ($request->buscarActividad != '' || $request->buscarActividad != 0) {
            $ficha = $ficha->whereHas('actividades', function ($query) use ($actividad2) {
                $query->where('tf_actividades.codi_actividad', '=', $actividad2);
            });
        }
        if ($request->buscarSector != '0') {
            $ficha = $ficha->whereHas('lote.manzana', function ($query) use ($sector2) {
                $query->where('id_sector', '=', $sector2);
            });
        }

        $ficha = $ficha->get();
        $numero = count($ficha);
        $total = 0;
        if ($request->buscarSector == '' && $request->buscarActividad == "") {
            $ficha = [];
            $numero = 0;
        }
        return view('pages.reporte.actividadeconomica', compact('sectores','sector2','actividades', 'ficha', 'actividad2', 'numero'));
    }
}
