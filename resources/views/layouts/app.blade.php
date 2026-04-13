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



  {{-- PAGE CONTENT --}}
  <main class="site-main">
    @yield('content')
  </main>

  {{-- WHATSAPP FLOAT --}}
  <a href="https://wa.me/905559952917" class="whatsapp-float" target="_blank" aria-label="WhatsApp">
    <img src="https://www.figma.com/api/mcp/asset/f125e768-05b2-4217-8c36-71082b752e99" alt="WhatsApp" width="32" height="32"/>
  </a>



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