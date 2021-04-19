<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicamentos;
use App\Models\Sucursales;

class ComparadorController extends Controller
{
    public function index(){
        $farmacias = Sucursales::all();
        $search = request()->query('search');

        if($search){
            $medicamentos = Medicamentos::where('Nombre', 'LIKE', "%{$search}%")->orderBy('Precio','ASC')->simplePaginate(8);
        }else{
            $medicamentos = Medicamentos::simplePaginate(8);
        }
        return view('comparador', compact('medicamentos', 'farmacias'));
    }
}
