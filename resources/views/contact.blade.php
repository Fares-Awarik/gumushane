@extends('layouts.app')

@section('title', 'İletişim – Gümüşhane Yayla Balı')

@section('content')

<x-navbar />
{{-- ══ PAGE HEADER ══ --}}
<section class="page-header contact-header">
  <h1 class="page-header-title">Bize Ulaşın</h1>
  <p class="page-header-desc">Doğal lezzetlerimiz hakkında sorularınız, siparişleriniz ve toptan alım talepleriniz için bizimle iletişime geçebilirsiniz.</p>
</section>

@if(session('success'))
<div class="alert-success">{{ session('success') }}</div>
@endif

{{-- ══ CONTACT CONTENT ══ --}}
<section class="contact-section">
  <div class="contact-inner">

    {{-- LEFT: Info Cards --}}
    <div class="contact-left">
      <div class="contact-info-card">
        <div class="contact-icon-wrap">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z" stroke="#2C2B29" stroke-width="2" stroke-linejoin="round"/>
            <circle cx="12" cy="9" r="2.5" stroke="#2C2B29" stroke-width="2"/>
          </svg>
        </div>
        <div class="contact-card-body">
          <span class="contact-card-title">Üretim Çiftliği</span>
          <p class="contact-card-text">Şiran Yaylaları, 1750 Rakım<br/>Gümüşhane, Türkiye</p>
        </div>
      </div>

      <div class="contact-info-card">
        <div class="contact-icon-wrap">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" stroke="#2C2B29" stroke-width="2" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="contact-card-body">
          <span class="contact-card-title">Telefon &amp; WhatsApp</span>
          <p class="contact-card-text">+90 555 123 45 67<br/>7/24 açıktır</p>
        </div>
      </div>

      <div class="contact-info-card">
        <div class="contact-icon-wrap">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
            <rect x="2" y="4" width="20" height="16" rx="2" stroke="#2C2B29" stroke-width="2"/>
            <path d="M2 8l10 6 10-6" stroke="#2C2B29" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </div>
        <div class="contact-card-body">
          <span class="contact-card-title">E-Posta Adresi</span>
          <p class="contact-card-text">sahinkaan348@gmail.com</p>
        </div>
      </div>
    </div>

    {{-- RIGHT: Contact Form --}}
    <div class="contact-right">
      <h2 class="form-title">Mesaj Gönderin</h2>

      <form action="{{ route('contact.send') }}" method="POST">
        @csrf
        <div class="form-row">
          <div class="form-group">
            <label class="form-label">Adınız Soyadınız</label>
            <input type="text" name="name" class="form-input" placeholder="Örn: Ahmet Yılmaz" required/>
          </div>
          <div class="form-group">
            <label class="form-label">E-Posta Adresiniz</label>
            <input type="email" name="email" class="form-input" placeholder="ornek@email.com" required/>
          </div>
        </div>

        <div class="form-group full" style="margin-bottom:24px;">
          <label class="form-label">Konu</label>
          <input type="text" name="subject" class="form-input" placeholder="Hangi konuda bilgi almak istersiniz?" required/>
        </div>

        <div class="form-group full">
          <label class="form-label">Mesajınız</label>
          <textarea name="message" class="form-textarea" placeholder="Bize detaylı olarak yazabilirsiniz..." required></textarea>
        </div>

        <button type="submit" class="btn-gonder">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
            <path d="M2 10L18 2L10 18L8 11L2 10Z" stroke="white" stroke-width="1.67" stroke-linejoin="round"/>
          </svg>
          Gönder
        </button>
      </form>
    </div>

  </div>
</section>

<x-footer />

@endsection
