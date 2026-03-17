@extends('layout.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold text-purple-700 mb-6">Editar Usuario</h1>

    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST" class="bg-white shadow rounded-lg p-6">
        @csrf
        @method('PUT')

        <!-- Nombre -->
        <div class="mb-4">
            <label for="nombre" class="block text-gray-700 font-semibold mb-2">Nombre del usuario:</label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $usuario->name) }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
            @error('nombre')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-semibold mb-2">Correo:</label>
            <input type="email" name="email" id="email" value="{{ old('email', $usuario->email) }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
            @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Tipo de usuario -->
        <div class="mb-4">
            <label for="user_type" class="block text-gray-700 font-bold mb-2">Tipo de usuario:</label>
            <div class="relative">
                <select name="user_type" id="user_type"
                        class="block w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 pr-8"
                        required>
                    <option value="">Seleccione un tipo de usuario</option>
                    <option value="user" {{ old('user_type', $usuario->user_type) == 'user' ? 'selected' : '' }}>Usuario</option>
                    <option value="admin" {{ old('user_type', $usuario->user_type) == 'admin' ? 'selected' : '' }}>Administrador</option>
                </select>
                <!-- Flechita -->
                <span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none text-gray-500">
                    ▼
                </span>
            </div>
            @error('user_type')
                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Botones -->
        <div class="flex items-center justify-center mt-4">
            <button type="submit"
                    class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg shadow transition">
                Guardar usuario
            </button>
            <a href="{{ route('usuarios.index') }}" 
               class="ml-4 bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg shadow transition">
                Cancelar
            </a>
        </div>
    </form>
</div>
@endsection
