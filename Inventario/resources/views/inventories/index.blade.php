@extends('layouts.app')

@section('content')

    <div class="flex justify-center">

        <a href="{{route('inventories.create')}}" class="border border-green-600 bg-green-400 rounded p-2 my-2">Crear Inventario</a>
    
    </div>

    <table class = "border border-green-700 w-full">

        <thead class = "bg-green-600  text-white">

            <th class = "border border-green-700 px-4 py-2">Nombre</th>
            <th class = "border border-green-700 px-4 py-2">Fecha de ingreso</th>
            <th class = "border border-green-700 px-4 py-2">Fecha de vencimiento</th>
            <th class = "border border-green-700 px-4 py-2">Total</th>

        </thead>

        <tbody class = " text-center">
            
            @foreach ($inventories as $inventory)

                <tr class="hover:bg-green-100">

                    <td class = "border border-green-700 px-4 py-2">

                        {{$inventory->product->name}}

                    </td>

                    <td class = "border border-green-700 px-4 py-2">

                        {{$inventory->first_entry_date}}

                    </td>

                    <td class = "border border-green-700 px-4 py-2">

                        {{$inventory->last_expiry_date}}

                    </td>

                    <td class = "border border-green-700 px-4 py-2">

                        {{$inventory->total}}

                    </td>
                

                </tr>
                
            @endforeach
            

        </tbody>

    </table>

@endsection