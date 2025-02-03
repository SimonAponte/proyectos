@extends('layouts.app')

@section('content')

    <div class="flex justify-center">

        <a href="{{route('providers.create')}}" class="border border-green-600 bg-green-400 rounded p-2 my-2">Crear proveedor</a>
    
    </div>

    <table class = "border border-green-700 w-full">

        <thead class = "bg-green-600  text-white">

            <th class = "border border-green-700 px-4 py-2">Nombre</th>
            <th class = "border border-green-700 px-4 py-2">Persona Natural</th>
            <th class = "border border-green-700 px-4 py-2">Banco</th>
            <th class = "border border-green-700 px-4 py-2">Número de Cuenta</th>
            <th class = "border border-green-700 px-4 py-2">Acciones</th>

        </thead>

        <tbody class = " text-center">
            
            @foreach ($providers as $provider)

                <tr class="hover:bg-green-100">

                    <td class = "border border-green-700 px-4 py-2">

                        {{$provider->name}}

                    </td>

                    <td class = "border border-green-700 px-4 py-2">

                        {{$provider->natural_person ? "Natural" : "Empresa"}}

                    </td>

                    <td class = "border border-green-700 px-4 py-2">

                        {{$provider->bank}}

                    </td>

                    <td class = "border border-green-700 px-4 py-2">

                        {{$provider->account_number}}

                    </td>

                    <td class = "border border-green-700 px-4 py-2">

                        
                        
                        <form action="{{route('providers.destroy', $provider->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('providers.show', $provider->id)}}" class="border border-green-600 bg-green-400 rounded p-2 my-2 hover:bg-white">Mostrar Compras</a>
                            <a href="{{route('providers.edit', $provider->id)}}" class="border border-green-600 bg-green-400 rounded p-2 my-2 hover:bg-white">Editar</a>
                            <button type="submit" class="border border-green-600 bg-green-400 rounded p-2 my-2 hover:bg-white">Eliminar</button>
                            <a href="{{route('addProductFormProvider', $provider->id)}}" class="border border-green-600 bg-green-400 rounded p-2 my-2 hover:bg-white">Añadir Compra</a>
                        </form>

                        

                    </td>

                </tr>
                
            @endforeach
            

        </tbody>

    </table>

@endsection