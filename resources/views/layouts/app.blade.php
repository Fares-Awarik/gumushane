<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title', 'Gümüşhane Yayla Balı')</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
  @stack('styles')
</head>
<body>

  {{-- NAVBAR --}}
  <nav class="navbar">
    <a href="{{ route('home') }}" class="nav-logo">
      <img src="https://www.figma.com/api/mcp/asset/d26167cf-e9b1-4c9e-9d6d-6e5c0d08042f" alt="Gümüşhane Yayla Balı Logo" class="nav-logo-img"/>
    </a>

    <ul class="nav-links">
      <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Anasayfa</a></li>
      <li><a href="{{ route('products') }}" class="{{ request()->routeIs('products') ? 'active' : '' }}">Ürünler</a></li>
      <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">Hakkımızda</a></li>
      <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">İletişim</a></li>
    </ul>
  </nav>

  {{-- PAGE CONTENT --}}
  @yield('content')

  {{-- WHATSAPP FLOAT --}}
  <a href="https://wa.me/905559952917" class="whatsapp-float" target="_blank" aria-label="WhatsApp">
    <img src="https://www.figma.com/api/mcp/asset/f125e768-05b2-4217-8c36-71082b752e99" alt="WhatsApp" width="32" height="32"/>
  </a>

  {{-- FOOTER --}}
  <footer class="footer">
    <span class="footer-brand">GÜMÜŞHANE</span>
    <span class="footer-copy">© 2024 Gümüşhane Premium Bal. Tüm Hakları Saklıdır.</span>
  </footer>

  @stack('scripts')
</body>
</html>
