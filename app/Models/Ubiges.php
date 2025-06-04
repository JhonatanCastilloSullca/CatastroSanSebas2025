<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubiges extends Model
{
    use HasFactory;

    protected $fillable = [
        'cod_dep',
        'cod_pro',
        'codi_dis',
        'descri',
    ];   

    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'cod_dep';

    public function getRouteKeyName()
    {
        return 'cod_dep';
    }

    public function getKeyName()
    {
        return 'cod_dep';
    }

}





