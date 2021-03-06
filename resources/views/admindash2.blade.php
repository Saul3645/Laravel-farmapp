<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" href="../css/gestionar.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Medicamentos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Lista de Medicamentos

                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                <div class="formulario__sucursal">
                                    <table class="table table-hover">
                                        <thead>
                                          <tr>
                                            
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Descripción</th>
                                            <th scope="col">Características</th>
                                            <th scope="col">Precio</th>
                                            <th scope="col">Sucursal</th>
                                            <th scope="col">Imagen</th>
                                            <th scope="col">Vista Imagen</th>
                                            <th scope="col">Acciones</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($medicamentos as $Medicamento)
                                          <tr>
                                            
                                            <td>{{ $Medicamento->Nombre }}</td>
                                            <td>{{ $Medicamento->Descripcion }}</td>
                                            <td>{{ $Medicamento->Caracteristicas}}</td>
                                            <td>${{ $Medicamento->Precio }}</td>
                                            <td>{{ $Medicamento->sucursales_id }}</td>
                                            <td><a href="/{{$Medicamento->Url}}">Descargar archivo</a><td>
                                            <img src="{{ asset($Medicamento->Url)}}" alt="imagen" width="200">
                                                <td><a href="{{ route('Medicamentos.show',$Medicamento->id)}}" class="btn btn-warning"><i class="far fa-eye"></i> </a>
                                                <a href="{{route('Medicamentos.edit',$Medicamento->id)}}" class="btn btn-info "><i class="far fa-edit"></i></a>
                                                <form action="{{ route('Medicamentos.destroy',$Medicamento->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i></button>
                                                </form>
                                          </tr>
                                        @endforeach
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</x-app-layout>