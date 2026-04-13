<style>
/* ══════════════════════════════
   HERO SECTION
   ══════════════════════════════ */
.hero {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 40px;
  min-height: 860px;
  overflow: hidden;
  isolation: isolate;
  padding: calc(var(--navbar-height) + 56px) 64px 80px;
}

.hero-hex {
  position: absolute;
  width: 800px;
  height: 800px;
  pointer-events: none;
}

.hero-hex img {
  width: 100%;
  height: 100%;
}

.hero-hex-1 {
  left: 680px;
  top: 58px;
  z-index: 0;
}

.hero-hex-2 {
  left: 880px;
  top: 70px;
  z-index: 1;
}

.hero-left {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 23px;
  width: 600px;
  max-width: 600px;
  padding-right: 48px;
  position: relative;
  z-index: 2;
  flex-shrink: 0;
}

.hero-badge {
  display: inline-flex;
  align-items: center;
  padding: 8px 16px;
  background: var(--cream-warm);
  border-radius: 12px;
  font-weight: 600;
  font-size: 13px;
  line-height: 20px;
  letter-spacing: 0.65px;
  color: var(--text-mid);
}

.hero-heading h1 {
  width: 100%;
  font-weight: 800;
  font-size: 56px;
  line-height: 1.14;
  letter-spacing: -1.12px;
  color: var(--text-dark);
}

.hero-desc-wrap {
  padding-top: 8px;
  width: 500px;
  max-width: 100%;
}

.hero-desc {
  font-weight: 400;
  font-size: 20px;
  line-height: 32px;
  color: var(--text-light);
}

.hero-btns {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  padding-top: 24px;
  gap: 18px;
  width: 100%;
}

.btn-siparis {
  display: inline-flex;
  justify-content: center;
  align-items: center;
  padding: 18px 40px;
  background: var(--gold);
  border-radius: 8px;
  border: none;
  cursor: pointer;
  font-weight: 700;
  font-size: 16px;
  line-height: 19px;
  letter-spacing: 0.2px;
  color: var(--white);
  text-decoration: none;
  transition: 0.25s ease;
  box-shadow: 0 14px 28px rgba(184, 107, 0, 0.18);
}

.btn-siparis:hover {
  opacity: 0.94;
  transform: translateY(-1px);
  color: var(--white);
}

.btn-video {
  display: flex;
  align-items: center;
  gap: 12px;
  background: none;
  border: none;
  cursor: pointer;
}

.play-circle {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 38px;
  height: 38px;
  background: var(--cream-warm);
  border-radius: 50%;
  flex-shrink: 0;
}

.btn-video-text {
  font-weight: 700;
  font-size: 16px;
  line-height: 19px;
  color: var(--text-dark);
}

.hero-right {
  position: relative;
  z-index: 3;
  flex-shrink: 0;
}

.hero-img-wrap {
  width: 680px;
  max-width: 100%;
  height: 411px;
  box-shadow: 0 24px 48px rgba(0, 0, 0, 0.05);
  border-radius: 12px;
  overflow: hidden;
}

.hero-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* ══════════════════════════════
   HERO — RESPONSIVE
   ══════════════════════════════ */
@media (max-width: 1200px) {
  .hero {
    gap: 28px;
    padding-inline: 32px;
  }

  .hero-left {
    width: 50%;
    max-width: unset;
    padding-right: 12px;
  }

  .hero-right {
    width: 50%;
  }

  .hero-img-wrap {
    width: 100%;
    height: 390px;
  }
}

@media (max-width: 991px) {
  .hero {
    flex-direction: column;
    text-align: center;
    min-height: auto;
    padding: calc(var(--navbar-height) + 34px) 20px 56px;
  }

  .hero-left,
  .hero-right {
    width: 100%;
    max-width: 100%;
    padding-right: 0;
  }

  .hero-left {
    align-items: center;
  }

  .hero-heading h1 {
    font-size: 42px;
  }

  .hero-desc {
    font-size: 18px;
    line-height: 30px;
  }

  .hero-btns {
    justify-content: center;
  }

  .hero-hex {
    opacity: 0.28;
  }

  .hero-hex-1 {
    left: -120px;
    top: 40px;
  }

  .hero-hex-2 {
    right: -150px;
    left: auto;
    top: 140px;
  }
}

@media (max-width: 767px) {
  .hero-heading h1 {
    font-size: 34px;
    line-height: 1.2;
    letter-spacing: -0.5px;
  }

  .hero-desc {
    font-size: 16px;
    line-height: 28px;
  }

  .btn-siparis {
    width: 100%;
  }

  .btn-video {
    width: 100%;
    justify-content: center;
  }
}
</style>

{{-- ══ HERO SECTION ══ --}}
<section class="hero">

  {{-- Hex BG 1 - cream --}}
  <div class="hero-hex hero-hex-1">
    <img src="https://www.figma.com/api/mcp/asset/d06136f5-dea5-4749-aa8e-7356b3fabc7f" alt="" aria-hidden="true"/>
  </div>

  {{-- Hex BG 2 - gold --}}
  <div class="hero-hex hero-hex-2">
    <img src="https://www.figma.com/api/mcp/asset/891d569d-1b97-41cc-be85-7b6179a843f0" alt="" aria-hidden="true"/>
  </div>

  {{-- LEFT --}}
  <div class="hero-left">
    <div class="hero-badge">%100 Doğal İçerik</div>

    <div class="hero-heading">
      <h1>
        Gümüşhane Şiran<br/>
        1750 Rakım<br/>
        Üretilen Doğal Bal
      </h1>
    </div>

    <div class="hero-desc-wrap">
      <p class="hero-desc">
        Arılarımız kıştan çıktı, kovanlarımızın ilkbahar
        temizliği ve bakımını özenle yapıyoruz. Bahara
        hazırlık; yaza temiz, güçlü kovan ve kolonilerle en
        doğal balı sizlere sunmak için çalışıyoruz.
      </p>
    </div>

    <div class="hero-btns">
      <a href="{{ route('products') }}" class="btn-siparis">Sipariş Ver</a>
      <button class="btn-video" onclick="document.getElementById('videoModal').style.display='flex'">
        <span class="play-circle">
          <img src="https://www.figma.com/api/mcp/asset/ec0d474f-3e25-41e0-a9f1-95cdd7eb8df2" alt="" width="16" height="16"/>
        </span>
        <span class="btn-video-text">Hikayemizi İzle</span>
      </button>
    </div>
  </div>

  {{-- RIGHT - Farm Photo --}}
  <div class="hero-right">
    <div class="hero-img-wrap">
      <img
        src="{{ asset('images/8.jpeg') }}"
        alt="Gümüşhane arı çiftliği"
        class="hero-img"
      />
    </div>
  </div>

</section>
