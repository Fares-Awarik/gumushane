@extends('layouts.app')

@section('title', 'Hakkımızda – Gümüşhane Yayla Balı')

@section('content')

{{-- ══ PAGE HEADER ══ --}}
<section class="page-header about-header">
  <h1 class="page-header-title">Hakkımızda</h1>
  <p class="page-header-desc">Doğanın en saf halini, nesillerdir süregelen bir tutkuyla sofralarınıza taşıyoruz.</p>
</section>

{{-- ══ ABOUT CONTENT ══ --}}
<section class="about-content">
  <div class="about-inner">

    {{-- Section 1 --}}
    <div class="about-section">
      <div class="about-img-wrap">
        <img src="{{ asset('images/about/yayla.jpg') }}" alt="Gümüşhane yaylalarında arı kovanları" class="about-img"/>
      </div>
      <div class="about-text">
        <div class="about-category">Bizim Hikayemiz</div>
        <h2 class="about-title">1750 Rakımlı Yaylalardan Gelen Mucize</h2>
        <p class="about-body">
          Gümüşhane Şiran'ın eşsiz doğasında, 1750 rakımlı el değmemiş yaylalarda başlayan serüvenimiz nesillerdir aynı tutkuyla devam ediyor. Kışın zorlu şartlarından çıkan arılarımız için bahar ayları, kovanların temizlik ve bakımıyla geçer. Yaza hazırlanan güçlü kolonilerimiz, o tertemiz dağ havasında, zengin bitki florasından topladıkları nektarlarla şifalı ballarımızı üretirler.
        </p>
        <p class="about-body">
          Bizim için arıcılık sadece bir meslek değil; doğanın ritmine ayak uydurmak, arılarımızla birlikte yaşadığımız bir yaşam biçimidir.
        </p>
      </div>
    </div>

    {{-- Section 2 (reversed) --}}
    <div class="about-section reverse">
      <div class="about-img-wrap">
        <img src="{{ asset('images/about/uretim.jpg') }}" alt="Geleneksel bal üretimi" class="about-img short"/>
      </div>
      <div class="about-text">
        <div class="about-category">Üretim Felsefemiz</div>
        <h2 class="about-title">Geleneksel Yöntemler, Katkısız Lezzet</h2>
        <p class="about-body">
          Doğanın kusursuz dengesine saygı duyarak, arılarımızın yaşam döngüsüne müdahale etmeden üretim yapıyoruz. Karakovan peteklerimizde balmumu tamamen arılarımız tarafından, doğal yollarla örülür.
        </p>
        <p class="about-body">
          Üretimimizin hiçbir aşamasında şeker şurubu, kimyasal koruyucu veya tarım ilacı kullanmıyoruz. Balımızı kovandan çıktığı en saf ve şifalı haliyle, ailenize ve sevdiklerinize güvenle sunabilmeniz için özenle paketliyoruz.
        </p>
      </div>
    </div>

    {{-- Values Grid --}}
    <div class="values-grid">

      <div class="value-item">
        <div class="value-icon-wrap">
          <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
            <path d="M20 6C20 6 8 14 8 24C8 30.627 13.373 36 20 36C26.627 36 32 30.627 32 24C32 14 20 6 20 6Z" stroke="#B86B00" stroke-width="3.33" stroke-linejoin="round"/>
            <path d="M14 26C14 26 15.5 30 20 30C24.5 30 26 26 26 26" stroke="#B86B00" stroke-width="3.33" stroke-linecap="round"/>
          </svg>
        </div>
        <h3 class="value-title">%100 Doğal</h3>
        <p class="value-desc">Ürünlerimiz hiçbir koruyucu veya katkı maddesi içermez. Arıların bize sunduğu bu mucizeyi en saf haliyle koruyoruz.</p>
      </div>

      <div class="value-item">
        <div class="value-icon-wrap">
          <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
            <path d="M20 6L10 11V22C10 28.627 14.477 34.373 20 36C25.523 34.373 30 28.627 30 22V11L20 6Z" stroke="#B86B00" stroke-width="3.33" stroke-linejoin="round"/>
            <path d="M15 21L18 24L25 17" stroke="#B86B00" stroke-width="3.33" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h3 class="value-title">Üstün Kalite</h3>
        <p class="value-desc">Gümüşhane'nin endemik bitki türlerine sahip zengin florasında, uzmanlıkla ve büyük bir özenle hasat edilir.</p>
      </div>

      <div class="value-item">
        <div class="value-icon-wrap">
          <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
            <circle cx="20" cy="20" r="13" stroke="#B86B00" stroke-width="3.33"/>
            <path d="M20 14V20L24 24" stroke="#B86B00" stroke-width="3.33" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h3 class="value-title">Geleneksel</h3>
        <p class="value-desc">Yüzyıllardır süregelen ata yadigarı üretim yöntemleriyle, sürdürülebilir ve doğaya saygılı bir arıcılık yapıyoruz.</p>
      </div>

    </div>

  </div>
</section>

@endsection
