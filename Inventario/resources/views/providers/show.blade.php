@extends('layouts.app')

@section('content')

    <h1>Productos del proveedor: {{$provider->name}}</h1>

    <table class = "border border-green-700 w-full">

        <thead class = "bg-green-600  text-white">

            <th class = "border border-green-700 px-4 py-2">Nombre</th>
            <th class = "border border-green-700 px-4 py-2">Descripción</th>
            <th class = "border border-green-700 px-4 py-2">Marca</th>
            <th class = "border border-green-700 px-4 py-2">Stock</th>
            <th class = "border border-green-700 px-4 py-2">Costo por Unidad</th>
            <th class = "border border-green-700 px-4 py-2">Fecha de Compra</th>
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

                        {{$product->pivot->stock}}

                    </td>

                    <td class = "border border-green-700 px-4 py-2">

                        {{$product->pivot->cost}}

                    </td>

                    <td class = "border border-green-700 px-4 py-2">

                        {{$product->pivot->purchase_date}}

                    </td>

                    <td class = "border border-green-700 px-4 py-2">

                        <form action="{{route('removeProductProvider', $provider->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="text" name="pivot_id" value="{{$product->pivot->id}}" hidden>
                            <input type="text" name="product_id" value="{{$product->id}}" hidden>
                            <button type="submit" class="border border-green-600 bg-green-400 rounded p-2 my-2 hover:bg-white">Eliminar registro del Proveedor</button>
                            <a href="{{route('editProductProvider', ['provider' => $provider->id, 'pivot_id' => $product->pivot->id])}}" class="border border-green-600 bg-green-400 rounded p-2 my-2 hover:bg-white">Editar Registro</a>
                        </form>

                        

                    </td>

                </tr>
                
            @endforeach
            

        </tbody>

    </table>

@endsection