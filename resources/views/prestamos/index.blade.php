@extends('layout.admin')
@section('content')

<!-- Título -->
    <div class="flex items-center justify-between mb-9">
        <h1 class="text-3xl font-bold text-purple-800">Prestamos</h1>
        <a href=" "
           class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition">
            Crear Prestamos
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
</table>
@endsection