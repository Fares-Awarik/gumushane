@extends('layouts.app')

@section('title', 'Ürünler – Gümüşhane Yayla Balı')

@section('content')
<x-navbar />

{{-- ══ PAGE HEADER ══ --}}
<section class="page-header">
  <div class="page-header-content reveal">
    <h1 class="page-header-title">Tüm Ürünlerimiz</h1>
    <p class="page-header-desc">
      Gümüşhane'nin eşsiz doğasından sofralarınıza uzanan saf ve gurme lezzetlerimizi keşfedin.
    </p>
  </div>
</section>

{{-- ══ PRODUCTS LIST ══ --}}
<section class="products-section">
  <div class="products-list reveal-group">

    {{-- Product 1 --}}
    <div class="product-card reveal">
      <div class="product-img-wrap">
        <img src="{{ asset('images/1.jpeg') }}" alt="Karakovan Petek Balı" class="product-img"/>
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
            <span class="price-amount">2500₺</span>
            <span class="price-unit">/ kg</span>
          </div>
        </div>
      </div>
    </div>

    {{-- Product 2 --}}
    <div class="product-card reveal">
      <div class="product-img-wrap">
        <img src="{{ asset('images/2.jpeg') }}" alt="Petek Çiçek Balı" class="product-img"/>
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
        </div>
      </div>
    </div>

    {{-- Product 3 --}}
    <div class="product-card reveal">
      <div class="product-img-wrap">
        <img src="{{ asset('images/4.jpeg') }}" alt="Süzme Bal" class="product-img"/>
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
        </div>
      </div>
    </div>

    {{-- Product 4 --}}
    <div class="product-card reveal">
      <div class="product-img-wrap">
        <img src="{{ asset('images/pro.jpeg') }}" alt="Ham Propolis" class="product-img"/>
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
            Propolis, arıların bitki tomurcuk ve reçinelerinden toplayıp işleyerek kovanı mikroplardan korumak ve yalıtım sağlamak amacıyla ürettiği, antibakteriyel, antiviral ve antioksidan özelliklere sahip doğal, reçinemsi bir arı ürünüdür. Bağışıklığı güçlendirir, üst solunum yolu enfeksiyonlarına, yara iyileşmesine ve ağız sağlığına iyi gelir
          </p>
        </div>
        <div class="product-footer">
          <div class="product-price">
            <span class="price-amount">850₺</span>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<x-footer />

@endsection
