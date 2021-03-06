<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" href="../../css/gestionar.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="Formulario__Titulo">Editar Sucursal: {{$Sucursale->Nombre}} </h1>
                </div>
            </div>
        </div>
        <br>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="formulario__sucursal">
                        <form class="formulario__registro" action="{{ route('Sucursales.update', $Sucursale->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PATCH') }}
                            <div class="form-group">
                                <h1 class="Formulario__Titulo">{{$Sucursale->Nombre}}</h1><br>
                                <label for="exampleInputEmail1">Nombre De La Farmacia:</label>
                                <input type="text" class="form-control" name="Nombre" value="{{ old('Nombre', $Sucursale->Nombre) }}" placeholder="Ingrese Un Nombre" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputPassword1" >Descripci??n:</label>
                                <input type="text" class="form-control" name="Descripcion" value="{{ old('Descripcion', $Sucursale->Descripcion) }}" placeholder="Ingrese Una Descripci??n">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Direcci??n:</label>
                                <input type="text" class="form-control" name="Direccion" value="{{ old('Direccion', $Sucursale->Direccion) }}" placeholder="Ingrese Su Direcci??n" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputPassword1">Telefono:</label>
                                <input type="number" class="form-control" name="Telefono" value="{{ old('Telefono', $Sucursale->Telefono) }}" placeholder="Ingrese Su N??mero Tel??fonico">
                            </div>
    
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" name="Url" value="{{ old('Url', $Sucursale->Url) }}" aria-describedby="inputGroupFileAddon01">
                                  <label class="custom-file-label" for="inputGroupFile01">Elegir file....</label>
                                </div>
                              </div>
                            <button type="submit" class="btn btn-dark"><i class="fas fa-marker"></i>Actualizar</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</x-app-layout>