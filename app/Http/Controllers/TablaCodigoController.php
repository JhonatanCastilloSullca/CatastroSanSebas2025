<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TablaCodigo;
use Illuminate\Support\Facades\Redirect;
use DB;

class TablaCodigoController extends Controller
{
    //
    public function index()
    {
        $tablacodigos=TablaCodigo::all();
        $desc_tabla = [
            'TDC' => 'Tipo de Documento',
            'DCF' => '',
            'PEN' => 'Predio Catastral en',
            'VIA' => '',
            'TIN' => 'Tipo de Interior',
            'ECH' => '',
            'TED' => 'Tipo de Edificación',
            'CNP' => 'Condicion Numerica',
            'RUT' => '',
            'MEP' => 'Instalaciones MEP',
            'CDC' => 'Condicion de Conductor',
            'MFC' => '',
            'LLE' => 'Estado de llenado',
            'FC'  => '',
            'CTT' => 'Condicion de Titular',
            'ARE' => '',
            'IEI' => '',
            'FE'  => '',
            'MFI' => 'Mantenimiento Ficha Individual',
            'CDP' => 'Clasificación de Predio',
            'TIF' => '',
            'HUR' => '',
            'TDA' => '',
            'CTF' => '',
            'MFE' => 'Mantenimiento Ficha Economica',
            'ECS' => 'Instalaciones ECS',
            'ECC' => 'Instalaciones ECC',
            'TPE' => 'Tipo de Persona',
            'LOG' => '',
            'DOC' => 'Tipo de Doc. Identidad',
            'CDE' => 'Condicion de declarante',
            'TCZ' => '',
            'UCA' => 'Instalaciones UCA',
            'EPC' => '',
            'TPR' => 'Tipo de Puerta',
            'CEF' => 'Condicion Especial de Titular',
            'TPC' => '',
            'CDI' => '',
            'DFB' => 'Declaratoria de Fabrica',
            'FAQ' => 'Forma de Adquisición',
            'CET' => '',
            'ECV' => 'Estado Civil',
            'FCH' => '',
            'DFE' => 'Documentos Presentados',
            'ANU' => 'Codigo de Anuncio',
            'CEP' => '',
            'TPJ' => 'Tipo de Persona Juridica',
            'TPA' => 'Tipo de Partida Registral',
            'ZON' => 'Zonificación'
        ];
        $i=0;


        return view('pages.tablacodigo.index',compact('tablacodigos','desc_tabla','i'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'id_tablacodigos' => 'required',
            'codigo' => 'required',
            'desc_codigo' => 'required',
        ], [
            'id_tablacodigos.required' => 'El campo Id Tabla es obligatorio.',
            'codigo.required' => 'El campo Código es obligatorio.',
            'desc_codigo.required' => 'El campo Descripción es obligatorio.',
        ]);
        // Verificar la unicidad de la combinación id_tabla y codigo
        $combinacionUnica = TablaCodigo::where('id_tabla', $request->input('id_tablacodigos'))
            ->where('codigo', $request->input('codigo'))
            ->count();
        if ($combinacionUnica > 0) {
            return redirect()->back()->withInput()->withErrors(['id_tablacodigos' => 'La combinación de Id Tabla y Código ya existe.']);
        }
        $tablacodigos=new TablaCodigo();
        $tablacodigos->codigo=$request->codigo;
        $tablacodigos->id_tabla=$request->id_tablacodigos;
        $tablacodigos->desc_codigo=$request->desc_codigo;
        // dd($tablacodigos);
        $tablacodigos->save();
        return redirect()->route('tablacodigo.index')
            ->with('success', 'Codigo Agregado Correctamente.');
    }
    public function update(Request $request)
    {
        $request->validate([
            'id_tablacodigos' => 'required',
            'codigo' => 'required',
            'desc_codigo' => 'required',
        ], [
            'id_tablacodigos.required' => 'El campo Id Tabla es obligatorio.',
            'codigo.required' => 'El campo Código es obligatorio.',
            'desc_codigo.required' => 'El campo Descripción es obligatorio.',
        ]);
        DB::table('tf_tablas_codigos')
        ->where('id_tabla', $request->id_tablacodigos)
        ->where('codigo', $request->codigo)
        ->update([
            'desc_codigo' => $request->desc_codigo,
            'id_tabla' => $request->id_tablacodigos,
            'codigo' => $request->codigo,
        ]);
        return redirect()->route('tablacodigo.index')
        ->with('success', 'Código Actualizado Correctamente.');
    }
    public function destroy(Request $request)
    {

        DB::table('tf_tablas_codigos')
        ->where('id_tabla', $request->id_tabla_id_2)
        ->where('codigo', $request->id_tablacodigos_2)
        ->delete();
    return redirect()->route('tablacodigo.index')
        ->with('success', 'Código Eliminado Correctamente.');
    }

}
