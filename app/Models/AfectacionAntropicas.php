<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AfectacionAntropicas extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tf_afectacion_antropica';


    protected $fillable = [
        'codigo',
        'descripcion',
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
