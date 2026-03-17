@extends('layout.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold text-purple-700 mb-6">Categorías</h1>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('categorias.create') }}"
       class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg shadow transition mb-4 inline-block">
        Agregar Categoría
    </a>

    <div class="bg-white shadow rounded-lg p-6">
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-purple-100">
                    <th class="p-3 text-left">ID</th>
                    <th class="p-3 text-left">Nombre</th>
                    <th class="p-3 text-left">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categorias as $categoria)
                    <tr class="border-b hover:bg-purple-50">
                        <td class="p-3">{{ $categoria->id }}</td>
                        <td class="p-3">{{ $categoria->nombre }}</td>
                        <td class="p-3">
                            <a href="{{ route('categorias.edit', $categoria->id) }}" class="text-blue-600">Editar</a>
                            <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 ml-2">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</div>
@endsection
