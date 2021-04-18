<?php

namespace App\Http\Controllers;

use App\Models\Sucursales;
use Illuminate\Http\Request;
use App\Http\Requests\Sucursales1Request; // no olvidar importar la ruta
use App\Models\Medicamentos;
use Illuminate\Support\Facades\DB;

class SucursalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sucursales= Sucursales::all();
        
        return view('admindash1',compact('sucursales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('gestionar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Sucursales1Request $request)
    {
        //
        $datos=new \App\Models\Sucursales;
        $datos->Nombre=$request->Nombre;
        $datos->Descripcion=$request->Descripcion;
        $datos->Telefono=$request->Telefono;
        $datos->Direccion=$request->Direccion;
        $datos->Url=$request->Url->store('storage');
        $datos->save();
        $request->file('Url')->store('public');
        return redirect()->route('Sucursales.index')->with('mensaje', 'Solicitud Registrada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sucursales  $sucursales
     * @param  \App\Models\Medicamentos  
     * @return \Illuminate\Http\Response
     */
    public function show(Sucursales $Sucursale)
    {
        //
        $medicamentos= DB::table('medicamentos')
            ->where('sucursales_id', '=', "{$Sucursale->id}")
            ->get();
        return view('farmacias_informacion',compact('Sucursale', 'medicamentos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sucursales  $sucursales
     * @return \Illuminate\Http\Response
     */
    public function edit(Sucursales $Sucursale)
    {
        return view('edit', compact('Sucursale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sucursales  $sucursales
     * @return \Illuminate\Http\Response
     */
    public function update(Sucursales1Request $request, Sucursales $Sucursale)
    {
        $Sucursale->Nombre=$request->Nombre;
        $Sucursale->Descripcion=$request->Descripcion;
        $Sucursale->Telefono=$request->Telefono;
        $Sucursale->Direccion=$request->Direccion;
        $Sucursale->Url=$request->Url->store('storage');
        $Sucursale->save();
        $request->file('Url')->store('public');
        $Sucursale->update();
        return redirect()->route('Sucursales.index')->with('mensaje', 'La sucursal se ha actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sucursales  $sucursales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sucursales $Sucursale)
    {
        //
        $Sucursale->delete();
        return back()->with('mensaje','La sucursal ha sido eliminado correctamente');
    }

    // public function farmacias(){
    //     $Nombre= 'Mauricio';
    //     return view('farmacias',compact('Nombre'));
    // }
}
