<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" href="../css/gestionar.css" type="text/css">
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
                    You're logged in ADMIN!<br>
                    CRUD
                    <br>
                </div>
            </div>
        </div>
        <br>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="formulario__sucursal">
                        <form class="formulario__registro" action={{ route('Sucursales.store') }} method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <h1 class="Formulario__Titulo">Registro de Farmacias</h1>
                                <label for="exampleInputEmail1">Nombre De La Farmacia:</label>
                                <input type="text" class="form-control" name="Nombre" value="{{ old('Nombre') }}" placeholder="Ingrese Un Nombre" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputPassword1" >Descripción:</label>
                                <input type="text" class="form-control" name="Descripcion" value="{{ old('Descripcion') }}" placeholder="Ingrese Una Descripción">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Dirección:</label>
                                <input type="text" class="form-control" name="Direccion" value="{{ old('Direccion') }}" placeholder="Ingrese Su Dirección" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputPassword1">Telefono:</label>
                                <input type="number" class="form-control" name="Telefono" value="{{ old('Telefono') }}" placeholder="Ingrese Un Precio">
                            </div>
    
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" name="Url" value="{{ old('Url') }}" aria-describedby="inputGroupFileAddon01">
                                  <label class="custom-file-label" for="inputGroupFile01">Elegir file....</label>
                                </div>
                              </div>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="formulario__sucursal">
                        <form class="formulario__registro">
                            <h1 class="Formulario__Titulo">Registro de Medicamentos</h1>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre Del Medicamento:</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese Un Nombre" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputPassword1" >Descripción:</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ingrese Una Descripción">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Caracteristicas:</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese Sus Caracteristicas" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputPassword1">Precio:</label>
                                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Ingrese Un Precio">
                            </div>
    
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                  <label class="custom-file-label" for="inputGroupFile01">Elegir file....</label>
                                </div>
                            </div>
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Farmacias ID</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                  <option>Farmacia1</option>
                                  <option>Farmacia2</option>
                                  <option>Farmacia3</option>
                                  <option>Farmacia4</option>
                                  <option>Farmacia5</option>
                                </select>
                              </div>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</x-app-layout>