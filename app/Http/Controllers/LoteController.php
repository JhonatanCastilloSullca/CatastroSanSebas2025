<?php

namespace App\Http\Controllers;

use App\Http\Requests\FichaLoteRequest;
use App\Models\Edificaciones;
use App\Models\Ficha;
use App\Models\Lote;
use App\Models\UniCat;
use Illuminate\Http\Request;

class LoteController extends Controller
{
    public function lista()
    {
        $lotes = Lote::all();
        return view('pages.lote.index',compact('lotes'));
    }

    public function editar(FichaLoteRequest $request)
    {
        $loteanterior = Lote::find($request->id_lote);
        $manzana = $loteanterior->id_mzna;
        $idLote = $manzana.''.$request->nuevo_lote;

        $lote = Lote::find($request->id_lote);
        if(!$lote){
            $lote = new Lote();
            $lote->id_hab_urba = $loteanterior->id_hab_urba;
            $lote->mzna_dist = $loteanterior->mzna_dist;
            $lote->lote_dist = $loteanterior->lote_dist;
            $lote->sub_lote_dist = $loteanterior->sub_lote_dist;
            $lote->estructuracion = $loteanterior->estructuracion;
            $lote->zonificacion = $loteanterior->zonificacion;
            $lote->cuc = $loteanterior->cuc;
            $lote->zona_dist = $loteanterior->zona_dist;
        }
        $lote->id_lote = $idLote;
        $lote->id_mzna = $manzana;
        $lote->codi_lote = $request->nuevo_lote;
        $lote->save();

        $edificaciones = Edificaciones::where('id_lote', $request->id_lote)->get();
        foreach($edificaciones as $edificacion)
        {
            $edif_ant = $request->id_lote.''.$edificacion->codi_edificacion;
            $unicats = UniCat::where('id_lote', $request->id_lote)->where('id_edificacion',$edif_ant)->get();
            $edificacion->id_edificacion = $lote->id_lote.''.$edificacion->codi_edificacion;
            $edificacion->codi_edificacion = $edificacion->codi_edificacion;
            $edificacion->id_lote = $lote->id_lote;
            $edificacion->save();
            foreach($unicats as $unicat)
            {
                $unicat->id_uni_cat = $edificacion->id_edificacion.''.$unicat->codi_entrada.''.$unicat->codi_piso.''.$unicat->codi_unidad;
                $unicat->id_edificacion = $edificacion->id_edificacion;
                $unicat->id_lote = $lote->id_lote;
                $unicat->save();

                $suma = array_sum(str_split($unicat->id_uni_cat)); 
                $dc   = $suma % 9;

                Ficha::where('id_uni_cat', $unicat->id_uni_cat)->update([
                    'dc' => $dc,
                ]);
            }
        }
        return redirect()->back()->with('success', 'Modificado Correctamente!');

    }
}
