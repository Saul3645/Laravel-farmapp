<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SucursalesController;
use App\Http\Controllers\MedicamentosController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/medicamentos', function () {
    return view('medicamentos');
});

Route::get('/farmacias', function () {
    return view('farmacias');
});

Route::get('/create', function () {
    return view('gestionar');
});

Route::get('/create1', function () {
    return view('gestionar1');
});

//auth route for both 
Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

// for users
Route::group(['middleware' => ['auth', 'role:user']], function() { 
    Route::get('/dashboard/myprofile', 'App\Http\Controllers\DashboardController@myprofile')->name('dashboard.myprofile');
    
});

// for admin
Route::group(['middleware' => ['auth', 'role:administrator']], function() { 
    Route::get('/dashboard/gestionar', 'App\Http\Controllers\DashboardController@gestionar')->name('dashboard.gestionar');
    Route::resource('Sucursales', 'App\Http\Controllers\SucursalesController');
    Route::resource('Medicamentos', 'App\Http\Controllers\MedicamentosController');//Medicamentos Name del route Medicamentos.store 
});

require __DIR__.'/auth.php';



