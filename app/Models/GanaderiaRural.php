<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GanaderiaRural extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tf_ganaderia_rural';


    protected $fillable = [
        'tipo_ganaderia',
        'raza_especio',
        'cantidad_ganderia',
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
