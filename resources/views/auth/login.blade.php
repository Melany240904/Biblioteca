@extends('layout.auth')

@section('content')
<!-- Figuras decorativas en el fondo -->
  <div class="absolute inset-0 pointer-events-none">
    <!-- Lado izquierdo -->
    <div class="w-32 h-32 bg-white rounded-full absolute top-10 left-10 opacity-20"></div>
    <div class="w-20 h-20 bg-white rounded-full absolute top-1/4 left-20 opacity-15"></div>
    <div class="w-24 h-24 bg-white rounded-full absolute top-1/2 left-8 opacity-10"></div>
    <div class="w-16 h-16 bg-white rounded-full absolute bottom-1/3 left-16 opacity-20"></div>
    <div class="w-28 h-28 bg-white rounded-full absolute bottom-20 left-6 opacity-15"></div>
    <svg class="w-16 h-16 text-white absolute top-1/3 left-32 opacity-20" fill="currentColor" viewBox="0 0 24 24">
      <path d="M12 2l2.9 6.9L22 9.7l-5 4.9 1.2 7.1L12 18.6l-6.2 3.1L7 14.6 2 9.7l7.1-0.8L12 2z"/>
    </svg>
    <svg class="w-12 h-12 text-white absolute bottom-1/4 left-24 opacity-15" fill="currentColor" viewBox="0 0 24 24">
      <path d="M12 2l2.9 6.9L22 9.7l-5 4.9 1.2 7.1L12 18.6l-6.2 3.1L7 14.6 2 9.7l7.1-0.8L12 2z"/>
    </svg>

    <!-- Lado derecho -->
    <div class="w-32 h-32 bg-white rounded-full absolute top-12 right-10 opacity-20"></div>
    <div class="w-20 h-20 bg-white rounded-full absolute top-1/4 right-20 opacity-15"></div>
    <div class="w-24 h-24 bg-white rounded-full absolute top-1/2 right-8 opacity-10"></div>
    <div class="w-16 h-16 bg-white rounded-full absolute bottom-1/3 right-16 opacity-20"></div>
    <div class="w-28 h-28 bg-white rounded-full absolute bottom-24 right-6 opacity-15"></div>
    <svg class="w-16 h-16 text-white absolute top-1/3 right-32 opacity-20" fill="currentColor" viewBox="0 0 24 24">
      <path d="M12 2l2.9 6.9L22 9.7l-5 4.9 1.2 7.1L12 18.6l-6.2 3.1L7 14.6 2 9.7l7.1-0.8L12 2z"/>
    </svg>
    <svg class="w-12 h-12 text-white absolute bottom-1/4 right-24 opacity-15" fill="currentColor" viewBox="0 0 24 24">
      <path d="M12 2l2.9 6.9L22 9.7l-5 4.9 1.2 7.1L12 18.6l-6.2 3.1L7 14.6 2 9.7l7.1-0.8L12 2z"/>
    </svg>
  </div>

  <!-- Título principal -->
  <h1 class="text-4xl md:text-5xl font-extrabold text-white text-center mt-12 mb-10 z-10">
    BIBLIOTECA MUNICIPAL
  </h1>

  <!-- Contenedor del formulario de Login -->
<div class="bg-white rounded-xl shadow-2xl w-full max-w-md p-8 mb-12 z-10">
  <h2 class="text-xl font-semibold text-purple-700 mb-6 text-left">Iniciar Sesión</h2>

  <form id="loginForm" action="{{ route('login') }}" method="POST">
    @csrf 
    <!-- Correo -->
    <div>
      <label for="email" class="block text-sm font-medium text-gray-700">Correo</label>
      <input type="email" id="email" name="email" placeholder="ejemplo@correo.com" required
             class="w-full px-4 py-3 border border-purple-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:outline-none">
    </div>

    <!-- Contraseña con toggle -->
    <div>
      <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
      <div class="relative">
        <input type="password" id="password" name="password" placeholder="********" required
               class="w-full px-4 py-3 border border-purple-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:outline-none pr-10">
        <!-- Botón mostrar/ocultar -->
        <button type="button" onclick="togglePassword()" 
                class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500 hover:text-purple-600 focus:outline-none">
          👁️
        </button>
      </div>
    </div>

    <!-- Recordar sesión -->
    <div class="flex items-center justify-between">
      <label class="flex items-center text-sm text-gray-700">
        <input type="checkbox" name="remember" class="mr-2 rounded border-gray-300 text-purple-600 focus:ring-purple-500">
        Recordar sesión
      </label>
      <a href="#" class="text-sm text-purple-600 hover:underline">
        ¿Olvidaste tu contraseña?
      </a>
    </div>

    <!-- Botón entrar -->
    <button type="submit" class="w-full bg-purple-600 text-white py-3 rounded-lg shadow hover:bg-purple-700 transition">
      Entrar
    </button>

    <!-- Registro -->
    <p class="text-center text-sm text-gray-600 mt-4">
      ¿No tienes cuenta?
      <a href="#" class="text-purple-600 font-semibold hover:underline">Regístrate aquí</a>
    </p>
  </form>
</div>

<script>
  function togglePassword() {
    const input = document.getElementById('password');
    input.type = input.type === 'password' ? 'text' : 'password';
  }
</script>

 <!-- Contenedor del formulario de Registro -->
<div class="bg-white rounded-xl shadow-2xl w-full max-w-md p-8 mb-20 z-10">
  <h2 class="text-xl font-semibold text-purple-700 mb-6 text-left">Registro de Nuevo Usuario</h2>

  <form id="registerForm" action="{{ route('register') }}" method="POST">
    @csrf
    <!-- Nombre -->
    <div>
      <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
      <input type="text" id="name" name="name" placeholder="Tu nombre" required
             class="w-full px-4 py-3 border border-purple-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:outline-none">
    </div>

    <!-- Correo electrónico -->
    <div>
      <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
      <input type="email" id="email" name="email" placeholder="ejemplo@correo.com" required
             class="w-full px-4 py-3 border border-purple-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:outline-none">
    </div>

    <!-- Contraseña -->
    <div>
      <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
      <input type="password" id="password" name="password" placeholder="********" required
             class="w-full px-4 py-3 border border-purple-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:outline-none">
    </div>

    <!-- Repetir contraseña -->
    <div>
      <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Repetir contraseña</label>
      <input type="password" id="password_confirmation" name="password_confirmation" placeholder="********" required
             class="w-full px-4 py-3 border border-purple-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:outline-none">
    </div>

    <!-- Términos y condiciones -->
    <div class="flex items-center">
      <input type="checkbox" id="terminos" name="terminos" required
             class="mr-2 rounded border-gray-300 text-purple-600 focus:ring-purple-500">
      <label for="terminos" class="text-sm text-gray-700">
        Acepto los <a href="/terminos" class="text-purple-600 hover:underline">Términos y Condiciones</a>
      </label>
    </div>

    <!-- Botón de registro -->
    <button type="submit" class="w-full bg-purple-600 text-white py-3 rounded-lg shadow hover:bg-purple-700 transition">
      Registrarse
    </button>

    <!-- Aviso de cuenta existente -->
    <p class="text-center text-sm text-gray-600 mt-4">
      ¿Ya tienes cuenta? Inicia sesión aquí.
    </p>
  </form>
</div>

  @endsection