@extends('layouts.app')

@section('content')
    <form action="{{route('inventories.store')}}" method="POST">
        @csrf
        <div class="flex justify-center">
            <div class="w-8/12 bg-white p-6 rounded-lg">
                <div class="mb-4">

                    <label for="product_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selecciona un Producto</label>
                    <select id="product_id" name="product_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        
                        @foreach ($products as $product)
                            <option value="{{$product->id}}">{{$product->name}}</option>
                        @endforeach
                    </select>

                    
                    <label for="entry_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha de ingreso</label>
                    <input type="date" id="entry_date" name="entry_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required />
                    
                    <label for="expiry_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha de vencimiento</label>
                    <input type="date" id="expiry_date" name="expiry_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required />
                    
                </div>
                <button class="bg-blue-300 w-full rounded-md py-4 text-white">Agregar</button>
            </div>
        </div>  
    </form>

@endsection