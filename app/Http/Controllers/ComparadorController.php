<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicamentos;

class ComparadorController extends Controller
{
    public function index(){

        $search = request()->query('search');

        if($search){
            $medicamentos = Medicamentos::where('Nombre', 'LIKE', "%{$search}%")->orderBy('Precio','ASC')->simplePaginate(35);
        }else{
            $medicamentos = Medicamentos::all();
        }
        return view('comparador', compact('medicamentos'));
    }
}
