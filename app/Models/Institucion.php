<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tf_institucion';



    protected $fillable = [
        'desc_institucion',
        'dire_institucion',
        'email',
        'autoridad',
        'cargo',
        'fecha_registro',
        'logo_institucion',
        'logo_catastro',
    ];
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'id_institucion';


    public function getRouteKeyName()
    {
        return 'id_institucion';
    }

    public function getKeyName()
    {
        return 'id_institucion';
    }
}
