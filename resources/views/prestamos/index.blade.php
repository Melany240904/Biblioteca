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
            <th class="p-3 text-left">Libro</th>
            <th class="p-3 text-left">Usuario</th>
            <th class="p-3 text-left">Fecha</th>
            <th class="p-3 text-left">Estado</th>
            <th class="p-3 text-left">Fecha Entrega</th>
            <th class="p-3 text-left">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($prestamos as $prestamo)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $prestamo->id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $prestamo->libro->nombre }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $prestamo->usuario->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $prestamo->created_at->format('Y-m-d') }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if($prestamo->estado == 'pendiente')
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Pendiente</span>
                            @else
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Entregado</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $prestamo->fecha_entrega ? $prestamo->fecha_entrega : '' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if($prestamo->estado == 'pendiente')
                            <a href="{{ route('prestamos.entregar',$prestamo->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                Entregar</a>
                            @endif
                        </td>
                    </tr>
                @endforeach

    </tbody>
</table>
@endsection