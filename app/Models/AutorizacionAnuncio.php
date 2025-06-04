<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutorizacionAnuncio extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tf_autorizaciones_anuncios';



    protected $fillable = [
        'id_ficha',
        'codi_autoriza',
        'codi_anuncio',
        'nume_lados',
        'area_autorizada',
        'area_verificada',
        'nume_expediente',
        'nume_licencia',
        'fecha_expedicion',
        'fecha_vencimiento',
        'descripcion',
    ];
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'id_anuncio';

    public function getRouteKeyName()
    {
        return 'id_anuncio';
    }

    public function getKeyName()
    {
        return 'id_anuncio';
    }

    public function ficha()
    {
        return $this->belongsTo('App\Models\Ficha');
    }

    public function codigos()
    {
        return $this->belongsTo('App\Models\TablaCodigo','codi_anuncio','codigo')->where('id_tabla','=','ANU');
    }
}
