@extends('layout.admin')
@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold text-purple-700 mb-6">Editar Libro</h1>

    <form action="{{ route('libros.update', $libro->id) }}" method="POST" class="bg-white shadow rounded-lg p-6">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="nombre" class="block text-gray-700 font-semibold mb-2">Nombre del libro:</label>
            <input type="text" name="nombre" id="nombre" value="{{ $libro->nombre }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
        </div>

        <div class="mb-4">
            <label for="isbn" class="block text-gray-700 font-semibold mb-2">ISBN:</label>
            <input type="text" name="isbn" id="isbn" value="{{ $libro->isbn }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
        </div>

        <div class="mb-4">
            <label for="autor" class="block text-gray-700 font-semibold mb-2">Autor:</label>
            <input type="text" name="autor" id="autor" value="{{ $libro->autor }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
        </div>

        <div class="mb-4">
            <label for="editorial" class="block text-gray-700 font-semibold mb-2">Editorial:</label>
            <input type="text" name="editorial" id="editorial" value="{{ $libro->editorial }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
        </div>

        <div class="mb-4">
    <label for="categoria" class="block text-gray-700 font-semibold mb-2">Categoría:</label>
    <select name="categoria" id="categoria"
            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500" required>
        <option value="">Seleccione una categoría</option>
        @foreach($categorias as $categoria)
             <option value="{{ $categoria->id }}" {{ $libro->categoria_id == $categoria->id ? 'selected' : '' }}>{{ $categoria->nombre }}</option>
        @endforeach
    </select>
</div>
        <div class="flex items-center justify-center mt-4">
            {{-- Botón Guardar --}}
            <button type="submit"
                    class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg shadow transition">
                Guardar Cambios
            </button>

            {{-- Botón Cancelar dentro del form pero sin enviar --}}
            <button type="button"
                    onclick="window.location='{{ route('home') }}'"
                    class="ml-4 bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg shadow transition">
                Cancelar
            </button>
        </div>
    </form>
    @endsection