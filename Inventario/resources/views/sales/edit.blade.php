@extends('layouts.app')
@section('content')
    

<form action= "{{route('sales.update', $sale->id)}}" method="POST" class="max-w-md mx-auto">
    @csrf
    @method('PUT')
    <div>
      <label for="product_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selecciona un Producto</label>
        <select id="product_id" name="product_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @foreach ($products as $product)
              <option value="{{ $product->id }}" @selected($product->id == $sale->product_id)>{{ $product->name }}</option>  
            @endforeach
        </select>  
    </div>
    
    <div>
        <label for="date_sale" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha de Venta</label>
        <input type="date" id="date_sale" name="date_sale" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required value="{{$sale->date_sale}}"/>
    </div>


    <div>
        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selecciona el Precio:</label>
        <input type="number" id="price" name= "price" step="0.01" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required value="{{$sale->price}}"/>
    </div>

    
    <button type="submit" class=" mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>
  
@endsection