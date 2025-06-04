<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExoneracionTitular extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tf_exoneraciones_titular';



    protected $fillable = [
        'id_persona',
        'condicion',
        'nume_resolucion',
        'nume_boleta_pension',
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

    public function persona()
    {
        return $this->belongsTo('App\Models\Persona');
    }
    public function ficha()
    {
        return $this->belongsTo('App\Models\Ficha');
    }
}
