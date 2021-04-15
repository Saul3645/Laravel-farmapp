<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursales extends Model
{
    use HasFactory;

    protected $fillable=[
        'Nombre',
        'Descripcion',
        'Direccion',
        'Telefono',
        'Url',
    ];


    //Relacion uno a muchos
    public function medicamentos(){
        return $this->hasMany('App\Models\Medicamentos');
    }
}
