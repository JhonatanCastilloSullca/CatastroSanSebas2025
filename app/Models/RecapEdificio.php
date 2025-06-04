<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecapEdificio extends Model
{
    use HasFactory;

    protected $table = 'tf_recap_edificio';

    protected $fillable = [
        'edificio',
        'total_porcentaje',
        'total_atc',
        'total_acc',
        'total_aoic',
        'id_recap',
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
}
