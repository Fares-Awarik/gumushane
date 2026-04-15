<style>
/* ══════════════════════════════
   NAVBAR
   ══════════════════════════════ */
.navbar {
  position: fixed;
  inset: 0 0 auto 0;
  z-index: 1000;
  background: rgba(255, 248, 242, 0.92);
  backdrop-filter: blur(14px);
  border-bottom: 1px solid var(--border);
}

.nav-container {
  min-height: var(--navbar-height);
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 24px;
}

.nav-logo {
  display: flex;
  align-items: center;
  text-decoration: none;
  flex-shrink: 0;
}

.nav-logo-img {
  width: auto;
  height: 56px;
  object-fit: contain;
}

.nav-links {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 32px;
  list-style: none;
  flex: 1;
}

.nav-links a {
  position: relative;
  text-decoration: none;
  font-size: 15px;
  line-height: 22px;
  color: var(--text-dark);
  font-weight: 500;
  opacity: 0.84;
  transition: 0.25s ease;
}

.nav-links a:hover,
.nav-links a.active {
  opacity: 1;
  color: var(--gold);
}

.nav-links a.active::after,
.nav-links a:hover::after {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  bottom: -8px;
  height: 2px;
  background: var(--gold);
  border-radius: 999px;
}

.nav-actions {
  display: flex;
  align-items: center;
  gap: 14px;
  flex-shrink: 0;
}

.nav-social {
  display: flex;
  align-items: center;
  gap: 6px;
}

.nav-social-link {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 36px;
  height: 36px;
  border-radius: 10px;
  border: 1px solid var(--border);
  background: var(--white);
  color: var(--text-dark);
  text-decoration: none;
  transition: 0.2s ease;
  box-shadow: var(--shadow-sm);
}

.nav-social-link:hover {
  border-color: var(--gold);
  color: var(--gold);
  transform: translateY(-1px);
}

.nav-cta {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  min-height: 44px;
  padding: 0 18px;
  background: var(--gold);
  color: var(--white);
  text-decoration: none;
  border-radius: 10px;
  font-size: 14px;
  font-weight: 700;
  transition: 0.25s ease;
  box-shadow: 0 10px 20px rgba(184, 107, 0, 0.18);
}

.nav-cta:hover {
  background: var(--gold-dark);
  transform: translateY(-1px);
}

.mobile-menu-btn {
  display: none;
  width: 46px;
  height: 46px;
  border: 1px solid var(--border);
  background: var(--white);
  border-radius: 12px;
  cursor: pointer;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  gap: 5px;
  box-shadow: var(--shadow-sm);
}

.mobile-menu-btn span {
  width: 20px;
  height: 2px;
  border-radius: 999px;
  background: var(--text-dark);
  transition: 0.25s ease;
}

.mobile-menu-btn.active span:nth-child(1) {
  transform: translateY(7px) rotate(45deg);
}

.mobile-menu-btn.active span:nth-child(2) {
  opacity: 0;
}

.mobile-menu-btn.active span:nth-child(3) {
  transform: translateY(-7px) rotate(-45deg);
}

.mobile-menu {
  display: none;
}

/* ══════════════════════════════
   NAVBAR — RESPONSIVE
   ══════════════════════════════ */
@media (max-width: 991px) {
  .nav-links,
  .nav-cta,
  .nav-social {
    display: none;
  }

  .mobile-menu-btn {
    display: inline-flex;
  }

  .mobile-menu {
    display: block;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease, padding 0.3s ease;
    background: rgba(255, 248, 242, 0.98);
    border-top: 1px solid rgba(0, 0, 0, 0.04);
  }

  .mobile-menu.open {
    max-height: 420px;
    padding: 8px 16px 18px;
  }

  .mobile-menu a {
    display: block;
    width: min(100%, var(--container));
    margin: 0 auto;
    text-decoration: none;
    color: var(--text-dark);
    font-size: 15px;
    font-weight: 600;
    padding: 14px 4px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
  }

  .mobile-menu a.active {
    color: var(--gold);
  }

  .mobile-menu-cta {
    margin-top: 8px !important;
    border-bottom: none !important;
    background: var(--gold);
    color: var(--white) !important;
    border-radius: 10px;
    padding-inline: 14px !important;
  }

  .mobile-menu-social {
    display: flex;
    gap: 10px;
    margin-top: 14px;
    padding-top: 14px;
    border-top: 1px solid rgba(0, 0, 0, 0.05);
  }

  .mobile-menu-social .nav-social-link {
    width: 42px;
    height: 42px;
    border-radius: 12px;
  }
}

@media (max-width: 767px) {
  .nav-container {
    min-height: 74px;
  }

  .nav-logo-img {
    height: 48px;
  }
}
</style>

{{-- NAVBAR --}}
<nav class="navbar">
  <div class="nav-container">

    <a href="{{ route('home') }}" class="nav-logo">
      <img
        src="{{ asset('images/logo.jpeg') }}"
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

      {{-- Social Icons --}}
      <div class="nav-social">
        <a href="https://www.instagram.com/balcitolgasahin?igsh=MWJ4bTdwbjViZjZmbA==" class="nav-social-link" target="_blank" aria-label="Instagram">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
            <circle cx="12" cy="12" r="4"/>
            <circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/>
          </svg>
        </a>
        <a href="mailto:sahinkaan348@gmail.com" class="nav-social-link" aria-label="E-posta">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect x="2" y="4" width="20" height="16" rx="2"/>
            <polyline points="2,4 12,13 22,4"/>
          </svg>
        </a>
      </div>

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

    <div class="mobile-menu-social">
      <a href="https://www.instagram.com/balcitolgasahin?igsh=MWJ4bTdwbjViZjZmbA==" class="nav-social-link" target="_blank" aria-label="Instagram">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
          <circle cx="12" cy="12" r="4"/>
          <circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/>
        </svg>
      </a>
      <a href="mailto:sahinkaan348@gmail.com" class="nav-social-link" aria-label="E-posta">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="2" y="4" width="20" height="16" rx="2"/>
          <polyline points="2,4 12,13 22,4"/>
        </svg>
      </a>
    </div>
  </div>
</nav>
