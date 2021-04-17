<?php

namespace App\Services;

use App\Models\Sucursales;

class Farmacias{

    public function get(){
        $farmacias= Sucursales::get();
        $farmaciasArray[''] = 'Selecciona una Farmacia';
        foreach($farmacias as $farmacia){
            $farmaciasArray[$farmacia->id] = $farmacia->Nombre;
        }
        return $farmaciasArray;
    }
}