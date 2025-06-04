<?php

namespace App\Http\Controllers;

use App\Models\Imagenes;
use App\Models\Sectore;
use App\Models\Manzana;
use App\Models\Ficha;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use DB;
use Illuminate\Support\Facades\Redirect;

class ImagenesController extends Controller
{
    public function __construct()
    {
                
            $this->middleware('can:imagenes') ->only('ver,store');
        
    }

    public function ver(Request $request)
    {
        $sectores=Sectore::orderby('codi_sector')->get();
        $manzanas=Manzana::orderby('codi_mzna')->get();

        $sector2=$request->buscarSector;
        $manzana2=$request->buscarManzana;
        $ficha=Ficha::where('tipo_ficha','=','01')->orderby('id_lote','asc');
        if($request->buscarSector!='0'){
            $ficha=$ficha->whereHas('lote.manzana', function($query) use ($sector2) {
                $query->where('id_sector','=', $sector2);
            });
        }
        if($request->buscarManzana!=0 ){
            $ficha=$ficha->whereHas('lote', function($query) use ($manzana2) {
                $query->where('id_mzna','=', $manzana2);
            });
        }
        
        
        $ficha=$ficha->get();
        $ficha=$ficha->unique('id_lote');
        $total=0;
        
        return view('pages.imagenes.ver',compact('sectores','manzanas','ficha','sector2','manzana2'));
    }

    public function store(Request $request)
    {
        request()->validate(Imagenes::$rules);
        $nombre=str_replace('080105', '', $request->fichaanterior);

        Storage::delete('public/img/imageneslotes/'.$nombre.'.jpg');
        Storage::delete('public/img/imageneslotes/'.$nombre.'-mapa.jpg');

        
        if($request->hasFile('imagenfachada'))
        {            
            

            $nombrerecibo=$nombre.'.jpg';
            $ruta=$request->file('imagenfachada')->storeAs('\public\img\imageneslotes/',$nombrerecibo);
        }
       


        


        if($request->hasFile('imagenmapa'))
        {            
           
            $nombre=str_replace('080105', '', $request->fichaanterior);

            $nombreimagenmapa=$nombre.'-mapa.jpg';
            $ruta=$request->file('imagenmapa')->storeAs('\public\img\imageneslotes/',$nombreimagenmapa);
        }
        return redirect()->back()->with('success','Imagen Agregado Correctamente!');

    }

}
