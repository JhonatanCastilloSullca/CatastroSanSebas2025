<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CondicionPredio extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tf_condicion_predio';


    protected $fillable = [
        'cond_titular',
        'fecha_ini',
        'insc_rrpp',
        'num_part',
        'fecha_insc',
        'doc_propiedad',
        'fecha_adq',
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
