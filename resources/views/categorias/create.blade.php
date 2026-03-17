@extends('layout.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold text-purple-700 mb-6">Agregar nueva Categoría</h1>

    <form action="{{ route('categorias.store') }}" method="POST" class="bg-white shadow rounded-lg p-6">
        @csrf
        <div class="mb-4">
            <label for="nombre" class="block text-gray-700 font-semibold mb-2">Nombre de la categoría:</label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
            @error('nombre')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-center mt-4">
            <button type="submit"
                    class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg shadow transition">
                Guardar Categoría
            </button>
            <button type="button"
                    onclick="window.location='{{ route('categorias.index') }}'"
                    class="ml-4 bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg shadow transition">
                Cancelar
            </button>
        </div>
    </form>
</div>
@endsection
