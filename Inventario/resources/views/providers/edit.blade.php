@extends('layouts.app')

@section('content')
    <form action="{{route('providers.update', $provider->id)}}" method="POST">
        @csrf
        <div class="flex justify-center">
            <div class="w-8/12 bg-white p-6 rounded-lg">
                <div class="mb-4">
                    @method('PUT')
                    <label for="name" class="sr-only">Nombre</label>
                    <input type="text" name="name" id="name" placeholder="Nombre" class="bg-gray-100 border-2 w-full p-4 my-1 rounded-lg" value="{{$provider->name}}">
                    
                    <label for="natural_person" class="sr-only">Persona Natural</label>
                    <input type="checkbox" name="natural_person" id="natural_person" class="bg-gray-100 border-2 w-full p-4 my-1 rounded-lg" {{$provider->natural_person ? 'checked' : ''}}>
                    
                    <label for="bank" class="sr-only">Banco</label>
                    <input type="text" name="bank" id="bank" placeholder="Banco" class="bg-gray-100 border-2 w-full p-4 my-1 rounded-lg" value="{{$provider->bank}}">

                    <label for="account_number" class="sr-only">Número de cuenta</label>
                    <input type="text" name="account_number" id="account_number" placeholder="Número de cuenta" class="bg-gray-100 border-2 w-full p-4 my-1 rounded-lg" value="{{$provider->account_number}}">
                
                </div>
                <button class="bg-blue-300 w-full rounded-md py-4 text-white">Agregar Proveedor</button>
            </div>
        </div>  
    </form>

@endsection