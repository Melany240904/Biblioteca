@extends('layout.admin')
@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold text-purple-700 mb-6">Agregar Libro</h1>

    <form action="{{ route('libros.store') }}" method="POST" class="bg-white shadow rounded-lg p-6">
    @csrf

        <div class="mb-4">
            <label for="nombre" class="block text-gray-700 font-semibold mb-2">Nombre del libro:</label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
        </div>

        <div class="mb-4">
            <label for="isbn" class="block text-gray-700 font-semibold mb-2">ISBN:</label>
            <input type="text" name="isbn" id="isbn" value="{{ old('isbn') }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
        </div>

        <div class="mb-4">
            <label for="autor" class="block text-gray-700 font-semibold mb-2">Autor:</label>
            <input type="text" name="autor" id="autor" value="{{ old('autor') }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
        </div>

        <div class="mb-4">
            <label for="editorial" class="block text-gray-700 font-semibold mb-2">Editorial:</label>
            <input type="text" name="editorial" id="editorial" value="{{ old('editorial') }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
        </div>

        <div class="mb-4">
    <label for="categoria" class="block text-gray-700 font-semibold mb-2">Categoría:</label>
    <select name="categoria" id="categoria"
            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500" required>
        <option value="">Seleccione una categoría</option>
        @foreach($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
        @endforeach
    </select>
</div>

        <div class="flex items-center justify-center mt-4">
            <button type="submit"
                    class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg shadow transition">
                Guardar
            </button>
            <button type="button"
                    onclick="window.location='{{ route('home') }}'"
                    class="ml-4 bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg shadow transition">
                Cancelar
            </button>
        </div>
    </form>
</div>
@endsection
