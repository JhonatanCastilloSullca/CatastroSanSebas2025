<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstalacionRural extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tf_instalacion_rural';


    protected $fillable = [
        'tipo_ins',
        'cantidad',
        'area_porcentaje',
        'area_const',
        'volumen',
        'fecha_const',
        'material_est',
        'estado_conserva',
        'estado_construc',
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
