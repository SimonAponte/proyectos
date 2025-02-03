@extends('layouts.app')

@section('content')
    <form action="{{route('categories.store')}}" method="POST">
        @csrf
        <div class="flex justify-center">
            <div class="w-8/12 bg-white p-6 rounded-lg">
                <div class="mb-4">
                    <label for="name" class="sr-only">Nombre</label>
                    <input type="text" name="name" id="name" placeholder="Nombre de la categoría" class="bg-gray-100 border-2 w-full p-4 my-1 rounded-lg" value="">
                    
                    <label for="description" class="sr-only">Descripción</label>
                    <input type="text" name="description" id="description" placeholder="Descripción de la categoría" class="bg-gray-100 border-2 w-full p-4 my-1 rounded-lg" value="">
                </div>
                <button class="bg-blue-300 w-full rounded-md py-4 text-white">Agregar</button>
            </div>
        </div>  
    </form>

@endsection