<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Sucursales1Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //}
            'Nombre'=>'bail|required',
            'Descripcion'=>'bail|required',
            'Telefono'=>'bail|required',
            'Direccion'=>'bail|required',//goma para separar las reglas a corre
            'Url' =>'required'
        ];
    }
}
