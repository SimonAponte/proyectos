@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Añadir Producto a Categoría</h1>
    
    <form action="{{ route('addProduct', $category->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="product_id" class="form-label">Selecciona un Producto:</label>
            <select name="product_id" id="product_id" class="form-select" required>
                <option value="">-- Selecciona un Producto --</option>
                @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Añadir Producto</button>
    </form>
</div>
@endsection