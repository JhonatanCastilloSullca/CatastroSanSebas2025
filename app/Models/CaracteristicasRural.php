<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaracteristicasRural extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tf_caracteristicas_rural';


    protected $fillable = [
        'area_terreno',
        'area_decl',
        'vivienda',
        'establo',
        'corral',
        'galpon',
        'invernadero',
        'reservorio',
        'deposito',
        'zona_arque',
        'otros',
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
}
