<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biblioteca Municipal - Dashboard</title>

  <!-- Tailwind desde CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-purple-50 min-h-screen font-sans">

 <!-- Header-->
<header class="bg-gradient-to-r from-purple-500 to-purple-600 text-white shadow-lg fixed w-full z-50 py-6 border-b-4 border-purple-700">
  <div class="flex justify-between items-center px-8">
    <h1 class="text-4xl font-bold tracking-wide">📚 Biblioteca Admin</h1>

     <!-- Menú Desktop -->
    <nav class="hidden md:flex space-x-6">
      <a href="{{ route('welcome') }}" class="hover:text-purple-100 transition">Inicio</a>
      <a href="{{ route('login')}}" class="text-white hover:text-purple-200 transition">Iniciar Sesión</a>
      <a href="{{ route('home') }}" class="hover:text-purple-100 transition">Libros</a>
      <a href="{{ route('prestamos.index')}}" class="hover:text-purple-100 transition">Préstamos</a>
      <a href="{{ route('logout') }}" class="hover:text-purple-100 transition">Salir</a>
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

<!-- Sidebar fija -->
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
        
      <a href="{{ route('home') }}"
           class="flex items-center px-3 py-2 rounded-lg transition 
                  {{ request()->routeIs('home') ? 'bg-purple-400 text-purple-900 font-bold' : 'hover:bg-purple-400' }}">
             Inicio 
        </a> 

        <a href="{{ route('home') }}"
           class="flex items-center px-3 py-2 rounded-lg transition 
                  {{ request()->routeIs('libros.*') ? 'bg-purple-400 text-purple-900 font-bold' : 'hover:bg-purple-400' }}">
            📖 Libros 
        </a> 

        <a href="{{ route('categorias.index') }}"
           class="flex items-center px-3 py-2 rounded-lg transition 
                  {{ request()->routeIs('categorias.*') ? 'bg-purple-400 text-purple-900 font-bold' : 'hover:bg-purple-400' }}">
            🗂️ Categorías
        </a> 

        <a href="{{ route('prestamos.index')}}"
           class="flex items-center px-3 py-2 rounded-lg transition 
                  {{ request()->routeIs('prestamos.*') ? 'bg-purple-400 text-purple-900 font-bold' : 'hover:bg-purple-400' }}">
            📄 Préstamos
        </a> 

        <a href="{{ route('usuarios.index') }}"
           class="flex items-center px-3 py-2 rounded-lg transition 
                  {{ request()->routeIs('usuarios.*') ? 'bg-purple-400 text-purple-900 font-bold' : 'hover:bg-purple-400' }}">
            👤 Usuarios
        </a> 
        <a href="{{ route('logout') }}"
           class="flex items-center px-3 py-2 rounded-lg hover:bg-red-300 transition">
            🚪 Salir
        </a> 
    </nav> 

    <!-- Footer pequeño dentro de la sidebar --> 
    <div class="text-xs text-gray-700 pt-6 border-t border-purple-300"> 
        © 2026 Biblioteca Admin
    </div>
</aside>


<!-- Contenido principal -->
<div class="flex min-h-screen bg-purple-50">
  <main class="flex-1 p-8 pt-24 md:ml-64">
      @yield('content')
  </main>
</div>

@include('partials.admin.footer')

</body>
</html>
