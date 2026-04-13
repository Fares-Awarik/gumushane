@extends('layouts.app')

@section('title', 'Anasayfa – Gümüşhane Yayla Balı')

@section('content')
<x-navbar />

<x-hero />


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

<x-footer />

@endsection
