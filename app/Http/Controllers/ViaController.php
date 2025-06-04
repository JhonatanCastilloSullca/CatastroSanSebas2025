<?php

namespace App\Http\Controllers;

use App\Models\Via;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\HabUrbana;
use App\Models\Institucion;
use Illuminate\Validation\Rule;

class ViaController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('can:vias.index')->only('index');
        $this->middleware('can:vias.edit')->only('update');
        $this->middleware('can:vias.create')->only('store');
        $this->middleware('can:vias.destroy')->only('destroy');
    }

    public function index()
    {
        $vias=Via::all();
        $i=0;
        return view('pages.vias.index',compact('vias','i'));
    }

    public function store(Request $request)
    {
        request()->validate(Via::$rules);
        $ubigeo=Institucion::first();
        $via=new Via();
        $via->id_via=str_pad($ubigeo->id_institucion,6,'0',STR_PAD_LEFT)."".str_pad($request->codi_via,6,'0',STR_PAD_LEFT);
        $via->nomb_via=strtoupper($request->nomb_via);
        $via->tipo_via=strtoupper($request->tipo_via);
        $via->codi_via=str_pad($request->codi_via,6,'0',STR_PAD_LEFT);
        $via->id_ubi_geo=str_pad($ubigeo->id_institucion,6,'0',STR_PAD_LEFT);
        $via->estado=1;
        $via->save();

        $via->hab_urbanas()->sync($request->hab_urb_id);
        return redirect()->route('vias.index')
            ->with('success', 'Via Agregado Correctamente.');
    }
    public function update(Via $via,Request $request)
    {
        $id=$via->id_via;
        $requ=\Validator::make($request->all(), [

            'nomb_via' => 'required|max:100',
            'tipo_via' => 'required|max:5',
            'codi_via' => ['required','max:6',
            Rule::unique('tf_vias', 'codi_via')->ignore($id, 'id_via')],

        ]);
        if ($requ->fails())
        {
            return Redirect::back()->with('error_code', 5)->withErrors($requ->errors())->withInput();

        }
        $via->nomb_via=strtoupper($request->nomb_via);
        $via->tipo_via=strtoupper($request->tipo_via);
        $via->codi_via=strtoupper($request->codi_via);
        $via->save();
        $via->hab_urbanas()->sync($request->hab_urb_id);
        return redirect()->route('vias.index')->with('success','Via Modificado Correctamente!');
    }

    public function destroy(Request $request)
    {
        $via= Via::findOrFail($request->id_via_2);
        if($via->estado=="1"){
            $via->estado= '0';
            $via->save();
            return redirect()->back()->with('success','Via Eliminado Correctamente!');
        }else{
            $via->estado= '1';
            $via->save();
            return redirect()->back()->with('success','Via Eliminado Correctamente!');
        }
    }

    public function create()
    {
        $hab_urbanas=HabUrbana::all();
        return view('pages.vias.create',compact('hab_urbanas'));
    }

    public function edit(Via $via)
    {
        $hab_urbanas=HabUrbana::all();
        return view('pages.vias.edit',compact('hab_urbanas','via'));
    }

}
