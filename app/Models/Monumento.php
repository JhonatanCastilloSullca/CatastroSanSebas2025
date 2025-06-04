<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monumento extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tf_monumento';


    protected $fillable = [
        'cat_inmueble',
        'nomb_monumento',
        'cod_monumento',
        'presencia_arquitectura',
        'filiacion_cronologica',
        'tipo_area',
        'area_monu',
        'perimetro_monumento',
        'observaciones',
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
