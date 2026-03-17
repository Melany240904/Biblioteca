@extends('layout.admin')
@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold text-purple-700 mb-6">Editar Categoría</h1>

    <form action="{{ route('categorias.update', $categoria->id) }}" method="POST" class="bg-white shadow rounded-lg p-6">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-semibold mb-2">Nombre de la categoría:</label>
            <input type="text" name="nombre" id="name" value="{{ $categoria->nombre }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
        </div>

        <div class="flex items-center justify-center mt-4">
            {{-- Botón Guardar --}}
            <button type="submit"
                    class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg shadow transition">
                Guardar Cambios
            </button>

            {{-- Botón Cancelar dentro del form pero sin enviar --}}
            <button type="button"
                    onclick="window.location='{{ route('categorias.index') }}'"
                    class="ml-4 bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg shadow transition">
                Cancelar
            </button>
        </div>
    </form>
    @endsection