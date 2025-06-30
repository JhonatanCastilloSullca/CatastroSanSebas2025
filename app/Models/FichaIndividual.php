<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FichaIndividual extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tf_fichas_individuales';



    protected $fillable = [
        'codi_uso',
        'cont_en',
        'clasificacion',
        'area_titulo',
        'area_declarada',
        'area_verificada',
        'porc_bc_terr_legal',
        'porc_bc_terr_fisc',
        'porc_bc_const_legal',
        'porc_bc_const_fisc',
        'evaluacion',
        'en_colindante',
        'en_jardin_aislamiento',
        'en_area_publica',
        'en_area_intangible',
        'cond_declarante',
        'esta_llenado',
        'nume_habitantes',
        'nume_familias',
        'mantenimiento',
        'observaciones',
        'nume_ficha',
        
        'mzna_dist',
        'lote_dist',
        'sub_lote_dist',
        'estructuracion',
        'zonificacion',
        'cuc',
        'zona_dist',


    ];
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'id_ficha';

    public function getRouteKeyName()
    {
        return 'id_ficha';
    }

    public function getKeyName()
    {
        return 'id_ficha';
    }

    public function fichas()
    {
        return $this->hasMany('App\Models\Ficha','id_ficha','id_ficha');
    }

    public function uso()
    {
        return $this->belongsTo('App\Models\Uso','codi_uso','codi_uso');
    }
    public function ficha()
    {
        return $this->belongsTo('App\Models\Ficha','id_ficha','id_ficha');
    }
    public function clasificacions()
    {
        return $this->belongsToMany('App\Models\Puerta','tf_ingresos','id_ficha','id_puerta');
    }

    public function estadollenado()
    {
        return $this->belongsTo('App\Models\TablaCodigo','esta_llenado','codigo')->where('id_tabla','=','LLE');
    }

}
