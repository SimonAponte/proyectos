@extends('layouts.app')

@section('content')

    <div class="flex justify-center">

        <a href="{{route('products.create')}}" class="border border-green-600 bg-green-400 rounded p-2 my-2">Crear Productos</a>
    
    </div>

    <table class = "border border-green-700 w-full">

        <thead class = "bg-green-600  text-white">

            <th class = "border border-green-700 px-4 py-2">Nombre</th>
            <th class = "border border-green-700 px-4 py-2">Descripción</th>
            <th class = "border border-green-700 px-4 py-2">Marca</th>
            <th class = "border border-green-700 px-4 py-2">Código de Barras</th>
            <th class = "border border-green-700 px-4 py-2">Acciones</th>

        </thead>

        <tbody class = " text-center">
            
            @foreach ($products as $product)

                <tr class="hover:bg-green-100">

                    <td class = "border border-green-700 px-4 py-2">

                        {{$product->name}}

                    </td>

                    <td class = "border border-green-700 px-4 py-2">

                        {{$product->description}}

                    </td>

                    <td class = "border border-green-700 px-4 py-2">

                        {{$product->brand}}

                    </td>

                    <td class = "border border-green-700 px-4 py-2">

                        {{$product->barcode}}

                    </td>

                    <td class = "border border-green-700 px-4 py-2">

                        
                        
                        <form action="{{route('products.destroy', $product->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="#" class="border border-green-600 bg-green-400 rounded p-2 my-2 hover:bg-white">Mostrar</a>
                            <a href="{{route('products.edit', $product->id)}}" class="border border-green-600 bg-green-400 rounded p-2 my-2 hover:bg-white">Editar</a>
                            <button type="submit" class="border border-green-600 bg-green-400 rounded p-2 my-2 hover:bg-white">Eliminar</button>
                        </form>

                        

                    </td>

                </tr>
                
            @endforeach
            

        </tbody>

    </table>

@endsection
