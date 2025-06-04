<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uso extends Model
{
    use HasFactory;

    protected $fillable = [
        'desc_uso',
    ];
    protected $table = 'tf_usos';

    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'codi_uso';
    public $timestamps = false;
    public function getRouteKeyName()
    {
        return 'codi_uso';
    }

    public function getKeyName()
    {
        return 'codi_uso';
    }

    public function tf_fichas_individuales()
    {
        return $this->hasMany('App\Models\FichaIndividual');
    }
}
