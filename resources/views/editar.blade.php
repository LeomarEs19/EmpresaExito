@extends('layout.app')

@section('title')
    Editar | Empleado
@endsection

@section('content')
    
<div class="md:flex md:justify-center md:gap-10 md:ítems-center">
    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
        <div class="w-1/2 p-10">
            <a href="{{ route('home.index')}}" class="underline mb-4">Volver</a>
            <form action="{{ route('editar.edit', $empleado->id)}}" class="flex flex-col gap-4" method="post">
                @csrf
                <div class="flex flex-col gap-2">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" placeholder="Nombre Completo" class="border border-gray-400 p-2 rounded @error('nombre') border-red-500 @enderror" value="{{ $empleado->nombre }}">
                </div>
                @error('nombre')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
                <div class="flex flex-col gap-2">
                    <label for="cedula">Cedula</label>
                    <input type="number" name="cedula" placeholder="Cédula" class="border border-gray-400 p-2 rounded @error('cedula') border-red-500 @enderror" value="{{ $empleado->cedula }}">
                </div>
                @error('cedula')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
                <div class="flex flex-col gap-2">
                    <label for="direccion">Dirección</label>
                    <input type="text" name="direccion" placeholder="Direccion" class="border border-gray-400 p-2 rounded @error('direccion') border-red-500 @enderror" value="{{ $empleado->direccion }}">
                </div>
                @error('direccion')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
                <div class="flex flex-col gap-2">
                    <label for="telefono">Teléfono</label>
                    <input type="number" name="telefono" placeholder="Teléfono" class="border border-gray-400 p-2 rounded @error('telefono') border-red-500 @enderror" value="{{ $empleado->telefono }}">
                </div>
                @error('telefono')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
                <button type="submit" class="w-full p-2 bg-yellow-500 text-white rounded hover:scale-105 transition-all">Editar</button>
            </form>
        </div>
        @endsection
    </div>
</div>

