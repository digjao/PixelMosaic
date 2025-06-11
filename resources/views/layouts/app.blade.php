<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title','PixelMosaic')</title>

  {{-- Vite injeta aqui seu CSS compilado de resources/sass/app.scss --}}
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
  <header class="site-header">
    <nav class="navbar container">
      <a href="{{ url('/') }}" class="navbar__logo">PixelMosaic</a>
      <div class="navbar__links">
        <a href="{{ url('/galeria') }}">Galeria</a>
        <a href="{{ url('/') }}">Voltar</a>
      </div>
    </nav>
  </header>

  <main class="container">
    @yield('content')
  </main>
  …
</body>

</html> 
