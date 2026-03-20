@extends('layout.admin')
@section('content')

<!-- Título -->
<div class="flex items-center justify-between mt-8 mb-8">
    <h1 class="text-4xl font-bold text-purple-800">Préstamos</h1>
    <a href="{{ route('prestamos.create') }}"
       class="bg-purple-600 text-white px-6 py-2 rounded-lg hover:bg-purple-900 transition">
        Crear Préstamos
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
    </tbody>
</table>
@endsection
