<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sectore extends Model
{
    use HasFactory;
    protected $table = 'tf_sectores';


    static $rules = [
        'codi_sector' => 'required',
        'nomb_sector' => 'required|max:20'
    ];
    protected $fillable = [
        'ubigeo_id',
        'codi_sector',
        'nomb_sector',
        'estado'
    ];
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'id_sector';
    public $timestamps = false;
    public function getRouteKeyName()
    {
        return 'id_sector';
    }

    public function getKeyName()
    {
        return 'id_sector';
    }

    public function ubigeo()
    {
        return $this->belongsTo('App\Models\Ubigeo','id_ubi_geo','id_ubi_geo');
    }

    public function manzanas()
    {
        return $this->hasMany('App\Models\Manzana','id_sector','id_sector');
    }
}
