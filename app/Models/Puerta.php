<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puerta extends Model
{
    use HasFactory;
    protected $table = 'tf_puertas';


    protected $fillable = [
        'id_lote',
        'codi_puerta',
        'tipo_puerta',
        'nume_muni',
        'cond_nume',
        'id_via',
        'nume_certificacion',
    ];
    public $incrementing = false;
    protected $primaryKey = 'id_puerta';
    protected $keyType = 'string';
    public $timestamps = false;
    public function getRouteKeyName()
    {
        return 'id_puerta';
    }

    public function getKeyName()
    {
        return 'id_puerta';
    }

    public function lote()
    {
        return $this->belongsTo('App\Models\Lote');
    }

    public function via(){
        return $this->belongsTo('App\Models\Via','id_via','id_via');
    }

    public function fichas()
    {
        return $this->belongsToMany('App\Models\Ficha','tf_ingresos','id_puerta','id_ficha');
    }
}
