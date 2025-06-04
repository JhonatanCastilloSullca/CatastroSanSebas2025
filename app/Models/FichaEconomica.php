<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FichaEconomica extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tf_fichas_economicas';


    protected $fillable = [
        'nomb_comercial',
        'pred_area_autor',
        'viap_area_autor',
        'viap_area_verif',
        'bc_area_autor',
        'bc_area_verif',
        'nume_expediente',
        'nume_licencia',
        'fecha_expedicion',
        'fecha_vencimiento',
        'inic_actividad',
        'cond_declarante',
        'esta_llenado',
        'mantenimiento',
        'docu_presentado',
        'pred_area_verif',
        'observaciones',
        'nume_ficha',
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

    public function ficha()
    {
        return $this->belongsTo('App\Models\Ficha');
    }

    public function estadollenado()
    {
        return $this->belongsTo('App\Models\TablaCodigo','esta_llenado','codigo')->where('id_tabla','=','LLE');
    }

}
