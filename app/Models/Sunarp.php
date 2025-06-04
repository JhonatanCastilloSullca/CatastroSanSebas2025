<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sunarp extends Model
{
    use HasFactory;

    protected $table = 'tf_sunarp';

    protected $fillable = [
        'tipo_partida',
        'nume_partida',
        'fojas',
        'asiento',
        'fecha_inscripcion',
        'codi_decla_fabrica',
        'asie_fabrica',
        'fecha_fabrica',
    ];
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

    public function ficha()
    {
        return $this->belongsTo('App\Models\Ficha','id_ficha','id_ficha');
    }
}
