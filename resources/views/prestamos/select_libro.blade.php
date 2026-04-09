@extends('layout.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Título -->
    <div class="flex items-center justify-between mb-8">
        <h1 class="text-4xl font-bold text-purple-800">Seleccionar libro</h1>
    </div>

    <!-- Tarjeta -->
    <div class="bg-white shadow-md rounded-lg p-6">
        <!-- Usuario -->
        <div class="mb-6">
            <h2 class="text-xl font-bold mb-4 text-purple-700">Usuario:</h2>
            <p><strong>ID:</strong> {{ $usuario->id }}</p>
            <p><strong>Nombre:</strong> {{ $usuario->name }}</p>
            <p><strong>Email:</strong> {{ $usuario->email }}</p>
        </div>

        <!-- Formulario -->
        <form action="{{ route('prestamos.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="libro" class="block text-gray-700 font-bold mb-2">Libro:</label>
                <select name="libro_id"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
                    <option value="">Seleccione un libro</option>
                    @foreach($libros as $libro)
                        <option value="{{ $libro->id }}">{{ $libro->nombre }} - {{ $libro->autor }}</option>
                    @endforeach
                </select>
            </div>

            <input type="hidden" name="usuario_id" value="{{ $usuario->id }}">

            <!-- Botones -->
            <div class="flex items-center justify-end gap-4 mt-6">
                <button type="submit"
                        class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-lg shadow transition">
                    Prestar
                </button>
                <a href="{{ route('prestamos.index') }}"
                   class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg shadow transition">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
