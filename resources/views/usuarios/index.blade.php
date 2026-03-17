@extends('layout.admin')

@section('content')

<!-- Título -->
    <div class="flex items-center justify-between mb-9">
        <h1 class="text-3xl font-bold text-purple-800">Lista de Usuarios</h1>
        <a href="{{ route('usuarios.create')}} "
           class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition">
            Crear Usuario
        </a>
    </div>

<table class="w-full border-collapse mt-4">
    <thead>
        <tr class="bg-purple-100 text-purple-900">
            <th class="p-3 text-left">ID</th>
            <th class="p-3 text-left">Nombre</th>
            <th class="p-3 text-left">Email</th>
            <th class="p-3 text-left">Tipo de Usuario</th>
            <th class="p-3 text-left">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @forelse($usuarios as $usuario)
        <tr class="border-b hover:bg-purple-50">
            <td class="p-3">{{ $usuario->id }}</td>
            <td class="p-3">{{ $usuario->name }}</td>
            <td class="p-3">{{ $usuario->email }}</td>
            <td class="p-3">{{ $usuario->user_type }}</td>
            <td class="p-3">
                <a href="{{ route('usuarios.edit', $usuario->id) }}" class="text-blue-600 hover:underline">Editar</a> |
                <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:underline">Eliminar</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5" class="text-center p-4">No hay usuarios registrados.</td>
        </tr>
    @endforelse
    </tbody>
</table> 

@endsection
