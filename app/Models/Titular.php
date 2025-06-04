<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titular extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_persona',
        'form_adquisicion',
        'fecha_adquisicion',
        'porc_cotitular',
        'esta_civil',
        'fax',
        'telf',
        'anexo',
        'email',
        'nume_titular',
        'codi_contribuyente',
        'cond_titular',
    ];
    protected $table = 'tf_titulares';

    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'id_ficha';
    public $timestamps = false;
    public function getRouteKeyName()
    {
        return 'id_ficha';
    }

    public function getKeyName()
    {
        return 'id_ficha';
    }

    public function persona()
    {
        return $this->belongsTo('App\Models\Persona','id_persona','id_persona');
    }
    public function ficha()
    {
        return $this->belongsTo(Ficha::class, 'id_ficha', 'id_ficha');
    }
    public function codigo_instalacion()
    {
        return $this->belongsTo('App\Models\CodigoInstalacion');
    }
    public function exoneraciontitular()
    {
        return $this->belongsTo('App\Models\ExoneracionTitular','id_ficha','id_ficha');
    }

    public function condiciontitular()
    {
        return $this->belongsTo('App\Models\TablaCodigo','cond_titular','codigo')->where('id_tabla','=','CTT');
    }
}
