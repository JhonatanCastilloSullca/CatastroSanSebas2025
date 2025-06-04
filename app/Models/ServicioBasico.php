<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicioBasico extends Model
{
    use HasFactory;
    protected $table = 'tf_servicios_basicos';


    protected $primaryKey = 'id_ficha';

    public function getRouteKeyName()
    {
        return 'id_ficha';
    }

    public function getKeyName()
    {
        return 'id_ficha';
    }
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $fillable = [
        'luz',
        'agua',
        'telefono',
        'desague',
        'gas',
        'internet',
        'tvcable'
    ];

    public function ficha()
    {
        return $this->belongsTo('App\Models\Ficha');
    }
}
