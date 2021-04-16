<?php

namespace App\Http\Controllers;

use App\Models\Medicamentos;
use Illuminate\Http\Request;
use App\Http\Requests\MedicamentosRequest; // no olvidar importar la ruta

class MedicamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $datos['medicamentos']= Medicamentos::paginate(2);
        // return view('gestionar',$datos);
        $medicamentos= Medicamentos::all();
        return view('gestionar1',compact('medicamentos'));
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
    public function store(MedicamentosRequest $request)
    {
        //
        $datos=new \App\Models\Medicamentos;
        $datos->Nombre=$request->Nombre;
        $datos->Descripcion=$request->Descripcion;
        $datos->Caracteristicas=$request->Caracteristicas;
        $datos->Precio=$request->Precio;
        $datos->sucursales_id=$request->sucursales_id;
        $datos->Url=$request->Url->store('storage');
        $datos->save();
        $request->file('Url')->store('public');
        return redirect()->route('Medicamentos.index')->with('mensaje', 'Solicitud Registrada'); /*Medicamentos nombre del route.store*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function show(Medicamentos $medicamentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicamentos $medicamentos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicamentos $medicamentos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicamentos $medicamentos)
    {
        //
    }
}
