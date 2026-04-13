<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title', 'Gümüşhane Yayla Balı')</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
  @stack('styles')
</head>
<body>

  {{-- NAVBAR --}}
  <nav class="navbar">
    <div class="nav-container">

      <a href="{{ route('home') }}" class="nav-logo">
        <img
          src="https://www.figma.com/api/mcp/asset/d26167cf-e9b1-4c9e-9d6d-6e5c0d08042f"
          alt="Gümüşhane Yayla Balı Logo"
          class="nav-logo-img"
        />
      </a>

      <ul class="nav-links">
        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Anasayfa</a></li>
        <li><a href="{{ route('products') }}" class="{{ request()->routeIs('products') ? 'active' : '' }}">Ürünler</a></li>
        <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">Hakkımızda</a></li>
        <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">İletişim</a></li>
      </ul>

      <div class="nav-actions">
        <a href="https://wa.me/905559952917" class="nav-cta" target="_blank">Sipariş Ver</a>

        <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Menüyü Aç/Kapat" aria-expanded="false">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>

    {{-- MOBILE MENU --}}
    <div class="mobile-menu" id="mobileMenu">
      <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Anasayfa</a>
      <a href="{{ route('products') }}" class="{{ request()->routeIs('products') ? 'active' : '' }}">Ürünler</a>
      <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">Hakkımızda</a>
      <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">İletişim</a>
      <a href="https://wa.me/905559952917" class="mobile-menu-cta" target="_blank">WhatsApp ile Sipariş Ver</a>
    </div>
  </nav>

  {{-- PAGE CONTENT --}}
  <main class="site-main">
    @yield('content')
  </main>

  {{-- WHATSAPP FLOAT --}}
  <a href="https://wa.me/905559952917" class="whatsapp-float" target="_blank" aria-label="WhatsApp">
    <img src="https://www.figma.com/api/mcp/asset/f125e768-05b2-4217-8c36-71082b752e99" alt="WhatsApp" width="32" height="32"/>
  </a>

  {{-- FOOTER --}}
  <footer class="footer">
    <div class="footer-container">
      <div class="footer-col footer-brand-col">
        <h3>Gümüşhane Yayla Balı</h3>
        <p>
          Şiran’ın yüksek rakımlı yaylalarından sofralarınıza ulaşan doğal, katkısız ve güvenilir bal.
        </p>
      </div>

      <div class="footer-col">
        <h4>Sayfalar</h4>
        <ul class="footer-links">
          <li><a href="{{ route('home') }}">Anasayfa</a></li>
          <li><a href="{{ route('products') }}">Ürünler</a></li>
          <li><a href="{{ route('about') }}">Hakkımızda</a></li>
          <li><a href="{{ route('contact') }}">İletişim</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>İletişim</h4>
        <ul class="footer-contact">
          <li><a href="tel:+905559952917">+90 555 995 29 17</a></li>
          <li><a href="mailto:bilgi@gumushanebal.com">bilgi@gumushanebal.com</a></li>
          <li>Gümüşhane, Türkiye</li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Hızlı Sipariş</h4>
        <p>WhatsApp üzerinden hızlıca sipariş verebilir, ürünler hakkında bilgi alabilirsiniz.</p>
        <a href="https://wa.me/905559952917" class="footer-btn" target="_blank">WhatsApp'a Git</a>
      </div>
    </div>

    <div class="footer-bottom">
      <span>© {{ date('Y') }} Gümüşhane Premium Bal. Tüm Hakları Saklıdır.</span>
    </div>
  </footer>

  @stack('scripts')

  <script>
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    if (mobileMenuBtn && mobileMenu) {
      mobileMenuBtn.addEventListener('click', () => {
        mobileMenuBtn.classList.toggle('active');
        mobileMenu.classList.toggle('open');

        const expanded = mobileMenuBtn.classList.contains('active');
        mobileMenuBtn.setAttribute('aria-expanded', expanded ? 'true' : 'false');
      });
    }
  </script>
</body>
</html>