@extends('layouts.app')

@section('title', 'Ürünler – Gümüşhane Yayla Balı')

@section('content')

{{-- ══ PAGE HEADER ══ --}}
<section class="page-header">
  <div class="page-header-content">
    <h1 class="page-header-title">Tüm Ürünlerimiz</h1>
    <p class="page-header-desc">
      Gümüşhane'nin eşsiz doğasından sofralarınıza uzanan saf ve gurme lezzetlerimizi keşfedin.
    </p>
  </div>
</section>

{{-- ══ PRODUCTS LIST ══ --}}
<section class="products-section">
  <div class="products-list">

    {{-- Product 1 --}}
    <div class="product-card">
      <div class="product-img-wrap">
        <img src="{{ asset('images/products/karakovan.jpg') }}" alt="Karakovan Petek Balı" class="product-img"/>
        <span class="product-badge">Kargo Bedava</span>
      </div>
      <div class="product-info">
        <div class="product-category">Organik Petek Balı</div>
        <h2 class="product-title">Karakovan Petek Balı</h2>
        <div class="product-desc-wrap">
          <p class="product-desc">
            Gümüşhane'nin 1750 rakımlı yaylalarında, arıların kendi ürettikleri balmumu ile tamamen doğal yollarla ördükleri, insan eli değmeden hazırlanan eşsiz karakovan petek balı. Yoğun aroması ve yüksek besin değeriyle en özel gurme lezzetimiz.
          </p>
        </div>
        <div class="product-footer">
          <div class="product-price">
            <span class="price-amount">1850₺</span>
            <span class="price-unit">/ kg</span>
          </div>
          <button class="btn-sepet">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
              <path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z" stroke="white" stroke-width="1.67" stroke-linejoin="round"/>
              <line x1="3" y1="6" x2="21" y2="6" stroke="white" stroke-width="1.67"/>
              <path d="M16 10a4 4 0 01-8 0" stroke="white" stroke-width="1.67"/>
            </svg>
            Sepete Ekle
          </button>
        </div>
      </div>
    </div>

    {{-- Product 2 --}}
    <div class="product-card">
      <div class="product-img-wrap">
        <img src="{{ asset('images/products/petek-cicek.jpg') }}" alt="Petek Çiçek Balı" class="product-img"/>
        <span class="product-badge">Kargo Bedava</span>
      </div>
      <div class="product-info">
        <div class="product-category">Klasik Petek Balı</div>
        <h2 class="product-title">Petek Çiçek Balı</h2>
        <div class="product-desc-wrap">
          <p class="product-desc">
            Yüksek rakımlı yaylalarımızın zengin bitki florasından elde edilen, ahşap çerçevelerde özenle üretilen klasik petek balımız. Kahvaltılarınızın vazgeçilmez doğal tatlandırıcısı ve sofralarınızın baş tacı.
          </p>
        </div>
        <div class="product-footer">
          <div class="product-price">
            <span class="price-amount">1500₺</span>
            <span class="price-unit">/ kg</span>
          </div>
          <button class="btn-sepet">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
              <path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z" stroke="white" stroke-width="1.67" stroke-linejoin="round"/>
              <line x1="3" y1="6" x2="21" y2="6" stroke="white" stroke-width="1.67"/>
              <path d="M16 10a4 4 0 01-8 0" stroke="white" stroke-width="1.67"/>
            </svg>
            Sepete Ekle
          </button>
        </div>
      </div>
    </div>

    {{-- Product 3 --}}
    <div class="product-card">
      <div class="product-img-wrap">
        <img src="{{ asset('images/products/suzme.jpg') }}" alt="Süzme Bal" class="product-img"/>
        <span class="product-badge">Kargo Bedava</span>
      </div>
      <div class="product-info">
        <div class="product-category">Sıvı Bal</div>
        <h2 class="product-title">Süzme Bal</h2>
        <div class="product-desc-wrap">
          <p class="product-desc">
            Peteklerinden özenle süzülerek elde edilen, altın sarısı rengi ve ipeksi kıvamıyla öne çıkan süzme çiçek balımız. Doğal ve saf yapısıyla hem kahvaltılarda hem de en özel tariflerinizde güvenle tüketebilirsiniz.
          </p>
        </div>
        <div class="product-footer">
          <div class="product-price">
            <span class="price-amount">1550₺</span>
            <span class="price-unit">/ kg</span>
          </div>
          <button class="btn-sepet">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
              <path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z" stroke="white" stroke-width="1.67" stroke-linejoin="round"/>
              <line x1="3" y1="6" x2="21" y2="6" stroke="white" stroke-width="1.67"/>
              <path d="M16 10a4 4 0 01-8 0" stroke="white" stroke-width="1.67"/>
            </svg>
            Sepete Ekle
          </button>
        </div>
      </div>
    </div>

    {{-- Product 4 --}}
    <div class="product-card">
      <div class="product-img-wrap">
        <img src="{{ asset('images/products/propolis.jpg') }}" alt="Ham Propolis" class="product-img"/>
        <span class="product-badge">Kargo Bedava</span>
      </div>
      <div class="product-info">
        <div class="product-category">Sağlık &amp; Takviye</div>
        <h2 class="product-title">
          Ham Propolis
          <span class="product-title-sub">(100g)</span>
        </h2>
        <div class="product-desc-wrap">
          <p class="product-desc">
            Arıların kovanlarını dış etkenlerden korumak için ürettikleri, antioksidan bakımından zengin doğal bir mucize. Bağışıklık sistemini destekleyici özelliğiyle bilinen saf ham propolis ekstraktı.
          </p>
        </div>
        <div class="product-footer">
          <div class="product-price">
            <span class="price-amount">850₺</span>
          </div>
          <button class="btn-sepet">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
              <path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z" stroke="white" stroke-width="1.67" stroke-linejoin="round"/>
              <line x1="3" y1="6" x2="21" y2="6" stroke="white" stroke-width="1.67"/>
              <path d="M16 10a4 4 0 01-8 0" stroke="white" stroke-width="1.67"/>
            </svg>
            Sepete Ekle
          </button>
        </div>
      </div>
    </div>

  </div>
</section>

@endsection
