<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FichaRuralController extends Controller
{


    public function __construct()
    {
                
            $this->middleware('can:ficha.createrural') ->only('createrural');
        
    }
    public function createrural()
    {
        return view('pages.fichas.createrural');
    }
}