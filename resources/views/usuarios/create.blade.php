@extends ('layout.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold text-purple-700 mb-6">Crear Nuevo Usuarios</h1>

    <form action="{{route('usuarios.store')}}" method="POST" class="bg-white shadow rounded-lg p-6">
        @csrf
        <div class="mb-4">
            <label for="nombre" class="block text-gray-700 font-semibold mb-2">Nombre del usuario:</label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
            @error('nombre')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-semibold mb-2">Correo:</label>
            <input type="text" name="email" id="email" value="{{ old('email') }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
                 @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
                </div>

         <div class="mb-4">
            <label for="password" class="block text-gray-700 font-semibold mb-2">Contraseña:</label>
            <input type="text" name="password" id="password" value=""
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
        @error('password')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
                </div>
                <div class="mb-4">
            <label for="password_confirmation" class="block text-gray-700 font-bold mb-2">Confirmar Contraseña:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            @error('password_confirmation')
                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="user_type" class="block text-gray-700 font-bold mb-2">Tipo de usuario:</label>
            <select name="user_type" id="user_type" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                <option value="">Seleccione un tipo de usuario</option>
                <option value="user">Usuario</option>                
                <option value="admin">Administrador</option>
            </select>
            @error('user_type')
                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex items-center justify-center mt-4">
            <button type="submit"
                    class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg shadow transition">
                Guardar usuario
            </button>
            <a href="{{ route('usuarios.index') }}" class="ml-4 bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg shadow transition">
                Cancelar</a>
        </div>
    </form>
</div>
@endsection
