@extends('layout.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Título -->
    <div class="flex items-center justify-between mb-8">
        <h1 class="text-3xl font-bold text-purple-800">Crear Nuevos Préstamos</h1>
    </div>

    <!-- Tarjeta del formulario -->
    <div class="bg-white shadow-md rounded-lg p-6">
        <form action="{{ route('prestamos.buscar_usuario') }}" method="POST">
            @csrf
            <!-- ID Usuario -->
            <div class="mb-4">
                <label for="usuario_id" class="block text-gray-700 font-bold mb-2">ID Usuario:</label>
                <input type="text" name="usuario_id"
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <!-- Nombre Usuario -->
            <div class="mb-4">
                <label for="usuario_nombre" class="block text-gray-700 font-bold mb-2">Nombre Usuario:</label>
                <input type="text" name="usuario_nombre"
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <!-- Botones -->
            <div class="flex items-center justify-end gap-4 mt-6">
                <input type="submit" value="Buscar"
                       class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-lg shadow transition">
                <a href="{{ route('prestamos.index') }}"
                   class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg shadow transition">
                    Cancelar
                </a>
            </div>
        </form>
    </div>

    <!-- Usuario encontrado -->
    @isset($usuario)
    <div class="bg-white shadow-md rounded-lg p-6 mt-8">
        <h2 class="text-xl font-bold mb-4 text-purple-700">Usuario Encontrado:</h2>
        <p><strong>ID:</strong> {{ $usuario->id }}</p>
        <p><strong>Nombre:</strong> {{ $usuario->nombre }}</p>
        <p><strong>Email:</strong> {{ $usuario->email }}</p>

        <form action="{{ route('prestamos.select_libro') }}" method="POST" class="mt-6">
            @csrf
            <input type="hidden" name="usuario_id" value="{{ $usuario->id }}">
            <button type="submit"
                    class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg shadow transition">
                Seleccionar Libro
            </button>
        </form>
    </div>
    @endisset
</div>
@endsection
