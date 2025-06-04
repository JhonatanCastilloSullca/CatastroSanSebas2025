<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroLegal extends Model
{
    use HasFactory;

    protected $table = 'tf_registro_legal';

    protected $fillable = [
        'id_notaria',
        'kardex',
        'fecha_escritura',
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

    public function notaria()
    {
        return $this->belongsTo('App\Models\Notarias','id_notaria','id_notaria');
    }
    public function ficha()
    {
        return $this->belongsTo('App\Models\Ficha');
    }

}
