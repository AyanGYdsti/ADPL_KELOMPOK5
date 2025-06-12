@extends('layouts.pesan-layout')

@section('title', 'Detail Tas Sekolah')

@section('content')
<div class="card">
  <button class="back-button" onclick="goBack()">‹</button>

  <div class="image-slider">
    <div class="slider-container" id="sliderContainer">
      <img src="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=400&h=300&fit=crop" alt="Tas Pink 1" />
      <img src="https://images.unsplash.com/photo-1576995853123-5a10305d93c0?w=400&h=300&fit=crop" alt="Tas Pink 2" />
      <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?w=400&h=300&fit=crop" alt="Tas Pink 3" />
      <img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=400&h=300&fit=crop" alt="Tas Pink 4" />
    </div>

    <button class="slider-nav prev" onclick="changeSlide(-1)">‹</button>
    <button class="slider-nav next" onclick="changeSlide(1)">›</button>

    <div class="slider-dots">
      <div class="dot active" onclick="currentSlide(1)"></div>
      <div class="dot" onclick="currentSlide(2)"></div>
      <div class="dot" onclick="currentSlide(3)"></div>
      <div class="dot" onclick="currentSlide(4)"></div>
    </div>
  </div>

  <div class="content">
    <div class="title">Tas Sekolah</div>
    <div class="price">Gratis</div>

    <div class="section-title">Keterangan</div>
    <p class="description">
      Tas sekolah warna pink tidak ada minus, sudah dicuci bersih, pemakaian tidak cukup sebulan. Muat untuk buku panjang serta laptop, bahan nya sangat berkualitas. Diberikan untuk siapa pun yang mau!
    </p>

    <div class="chat-box">
      <img src="https://img.icons8.com/color/24/whatsapp--v1.png" alt="WhatsApp"/>
      <input type="text" placeholder="Apa ini masih ada?" id="messageInput" />
      <button onclick="sendMessage()">Kirim</button>
    </div>

    <div class="info-section">
      <div class="info-card">
        <div class="section-title">👤 Penjual</div>
        <div class="profile">
          <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?w=100&h=100&fit=crop&crop=face" alt="User Profile">
          <div class="profile-info">
            <strong>Sari Indah</strong>
            Online 2 jam yang lalu
          </div>
        </div>
      </div>

      <div class="info-card location-card">
        <div class="section-title">📍 Lokasi Pengambilan</div>
        <div style="font-size: 14px; line-height: 1.5;">
          <strong>Kendari, Wua-Wua</strong><br/>
          Jln. Mayjen Sutoyo No. 123<br/>
          Dekat Kampus Unhalu
        </div>
      </div>
    </div>

    <button class="order-btn" onclick="orderItem()">Ajukan Pesanan</button>
  </div>
</div>
@endsection
