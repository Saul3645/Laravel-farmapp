<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicamentos;

class ComparadorController extends Controller
{
    public function index(){

        $search = request()->query('search');

        if($search){
            $medicamentos = Medicamentos::where('Nombre', 'LIKE', "%{$search}%")->simplePaginate(4);
        }else{
            $medicamentos = Medicamentos::simplePaginate(4);
        }
        return view('comparador', compact('medicamentos'));
    }
}
