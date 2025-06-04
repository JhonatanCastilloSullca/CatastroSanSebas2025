<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoElemento extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tf_estado_elemento';


    protected $fillable = [
        'cimientos',
        'muros',
        'pisos',
        'techos',
        'pilastras',
        'revestimiento',
        'balcones',
        'puertas',
        'ventanas',
        'rejas',
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
