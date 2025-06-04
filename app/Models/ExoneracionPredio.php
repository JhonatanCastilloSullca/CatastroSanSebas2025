<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExoneracionPredio extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tf_exoneraciones_predio';


    protected $fillable = [
        'condicion',
        'nume_resolucion',
        'porcentaje',
        'fecha_inicio',
        'fecha_vencimiento',
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

    public function ficha()
    {
        return $this->belongsTo('App\Models\Ficha');
    }
}
