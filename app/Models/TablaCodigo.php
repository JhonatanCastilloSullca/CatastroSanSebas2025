<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TablaCodigo extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tf_tablas_codigos';


    protected $fillable = [
        'id_tabla',
        'desc_codigo',
    ];
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = ['codigo','id_tabla'];

    public function getRouteKeyName()
    {
        return 'codigo';
    }

    public function getKeyName()
    {
        return 'codigo';
    }


}
