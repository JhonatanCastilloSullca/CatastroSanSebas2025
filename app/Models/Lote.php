<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lote extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'tf_lotes';



    protected $fillable = [
        'id_mzna',
        'codi_lote',
        'id_hab_urba',
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
    protected $primaryKey = 'id_lote';

    public function getRouteKeyName()
    {
        return 'id_lote';
    }

    public function getKeyName()
    {
        return 'id_lote';
    }

    public function manzana()
    {
        return $this->belongsTo('App\Models\Manzana','id_mzna','id_mzna');
    }

    public function ficha()
    {
        return $this->belongsTo('App\Models\Ficha','id_lote','id_lote');
    }

    public function edificaciones()
    {
        return $this->hasMany('App\Models\Edificaciones');
    }
    public function puertas()
    {
        return $this->hasMany('App\Models\Puerta');
    }

    public function hab_urbana()
    {
        return $this->belongsTo('App\Models\HabUrbana','id_hab_urba','id_hab_urba');
    }
}
