@extends('layout.admin')
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biblioteca - Administración</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-purple-50 min-h-screen flex flex-col font-sans">

 <!-- Header-->
<header class="bg-gradient-to-r from-purple-500 to-purple-600 text-white shadow-lg fixed w-full z-50 py-6 border-b-4 border-purple-700">
  <div class="flex justify-between items-center px-8">
    <h1 class="text-4xl font-bold tracking-wide">📚 Biblioteca Admin</h1>

     <!-- Menú Desktop -->
    <nav class="hidden md:flex space-x-6">
      <a href="{{ route('welcome') }}" class="hover:text-purple-100 transition">Inicio</a>
      <a href="{{ route('login')}}" class="text-white hover:text-purple-200 transition">Iniciar Sesión</a>
      <a href="{{ route('home') }}" class="hover:text-purple-100 transition">Libros</a>
      <a href="#" class="hover:text-purple-100 transition">Préstamos</a>
      <a href="#" class="hover:text-purple-100 transition">Salir</a>
    </nav>
    <!-- Botón hamburguesa -->
    <button class="md:hidden focus:outline-none" onclick="toggleMenu()">
      <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>
  </div>
</header>

  <!-- Sidebar fija que llega hasta abajo -->
    <aside id="sidebar" 
        class="hidden md:flex flex-col bg-gradient-to-b from-purple-200 to-purple-300 w-64 p-6 space-y-6 shadow-lg fixed top-20 left-0 bottom-0">
        
        <!-- Encabezado -->
        <div class="flex items-center space-x-2 mb-6"> 
            <span class="text-2xl">📚</span> 
            <h2 class="text-xl font-bold text-purple-800">Biblioteca</h2> 
        </div> 

        <!-- Navegación -->
        <nav class="flex flex-col space-y-2 text-purple-900 font-semibold flex-grow"> 
            <p class="text-xs uppercase text-gray-600 mt-2 mb-1">Gestión</p> 
            
            <a href="{{ route('home') }}" class="flex items-center px-3 py-2 rounded-lg bg-purple-300 text-purple-900 font-bold">
                📖 Libros 
                <span class="ml-auto bg-purple-600 text-white text-xs px-2 py-0.5 rounded-full">120</span>
            </a> 

            <a href="{{ route('categorias.index') }}" class="flex items-center px-3 py-2 rounded-lg hover:bg-purple-400 transition">🗂️ Categorías</a> 
            <a href="#" class="flex items-center px-3 py-2 rounded-lg hover:bg-purple-400 transition">📄 Préstamos</a> 

            <p class="text-xs uppercase text-gray-600 mt-4 mb-1">Cuenta</p> 
            <a href="#" class="flex items-center px-3 py-2 rounded-lg hover:bg-purple-400 transition">👤 Perfil</a> 
            <a href="#" class="flex items-center px-3 py-2 rounded-lg hover:bg-red-300 transition">🚪 Salir</a> 
        </nav> 

        <!-- Footer pequeño dentro de la sidebar --> 
        <div class="text-xs text-gray-700 pt-6 border-t border-purple-300"> 
            © 2026 Biblioteca Admin
        </div>
    </aside>


<!-- Contenido principal -->
  <main class="flex-1 ml-64 px-10 pt-36"> 
      <!-- pt-36 agrega espacio superior para que no quede pegado al header -->
      
      <h2 class="text-3xl font-bold text-purple-700 mb-2">
          Gestión de Libros
      </h2>
      <p class="text-gray-600 mb-8">
          Administra el catálogo de libros de la biblioteca.
      </p>

      <!-- Tarjetas de estadísticas -->
        <section class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white shadow rounded-lg p-6 text-center">
                <h3 class="text-lg font-semibold text-purple-700">Total de Libros</h3>
                <p class="text-3xl font-bold text-purple-900">1,247</p>
                <p class="text-sm text-gray-500">↑ 5.2% desde el mes pasado</p>
            </div>
            <div class="bg-white shadow rounded-lg p-6 text-center">
                <h3 class="text-lg font-semibold text-purple-700">Libros Prestados</h3>
                <p class="text-3xl font-bold text-purple-900">189</p>
                <p class="text-sm text-gray-500">↓ 2.1% desde el mes pasado</p>
            </div>
            <div class="bg-white shadow rounded-lg p-6 text-center">
                <h3 class="text-lg font-semibold text-purple-700">Usuarios Activos</h3>
                <p class="text-3xl font-bold text-purple-900">543</p>
                <p class="text-sm text-gray-500">↑ 12.7% desde el mes pasado</p>
            </div>
            <div class="bg-white shadow rounded-lg p-6 text-center">
                <h3 class="text-lg font-semibold text-purple-700">Devoluciones Pendientes</h3>
                <p class="text-3xl font-bold text-purple-900">24</p>
                <p class="text-sm text-gray-500">↑ 3.4% desde ayer</p>
            </div>
        </section>
<!-- Gestión de Libros -->
        <section class="bg-white shadow rounded-lg p-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-semibold text-purple-700">Lista de Libros</h2>
                <a href="{{ route('libros.create') }}" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition">
                     <i class="fas fa-plus mr-2"></i> Agregar libro
</a>
            </div>

            <table class="w-full border-collapse">
    <thead>
        <tr class="bg-purple-100 text-purple-900">
            <th class="p-3 text-left">Título</th>
            <th class="p-3 text-left">Autor</th>
            <th class="p-3 text-left">ISBN</th>
            <th class="p-3 text-left">Categoría</th>
            <th class="p-3 text-left">Disponibilidad</th>
            <th class="p-3 text-left">Acciones</th>
        </tr>
    </thead>
    <tbody>
  @forelse($libros as $libro)
    <tr class="border-b hover:bg-purple-50">
        <!-- Título -->
        <td class="p-3">{{ $libro->nombre }}</td>

        <!-- Autor -->
        <td class="p-3">{{ $libro->autor }}</td>

        <!-- ISBN -->
        <td class="p-3">{{ $libro->isbn }}</td>

        <!-- Categoría -->
        <td class="p-3">
            {{ $libro->categoria ? $libro->categoria->nombre : 'Sin categoría' }}
        </td>

        <!-- Disponibilidad -->
        <td class="p-3">
            @if($libro->estatus == 0)
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    Disponible
                </span>
            @else
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                    Prestado
                </span>
            @endif
        </td>

        <!-- Acciones -->
        <td class="p-3">
            <a href="{{ route('libros.edit', $libro->id) }}" 
               class="text-purple-600 hover:underline">Editar</a>

            <form action="{{ route('libros.destroy', $libro->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" 
                        class="text-red-600 hover:underline ml-2"
                        onclick="return confirm('¿Seguro que quieres eliminar este libro?')">
                    Eliminar
                </button>
            </form>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="6" class="p-3 text-center text-gray-500">
            No hay libros registrados.
        </td>
    </tr>
@endforelse

</tbody>
</table>
            <!-- Paginación -->
             {{ $libros->links() }}
          <!-- <div class="flex justify-center mt-4 space-x-2">
                <button class="px-3 py-1 bg-purple-300 rounded hover:bg-purple-400">1</button>
                <button class="px-3 py-1 bg-purple-500 text-white rounded">2</button>
                <button class="px-3 py-1 bg-purple-300 rounded hover:bg-purple-400">3</button>
            </div>-->
  </main>
</body>
</html>
