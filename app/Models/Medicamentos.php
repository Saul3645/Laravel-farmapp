<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamentos extends Model
{
    use HasFactory;

    protected $fillable=[
        'Nombre',
        'Descripcion',
        'Caracteristicas',
        'Precio',
        'sucursal_id',
        'Url',
    ];

    public function sucursal(){
        return $this->belongsTo('App\Models\Sucursales');
    }
}
