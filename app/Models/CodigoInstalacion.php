<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CodigoInstalacion extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tf_codigos_instalaciones';


    protected $fillable = [
        'desc_instalacion',
        'material',
        'unidad',
    ];

    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'codi_instalacion';

    public function getRouteKeyName()
    {
        return 'codi_instalacion';
    }

    public function getKeyName()
    {
        return 'codi_instalacion';
    }

    public function instalacions()
    {
        return $this->hasMany('App\Models\Instalacion');
    }
}
