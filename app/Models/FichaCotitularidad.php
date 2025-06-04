<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FichaCotitularidad extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tf_fichas_cotitularidades';


    protected $fillable = [
        'cond_declarante',
        'esta_llenado',
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
        return $this->belongsTo('App\Models\Ficha','id_ficha','id_ficha');
    }

    public function estadollenado()
    {
        return $this->belongsTo('App\Models\TablaCodigo','esta_llenado','codigo')->where('id_tabla','=','LLE');
    }
}
