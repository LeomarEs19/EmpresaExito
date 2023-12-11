@extends('layout.app')

@section('titulo')

    Registrar empleado

@endsection

@section('contenido')

        <div class="md:flex md:justify-center md:gap-10 md:ítems-center">
            <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">

                <form action="{{ route('empleados.store') }}" method="POST">
                    @csrf
                    <div class="mb-5">
                        <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                        <input type="text" name="name" id="name" placeholder="Nombre" class="border p-3 w-full rounded-lg">
                    </div>

                    <div class="mb-5">
                        <label for="cedula" class="mb-2 block uppercase text-gray-500 font-bold">Cedula</label>
                        <input type="number" name="cedula" id="cedula" placeholder="cedula" class="border p-3 w-full rounded-lg">

                    </div>

                    <div class="mb-5">
                        <label for="direccion" class="mb-2 block uppercase text-gray-500 font-bold">direccion</label>
                        <input type="text" name="direccion" id="direccion" placeholder="direccion" class="border p-3 w-full rounded-lg">

                    </div>

                    <div class="mb-5">
                        <label for="telefono" class="mb-2 block uppercase text-gray-500 font-bold">telefono</label>
                        <input type="text" name="telefono" id="telefono" placeholder="telefono" class="border p-3 w-full rounded-lg">
                    </div>

                    <input type="submit"   value="Crear Cuenta" class=" cuenta bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white">
                </form>
            </div>
        </div>

@endsection