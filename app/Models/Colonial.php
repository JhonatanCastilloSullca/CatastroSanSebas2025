<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colonial extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tf_colonial';


    protected $fillable = [
        'inmueble_declarado',
        'nombre_colonial',
        'tipo_arquitectura',
        'uso_actual',
        'uso_original',
        'num_pisos',
        'tipo_fecha',
        'fecha_construccion',
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
