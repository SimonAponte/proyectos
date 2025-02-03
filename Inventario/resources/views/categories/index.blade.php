@extends('layouts.app')

@section('content')

    <div class="flex justify-center">

        <a href="{{route('categories.create')}}" class="border border-green-600 bg-green-400 rounded p-2 my-2">Crear Categorías</a>
    
    </div>

    <table class = "border border-green-700 w-full">

        <thead class = "bg-green-600  text-white">

            <th class = "border border-green-700 px-4 py-2">Categoría</th>
            <th class = "border border-green-700 px-4 py-2">Descripción</th>
            <th class = "border border-green-700 px-4 py-2">Acciones</th>

        </thead>

        <tbody class = " text-center">
            
            @foreach ($categories as $category)

                <tr class="hover:bg-green-100">

                    <td class = "border border-green-700 px-4 py-2">

                        {{$category->name}}

                    </td>

                    <td class = "border border-green-700 px-4 py-2">

                        {{$category->description}}

                    </td>

                    <td class = "border border-green-700 px-4 py-2">

                        
                        
                        <form action="{{route('categories.destroy', $category->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('categories.show', $category->id)}}" class="border border-green-600 bg-green-400 rounded p-2 my-2 hover:bg-white">Mostrar</a>
                            <a href="{{route('categories.edit', $category->id)}}" class="border border-green-600 bg-green-400 rounded p-2 my-2 hover:bg-white">Editar</a>
                            <button type="submit" class="border border-green-600 bg-green-400 rounded p-2 my-2 hover:bg-white">Eliminar</button>
                            <a href="{{route('addProductForm', $category->id)}}" class="border border-green-600 bg-green-400 rounded p-2 my-2 hover:bg-white">Añadir producto</a>
                        </form>

                        

                    </td>

                </tr>
                
            @endforeach
            

        </tbody>

    </table>

@endsection
