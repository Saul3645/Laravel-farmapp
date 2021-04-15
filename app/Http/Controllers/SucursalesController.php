<?php

namespace App\Http\Controllers;

use App\Models\Sucursales;
use Illuminate\Http\Request;
use App\Http\Requests\Sucursales1Request; // no olvidar importar la ruta

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
        return view('gestionar',compact('sucursales'));
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
        $request->file('file')->store('public');
        return redirect()->route('sucursales.index')->with('mensaje', 'Solicitud Registrada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sucursales  $sucursales
     * @return \Illuminate\Http\Response
     */
    public function show(Sucursales $sucursales)
    {
        //
        return view('admindash',compact('sucursales'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sucursales  $sucursales
     * @return \Illuminate\Http\Response
     */
    public function edit(Sucursales $sucursales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sucursales  $sucursales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sucursales $sucursales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sucursales  $sucursales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sucursales $sucursales)
    {
        //
    }
}
