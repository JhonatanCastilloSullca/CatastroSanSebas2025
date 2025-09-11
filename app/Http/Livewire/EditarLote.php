<?php

namespace App\Http\Livewire;

use App\Models\Edificaciones;
use App\Models\Ficha;
use App\Models\Lote;
use App\Models\Manzana;
use App\Models\UniCat;
use Livewire\Component;

class EditarLote extends Component
{
    public $query = '';           // lo que escribe el usuario
    public $suggestions = [];     // resultados (máx. 7)
    public $id_lote = null;       // seleccionado
    public $selected_text = '';   // texto visible
    public $showList = false;     // mostrar/ocultar dropdown
    public $highlight = 0;        // índice resaltado con teclado
    public $nuevo_mzna;
    public $nuevo_lote;
    public $lote;

    public function updatedQuery($value)
    {
        $q = trim($this->query);
        if (mb_strlen($q) >= 2) {
            $this->suggestions = Lote::where('id_lote', 'LIKE', $q.'%')
                ->orderBy('id_lote')
                ->limit(5)
                ->pluck('id_lote')
                ->toArray();
            $this->showList = !empty($this->suggestions);
            $this->highlight = 0;
        } else {
            $this->resetSuggestions();
        }
    }

    public function selectIndex($i)
    {
        if (!isset($this->suggestions[$i])) return;

        $this->selected_text = $this->suggestions[$i];
        $this->id_lote = $this->suggestions[$i];
        $this->query = $this->selected_text;
        $this->resetSuggestions();

        $this->lote = Lote::find($this->id_lote);
        $this->nuevo_mzna = $this->lote->manzana->codi_mzna;
        $this->nuevo_lote = $this->lote->codi_lote;
    }

    public function resetSuggestions()
    {
        $this->suggestions = [];
        $this->showList = false;
        $this->highlight = 0;
    }

    public function save()
    {
        $this->validate([
            'nuevo_mzna' => 'required|max:3|min:3',
            'nuevo_lote' => 'required|max:3|min:3',
        ]);

        $loteanterior = $this->lote;
        $manzanaAnterior = $this->lote->manzana;
        $sectorAnterior = $this->lote->manzana->sectore;
        $manzana=Manzana::where('codi_mzna',$this->nuevo_mzna)->where('id_sector',$sectorAnterior->id_sector)->first();
        if(!$manzana){
            $manzana = new Manzana();
            $manzana->nume_mzna = $manzanaAnterior->nume_mzna;
        }
        $manzana->id_mzna = $sectorAnterior->id_sector.''.$this->nuevo_mzna;
        $manzana->id_sector = $sectorAnterior->id_sector;
        $manzana->codi_mzna = $this->nuevo_mzna;
        $manzana->save();
        $manzana = $sectorAnterior->id_sector.''.$this->nuevo_mzna;
        $idLote = $manzana.''.$this->nuevo_lote;

        $lote = Lote::find($this->id_lote);
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
        $lote->codi_lote = $this->nuevo_lote;
        $lote->save();

        $edificaciones = Edificaciones::where('id_lote', $this->id_lote)->get();
        foreach($edificaciones as $edificacion)
        {
            $edif_ant = $this->id_lote.''.$edificacion->codi_edificacion;
            $unicats = UniCat::where('id_lote', $this->id_lote)->where('id_edificacion',$edif_ant)->get();
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

        return redirect()->route('lote.lista')
            ->with('success', 'Modificado Correctamente.');
    }

    public function render()
    {
        return view('livewire.editar-lote');
    }
}
