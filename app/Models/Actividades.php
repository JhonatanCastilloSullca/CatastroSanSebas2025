<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividades extends Model
{
    use HasFactory;
    protected $table = 'tf_actividades';




    protected $fillable = [
        'desc_actividad',
    ];
    public $incrementing = false;

    protected $keyType = 'string';

    public $timestamps = false;

    protected $primaryKey = 'codi_actividad';

    public function getRouteKeyName()
    {
        return 'codi_actividad';
    }

    public function getKeyName()
    {
        return 'codi_actividad';
    }

    public function fichas()
    {
        return $this->belongsToMany('App\Models\Actividades','tf_autorizaciones_funcionamiento','codi_actividad','id_ficha');
    }
}
