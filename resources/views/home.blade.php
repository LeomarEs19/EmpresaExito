@extends('layout.app')

@section('titulo')
    Empleados | Registro
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:ítems-center">
        <div class=" bg-white p-6 rounded-lg shadow-xl">

            <div class="w-1/2 p-10">
                <div class="w-full flex justify-between items-center">
                    <h1 class="text-xl font-bold">Empleados</h1>
                    <a href="{{ url('crear') }}" class="p-2 bg-green-800 text-white rounded hover:scale-105 transition-all">+ Crear</a>
                </div>
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead>
                        <tr>
                            <th scope="col" class="px-6 py-3 text-start text-lg font-medium text-gray-500 uppercase">ID</th>
                            <th scope="col" class="px-6 py-3 text-start text-lg font-medium text-gray-500 uppercase">Nombre</th>
                            <th scope="col" class="px-6 py-3 text-start text-lg font-medium text-gray-500 uppercase">Cedula</th>
                            <th scope="col" class="px-6 py-3 text-start text-lg font-medium text-gray-500 uppercase">Direccion</th>
                            <th scope="col" class="px-6 py-3 text-start text-lg font-medium text-gray-500 uppercase">Telefono</th>
                            <th scope="col" class="px-6 py-3 text-start text-lg font-medium text-gray-500 uppercase"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach ($empleados as $i)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 ">{{ $i->id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 ">{{ $i->nombre }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 ">{{ $i->cedula }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 ">{{ $i->direccion }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 ">{{ $i->telefono }}</td>
                                <td class="flex flex-row gap-3">
                                    <a href="{{ url('editar.index', $i->id) }}" class="p-1 rounded bg-yellow-600 text-white">Editar</a>
                                    <a href="{{ url('delete', $i->id)}}" class="p-1 rounded bg-red-600 text-white">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        
        </div>
    </div>
@endsection
