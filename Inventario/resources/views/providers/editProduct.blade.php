@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Producto de Proveedor</h1>
    
    <form action="{{ route('updateProductProvider', $provider->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="flex justify-center">
            <div class="w-8/12 bg-white p-6 rounded-lg">
                <div class="mb-3">
                    <input type="hidden" name="pivot_id" value= {{$record->pivot->id}}>

                    <label for="product_name">Nombre del Producto</label>
                    <input id="product_name" type="text" disabled value = "{{$record->name}}" class= "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    
                    <label for="product_brand">Marca del Producto</label>
                    <input id="product_brand" type="text" disabled value = "{{$record->brand}}" class= "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    
                    <label for="product_description">Descripción del Producto</label>
                    <input id="product_description" type="text" disabled value = "{{$record->description}}" class= "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    
                    <label for="stock" class="form-label">Agregue el stock solicitado</label>
                    <input type="number" name="stock" id="stock"  min="1" required value="{{$record->pivot->stock}}" class= "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                    <label for="cost" class="form-label">Agregue el precio por unidad</label>
                    <input type="number" name="cost" id="cost" step="0.01" min="0"required value="{{$record->pivot->cost}}" class= "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                    <label for="purchase_date" class="form-label">Fecha de compra</label>
                    <input type="date" name="purchase_date" id="purchase_date" required value="{{$record->pivot->purchase_date}}" class= "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <button type="submit" class="btn btn-primary w-full bg-blue-300 rounded-md py-4 text-white">Editar Producto</button>
            </div>
        </div>

        
    </form>
</div>

@endsection