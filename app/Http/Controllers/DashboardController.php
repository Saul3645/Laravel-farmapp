<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Sucursales;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::user()->hasRole('user')){
            return view('userdash');
        }elseif(Auth::user()->hasRole('administrator')){
            return view('admindash');
        }elseif(Auth::user()->hasRole('superadministrator')){
            return view('superdash');
        }
    }

    public function myprofile(){
        return view('myprofile');
    }

    public function gestionar(){
        return view('gestionar');
    }
}
