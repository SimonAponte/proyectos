@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Añadir Producto a Proveedor</h1>
    
    <form action="{{ route('addProductProvider', $provider->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="product_id" class="form-label">Selecciona un Producto:</label>
            <select name="product_id" id="product_id" class="form-select" required>
                <option value="">-- Selecciona un Producto --</option>
                @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
            <label for="stock" class="form-label">Agregue el stock solicitado</label>
            <input type="number" name="stock" id="stock"  min="1" required>;

            <label for="cost" class="form-label">Agregue el precio por unidad</label>
            <input type="number" name="cost" id="cost" step="0.01" min="0"required>;

            <label for="purchase_date" class="form-label">Fecha de compra</label>
            <input type="date" name="purchase_date" id="purchase_date" required>;
        </div>
        <button type="submit" class="btn btn-primary">Añadir Producto</button>
    </form>
</div>
@endsection