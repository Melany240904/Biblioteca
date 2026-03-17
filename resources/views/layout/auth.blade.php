<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biblioteca Municipal - Login y Registro</title>

  <!-- Tailwind desde CDN -->
  <script src="https://cdn.tailwindcss.com"></script>


</head>
<body class="bg-purple-500 min-h-screen flex flex-col items-center justify-start font-sans relative overflow-x-hidden">

  @yield('content')

  @include('partials.auth.footer')

</body>
</html>
