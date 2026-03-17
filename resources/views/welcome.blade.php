<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biblioteca - Inicio</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    function toggleMenu() {
      document.getElementById('mobile-menu').classList.toggle('hidden');
    }
  </script>
</head>
<body class="bg-purple-50 flex flex-col min-h-screen font-sans">

   <!-- Header-->
<header class="bg-gradient-to-r from-purple-500 to-purple-600 text-white shadow-lg fixed w-full z-50 py-6 border-b-4 border-purple-700">
  <div class="flex justify-between items-center px-8">
    <h1 class="text-4xl font-bold tracking-wide">📚 Biblioteca Admin</h1>

     <!-- Menú Desktop -->
    <nav class="hidden md:flex space-x-6">
      <a href="{{ route('welcome') }}" class="hover:text-purple-100 transition">Inicio</a>
      <a href="{{ route('login')}}" class="text-white hover:text-purple-200 transition">Iniciar Sesión</a>
      <a href="#" class="hover:text-purple-100 transition">Libros</a>
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

  <!-- Contenedor principal -->
  <div class="flex flex-1 pt-20">
    
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
        <a href="#" class="flex items-center px-3 py-2 rounded-lg bg-purple-300 text-purple-900 font-bold">
           📖 Libros 
           <span class="ml-auto bg-purple-600 text-white text-xs px-2 py-0.5 rounded-full">120</span>
           </a> 
        <a href="#" class="flex items-center px-3 py-2 rounded-lg hover:bg-purple-400 transition">🗂️ Categorías</a> 
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
    <main class="flex-1 bg-gradient-to-r from-purple-100 to-purple-200 p-8 md:ml-64">
      <!-- Bienvenida -->
      <div class="flex flex-col md:flex-row items-center justify-between mb-12">
        <div class="md:w-1/2 space-y-6">
          <h2 class="text-4xl md:text-5xl font-bold text-purple-800 leading-tight">
            Bienvenido a la <span class="text-purple-600">Biblioteca</span>
          </h2>
          <p class="text-gray-700 text-lg">
            Explora nuestro catálogo de libros, gestiona tus préstamos y accede a recursos digitales desde cualquier lugar.
          </p>
          <div class="space-x-4">
            <a href="{{ route('login')}}" class="bg-purple-400 text-white px-6 py-3 rounded-lg shadow hover:bg-purple-500 transition">
              Iniciar Sesión
            </a>
            <a href="#" class="bg-white text-purple-500 border border-purple-400 px-6 py-3 rounded-lg hover:bg-purple-100 transition">
              Libros
            </a>
          </div>
        </div>
        <div class="md:w-1/2 mt-8 md:mt-0">
          <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?auto=format&fit=crop&w=800&q=80" 
               alt="Biblioteca" class="rounded-xl shadow-xl transform hover:scale-105 transition duration-500">
        </div>
      </div>

      <!-- Colecciones destacadas -->
      <section class="container mx-auto px-6 py-10">
        <h2 class="text-2xl font-semibold text-purple-700 mb-6">Colecciones destacadas</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Fantasía -->
          <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="https://picsum.photos/400/250?random=1" alt="Fantasía" class="w-full h-48 object-cover">
            <div class="p-6">
              <h3 class="text-xl font-bold text-purple-600 mb-4">Fantasía</h3>
              <p class="text-gray-700">Sumérgete en mundos mágicos llenos de aventuras y criaturas extraordinarias.</p>
            </div>
          </div>

          <!-- Ciencia Ficción -->
          <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="https://picsum.photos/400/250?random=2" alt="Ciencia Ficción" class="w-full h-48 object-cover">
            <div class="p-6">
              <h3 class="text-xl font-bold text-purple-600 mb-4">Ciencia Ficción</h3>
              <p class="text-gray-700">Explora futuros posibles, viajes espaciales y tecnologías sorprendentes.</p>
            </div>
          </div>

          <!-- Historia -->
          <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="https://picsum.photos/400/250?random=3" alt="Historia" class="w-full h-48 object-cover">
            <div class="p-6">
              <h3 class="text-xl font-bold text-purple-600 mb-4">Historia</h3>
              <p class="text-gray-700">Descubre los acontecimientos que marcaron el rumbo de la humanidad.</p>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>

  <!-- Footer grande -->
  <footer class="bg-purple-400 text-white mt-12 md:ml-64">
    <div class="container mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
      <!-- Información de contacto -->
      <div>
        <h4 class="text-lg font-semibold mb-4">Contacto</h4>
        <p class="text-sm">📍 Dirección: Av. Principal #123, Matamoros, Tamaulipas</p>
        <p class="text-sm">📞 Teléfono: (868) 123-4567</p>
        <p class="text-sm">✉️ Email: contacto@biblioteca.mx</p>
      </div>
      <!-- Redes sociales -->
      <div>
        <h4 class="text-lg font-semibold mb-4">Síguenos</h4>
        <div class="flex justify-center md:justify-start space-x-6">
          <a href="#" class="hover:text-purple-200">Facebook</a>
          <a href="#" class="hover:text-purple-200">Instagram</a>
          <a href="#" class="hover:text-purple-200">Twitter</a>
          <a href="#" class="hover:text-purple-200">YouTube</a>
        </div>
      </div>
      <!-- Horarios -->
      <div>
        <h4 class="text-lg font-semibold mb-4">Horarios</h4>
        <p class="text-sm">Lunes a Viernes: 9:00 AM - 6:00 PM</p>
        <p class="text-sm">Sábados: 10:00 AM - 2:00 PM</p>
        <p class="text-sm">Domingos: Cerrado</p>
      </div>
    </div>
    <div class="bg-purple-500 text-center py-4">
      <p class="text-sm">&copy; 2026 Biblioteca Municipal - Todos los derechos reservados</p>
      </div>
  </footer>