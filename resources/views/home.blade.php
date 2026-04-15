@extends('layouts.app')

@section('title', 'Anasayfa – Gümüşhane Yayla Balı')

@section('content')
<x-navbar />

<x-hero />


{{-- ══ NEDEN BIZ SECTION ══ --}}
<section class="neden" id="neden">

  <div class="neden-header reveal">
    <span class="neden-tag">Neden Biz</span>
    <h2 class="neden-title">Neden Gümüşhane Balı?</h2>
    <p class="neden-desc">
      Şiran'ın 1750 rakımlı yaylalarında, doğaya saygılı üretim anlayışıyla
      çalışıyor; arılarımızın sağlığını, kovanların gücünü ve balın doğallığını her
      şeyin önünde tutuyoruz.
    </p>
  </div>

  <div class="cards-grid reveal-group">

    {{-- Card 1 --}}
    <div class="card reveal">
      <div class="card-icon-bg">
        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" aria-hidden="true">
          <path d="M28 10L10 42H46L28 10Z" stroke="#B86B00" stroke-width="3" stroke-linejoin="round"/>
          <path d="M21 32L28 20L35 32" stroke="#B86B00" stroke-width="2.5" stroke-linejoin="round"/>
        </svg>
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
    <div class="card reveal">
      <div class="card-icon-bg">
        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" aria-hidden="true">
          <path d="M28 10C28 10 14 24 14 35C14 42.732 20.268 48 28 48C35.732 48 42 42.732 42 35C42 24 28 10 28 10Z" stroke="#B86B00" stroke-width="3" stroke-linejoin="round"/>
          <path d="M21 38C21 38 23 42 28 42C33 42 35 38 35 38" stroke="#B86B00" stroke-width="2.5" stroke-linecap="round"/>
        </svg>
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
    <div class="card reveal">
      <div class="card-icon-bg">
        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" aria-hidden="true">
          <path d="M28 12L12 21V35L28 44L44 35V21L28 12Z" stroke="#B86B00" stroke-width="3" stroke-linejoin="round"/>
          <path d="M28 12V44" stroke="#B86B00" stroke-width="2" stroke-linecap="round"/>
          <path d="M12 21L44 35M44 21L12 35" stroke="#B86B00" stroke-width="2" stroke-linecap="round"/>
        </svg>
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
    <div class="card reveal">
      <div class="card-icon-bg">
        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" aria-hidden="true">
          <rect x="10" y="24" width="36" height="22" rx="2" stroke="#B86B00" stroke-width="3"/>
          <path d="M10 32H46" stroke="#B86B00" stroke-width="2.5" stroke-linecap="round"/>
          <path d="M20 16H36L46 24H10L20 16Z" stroke="#B86B00" stroke-width="3" stroke-linejoin="round"/>
          <path d="M28 32V46" stroke="#B86B00" stroke-width="2" stroke-linecap="round"/>
        </svg>
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
    src="{{ asset('images/logo.png') }}"
    alt="Gümüşhane Yayla Balı"
    class="brand-logo-large reveal"
  />
</section>

<x-footer />

@endsection
