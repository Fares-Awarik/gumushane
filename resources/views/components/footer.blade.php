<style>
/* ══════════════════════════════
   FOOTER
   ══════════════════════════════ */
.footer {
  margin-top: 80px;
  background:
    linear-gradient(180deg, #1d1a17 0%, #141210 100%);
  color: rgba(255, 255, 255, 0.78);
  overflow: hidden;
}

.footer-container {
  display: grid;
  grid-template-columns: 1.3fr 1fr 1fr 1fr;
  gap: 36px;
  padding: 64px 0 34px;
}

.footer-col h3 {
  color: var(--white);
  font-size: 24px;
  font-weight: 800;
  margin-bottom: 16px;
}

.footer-col h4 {
  color: var(--white);
  font-size: 16px;
  font-weight: 800;
  margin-bottom: 16px;
}

.footer-col p,
.footer-col li,
.footer-col a {
  font-size: 15px;
  line-height: 28px;
  color: rgba(255, 255, 255, 0.72);
  text-decoration: none;
}

.footer-col a:hover {
  color: #f2c16b;
}

.footer-brand-col p {
  max-width: 320px;
}

.footer-links,
.footer-contact {
  list-style: none;
}

.footer-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  margin-top: 12px;
  min-height: 44px;
  padding: 0 16px;
  background: var(--gold);
  color: var(--white) !important;
  border-radius: 10px;
  font-size: 14px;
  font-weight: 700;
  transition: 0.25s ease;
}

.footer-btn:hover {
  background: var(--gold-dark);
  color: var(--white) !important;
}

.footer-bottom {
  border-top: 1px solid rgba(255, 255, 255, 0.08);
  padding: 18px 0 22px;
  text-align: center;
  font-size: 14px;
  color: rgba(255, 255, 255, 0.62);
}

/* ══════════════════════════════
   FOOTER — RESPONSIVE
   ══════════════════════════════ */
@media (max-width: 1200px) {
  .footer-container {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 991px) {
  .footer-container {
    grid-template-columns: 1fr 1fr;
    gap: 28px;
  }
}

@media (max-width: 767px) {
  .footer {
    margin-top: 60px;
  }

  .footer-container {
    grid-template-columns: 1fr;
    padding: 48px 0 24px;
  }

  .footer-col h3 {
    font-size: 22px;
  }

  .footer-bottom {
    padding: 16px 10px 20px;
    font-size: 13px;
  }
}
</style>

{{-- FOOTER --}}
<footer class="footer">
  <div class="footer-container">
    <div class="footer-col footer-brand-col">
      <h3>Gümüşhane Yayla Balı</h3>
      <p>
        Şiran'ın yüksek rakımlı yaylalarından sofralarınıza ulaşan doğal, katkısız ve güvenilir bal.
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
