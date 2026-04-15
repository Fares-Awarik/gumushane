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
    <img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp" width="32" height="32"/>
  </a>



  @stack('scripts')

  <script>
    /* ── Scroll Reveal ── */
    (function() {
      const observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('revealed');
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.12 });

      document.querySelectorAll('.reveal').forEach(function(el) {
        observer.observe(el);
      });
    })();

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