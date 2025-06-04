<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabla extends Model
{
    use HasFactory;
    protected $table = 'tf_tablas';


    public $timestamps = false;

    protected $fillable = [
        'desc_tabla',
        'ultimo_codigo',
    ];
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'id_tabla';

    public function getRouteKeyName()
    {
        return 'id_tabla';
    }

    public function getKeyName()
    {
        return 'id_tabla';
    }


}
