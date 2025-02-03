@extends('layouts.app')

@section('content')

    <div class="flex justify-center">

        <a href="{{route('sales.create')}}" class="border border-green-600 bg-green-400 rounded p-2 my-2">Crear Venta</a>
    
    </div>

    <table class = "border border-green-700 w-full">

        <thead class = "bg-green-600  text-white">

            <th class = "border border-green-700 px-4 py-2">Nombre</th>
            <th class = "border border-green-700 px-4 py-2">Fecha de venta</th>
            <th class = "border border-green-700 px-4 py-2">Precio</th>
            <th class = "border border-green-700 px-4 py-2">Acciones</th>

        </thead>

        <tbody class = " text-center">
            
            @foreach ($sales as $sale)

                <tr class="hover:bg-green-100">

                    <td class = "border border-green-700 px-4 py-2">

                        {{$sale->product->name}}

                    </td>

                    <td class = "border border-green-700 px-4 py-2">

                        {{$sale->date_sale}}

                    </td>

                    <td class = "border border-green-700 px-4 py-2">

                        {{$sale->price}}

                    </td>

                    <td class = "border border-green-700 px-4 py-2">

                        <form action="{{route('sales.destroy', $sale->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('sales.show', $sale->id)}}" class="border border-green-600 bg-green-400 rounded p-2 my-2 hover:bg-white">Mostrar Compras</a>
                            <a href="{{route('sales.edit', $sale->id)}}" class="border border-green-600 bg-green-400 rounded p-2 my-2 hover:bg-white">Editar</a>
                            <button type="submit" class="border border-green-600 bg-green-400 rounded p-2 my-2 hover:bg-white">Eliminar</button>
                        </form>

                    </td>

                </tr>
                
            @endforeach
        
        </tbody>

    </table>
    
@endsection