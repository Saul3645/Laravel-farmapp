<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" href="../css/gestionar.css" type="text/css">
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
                    Lista de farmacias
                </div>
            </div>
        </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="formulario__sucursal">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Direccion</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Vista Imagen</th>
                                <th scope="col">Acciónes</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($sucursales as $Sucursale)
                              <tr>
                                <td>{{ $Sucursale->id }}</td>
                                <td>{{ $Sucursale->Nombre }}</td>
                                <td>{{ $Sucursale->Descripcion }}</td>
                                <td>{{ $Sucursale->Telefono}}</td>
                                <td>{{ $Sucursale->Direccion }}</td>
                                <td><a href="/{{$Sucursale->Url}}">Descargar archivo</a><td>
                                <img src="{{ asset($Sucursale->Url)}}" alt="imagen" width="200">
                                <td><a href="{{ route('Sucursales.show',$Sucursale->id)}}" class="btn btn-warning"><i class="far fa-eye"></i>Ver Ficha</a>
                                    <a href="{{route('Sucursales.edit',$Sucursale->id)}}" class="btn btn-info"><i class="far fa-edit"></i>Editar</a>
                                    <form action="{{ route('Sucursales.destroy',$Sucursale->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i>Eliminar</button><td>
                                    </form>
                              </tr>
                            @endforeach
                            </tbody>
                          </table>
                    </div>
                </div
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</x-app-layout>