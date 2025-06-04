<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagenes extends Model
{
    use HasFactory;

    static $rules = [
        'imagenfachada' => 'required|image|mimes:jpeg',
        'imagenmapa' => 'nullable|image|mimes:jpeg',
    ];
    protected $fillable = [
        'id_lote',
        'imagenfachada',
        'imagenmapa',
    ];
    public $timestamps = false;

}
