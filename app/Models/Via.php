<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Via extends Model
{
    use HasFactory;

    static $rules = [
        'nomb_via' => 'required|max:100',
        'tipo_via' => 'required|max:100',
        'codi_via' => 'required|unique:tf_vias|max:6',
        'fecha_via' => 'nullable|date',
    ];

    protected $fillable = [
        'nomb_via',
        'tipo_via',
        'codi_via',
        'id_ubi_geo',
        'fecha_via',
        'estado',
    ];
    protected $table = 'tf_vias';

    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'id_via';
    public $timestamps = false;

    public function getRouteKeyName()
    {
        return 'id_via';
    }

    public function getKeyName()
    {
        return 'id_via';
    }
    public function hab_urbanas()
    {
        return $this->belongsToMany('App\Models\HabUrbana','tf_vias_hab_urba','id_via','id_hab_urba');
    }

    public function historia_vias()
    {
        return $this->hasMany('App\Models\HistoriaVia');
    }
    public function puertas()
    {
        return $this->hasMany('App\Models\Puerta');
    }
}

