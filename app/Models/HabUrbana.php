<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HabUrbana extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tf_hab_urbana';



    static $rules = [
        'grup_urba'     => 'nullable|max:100',
        'tipo_hab_urba' => 'required|max:15',
        'nomb_hab_urba' => 'required|max:100',
        'codi_hab_urba' => 'required|max:4|unique:tf_hab_urbana',
    ];
    protected $fillable = [
        'grup_urba',
        'tipo_hab_urba',
        'nomb_hab_urba',
        'codi_hab_urba',
        'estado',
        'id_ubi_geo',
    ];
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'id_hab_urba';

    public function getRouteKeyName()
    {
        return 'id_hab_urba';
    }

    public function getKeyName()
    {
        return 'id_hab_urba';
    }

    public function ubigeo()
    {
        return $this->belongsTo('App\Models\Ubigeo','id_ubi_geo','id_ubi_geo');
    }

    public function vias()
    {
        return $this->belongsToMany('App\Models\Via','hab_urbana_via','id_hab_urba','id_via');
    }

}

