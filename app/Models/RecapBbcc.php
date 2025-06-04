<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecapBbcc extends Model
{
    use HasFactory;
    protected $table = 'tf_recap_bbcc';


    protected $fillable = [
        'ficha_id',
        'edifica',
        'entrada',
        'nume_piso',
        'unidad',
        'porcentaje',
        'atc',
        'acc',
        'aoic',
        'nume_registro',
    ];
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'id_ficha';
    public $timestamps = false;
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
    public function edificacion(){
        return $this->belongsTo('App\Models\Edificacion');
    }
}
