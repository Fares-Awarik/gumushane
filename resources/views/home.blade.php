@extends('layouts.app')

@section('title', 'Anasayfa – Gümüşhane Yayla Balı')

@section('content')

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
        src="https://www.figma.com/api/mcp/asset/e828450a-a1a2-459c-8d8e-4143f7247fc2"
        alt="Gümüşhane arı çiftliği"
        class="hero-img"
      />
    </div>
  </div>

</section>

{{-- ══ NEDEN BIZ SECTION ══ --}}
<section class="neden" id="neden">

  <div class="neden-header">
    <span class="neden-tag">Neden Biz</span>
    <h2 class="neden-title">Neden Gümüşhane Balı?</h2>
    <p class="neden-desc">
      Şiran'ın 1750 rakımlı yaylalarında, doğaya saygılı üretim anlayışıyla
      çalışıyor; arılarımızın sağlığını, kovanların gücünü ve balın doğallığını her
      şeyin önünde tutuyoruz.
    </p>
  </div>

  <div class="cards-grid">

    {{-- Card 1 --}}
    <div class="card">
      <div class="card-icon-bg">
        <img src="https://www.figma.com/api/mcp/asset/fa3eec0a-ffc8-4b96-9cd5-575d5f16734d" alt="" width="56" height="56"/>
      </div>
      <div class="card-body">
        <span class="card-tag">Yüksek Rakım</span>
        <h3 class="card-title">1750 Rakımda Doğal Üretim</h3>
        <div class="card-text-wrap">
          <p class="card-text">Balımız, Gümüşhane Şiran'ın temiz havası ve zengin bitki örtüsüyle beslenen yaylalarında üretilir. Bu doğal ortam, aroması güçlü ve karakteri belirgin bir bal ortaya çıkarır.</p>
        </div>
      </div>
    </div>

    {{-- Card 2 --}}
    <div class="card">
      <div class="card-icon-bg">
        <img src="https://www.figma.com/api/mcp/asset/f2bf18cf-ebff-4684-9253-ce31f150e831" alt="" width="56" height="56"/>
      </div>
      <div class="card-body">
        <span class="card-tag">Saflık</span>
        <h3 class="card-title">Katkısız ve Doğal İçerik</h3>
        <div class="card-text-wrap">
          <p class="card-text">Ürünlerimizde katkı, yapay aroma veya gereksiz işlem yoktur. Sofranıza ulaşan her kavanozda doğallığı ve gerçek bal lezzetini korumaya özen gösteriyoruz.</p>
        </div>
      </div>
    </div>

    {{-- Card 3 --}}
    <div class="card">
      <div class="card-icon-bg">
        <img src="https://www.figma.com/api/mcp/asset/ddc10abf-a94e-4865-a23e-be1ed68f478e" alt="" width="56" height="56"/>
      </div>
      <div class="card-body">
        <span class="card-tag">Arı Sağlığı</span>
        <h3 class="card-title">Güçlü Kovan, Güçlü Koloni</h3>
        <div class="card-text-wrap">
          <p class="card-text">Arılarımız kış sonrası özenli bakım sürecinden geçer. İlkbahar hazırlıklarımızla temiz, dengeli ve güçlü koloniler oluşturarak sezon boyunca kaliteli üretim hedefleriz.</p>
        </div>
      </div>
    </div>

    {{-- Card 4 --}}
    <div class="card">
      <div class="card-icon-bg">
        <img src="https://www.figma.com/api/mcp/asset/a1141ee6-b69d-4668-97c8-2959e85f6275" alt="" width="56" height="56"/>
      </div>
      <div class="card-body">
        <span class="card-tag">Güvenli Teslimat</span>
        <h3 class="card-title">Özenli Paketleme ve Hızlı Gönderim</h3>
        <div class="card-text-wrap">
          <p class="card-text">Siparişlerinizi estetik ve koruyucu paketleme ile hazırlıyoruz. Böylece ürünlerimiz hem güvenle hem de premium bir sunumla kapınıza kadar ulaşıyor.</p>
        </div>
      </div>
    </div>

  </div>
</section>

{{-- ══ BRAND LOGO SECTION ══ --}}
<section class="brand-section">
  <img
    src="https://www.figma.com/api/mcp/asset/d26167cf-e9b1-4c9e-9d6d-6e5c0d08042f"
    alt="Gümüşhane Yayla Balı"
    class="brand-logo-large"
  />
</section>

@endsection
