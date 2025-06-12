@extends('layouts.main')

@section('content')

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <div>
            <h1>Berbagi Barang Secara Komunitas</h1>
            <div class="hero-tag">masuk</div>
        </div>
        <div class="hero-illustration">
            <div class="people-group">
                <div class="person">
                    <div class="person-avatar">👨‍💼</div>
                    <div style="background: #4a9b8e; width: 60px; height: 40px; border-radius: 5px; margin: 0.5rem 0;">📊</div>
                </div>
                <div class="person" style="position: relative;">
                    <div class="laptop-desk">
                        <div class="laptop"></div>
                    </div>
                    <div class="person-avatar" style="position: absolute; top: -20px; left: 30px; width: 60px; height: 60px;">👩‍💻</div>
                    <div style="position: absolute; top: 50px; right: -30px;">
                        <div class="person-avatar" style="width: 60px; height: 60px;">👋</div>
                    </div>
                </div>
                <div class="person">
                    <div class="person-avatar">👩‍🦱</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Fitur -->
<section class="features" id="jelajahi">
    <div class="container">
        <div class="features-grid">
            <div class="feature-card pulse">
                <div class="feature-icon">⭐</div>
                <h3>Bagikan Barang</h3>
                <p>Unggah barang yang ingin Anda bagikan kepada sesama</p>
            </div>
            <div class="feature-card pulse">
                <div class="feature-icon">📍</div>
                <h3>Jelajahi Komunitas</h3>
                <p>Temukan barang yang di up Oleh anggota komunitas</p>
            </div>
            <div class="feature-card pulse">
                <div class="feature-icon">🔒</div>
                <h3>Lacak Riwayat</h3>
                <p>Pantau riwayat barang pada pemesanan</p>
            </div>
        </div>
    </div>
</section>

<!-- Aktivitas Komunitas -->
<section class="community-section">
    <div class="container">
        <h2 class="section-title">Aktivitas Komunitas</h2>
        <div class="community-activity">
            <div class="activity-illustration">
                <div class="sharing-scene">
                    <div class="person">
                        <div class="person-avatar">👩‍🦱</div>
                    </div>
                    <div class="box animate-bounce"></div>
                    <div class="person">
                        <div class="person-avatar">👦</div>
                    </div>
                </div>
            </div>
            <div class="testimonial">
                <div class="testimonial-header">
                    <div class="testimonial-avatar">A</div>
                    <div class="testimonial-name">Agus</div>
                </div>
                <div class="testimonial-text">
                    "Platform ini sangat membantu saya dalam membeli barang yang yang saya butuhkan tanpa harus membeli barang"
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-section" id="unggah">
    <div class="container">
        <h2>Mulai Berbagi Sekarang!</h2>
        <p>Bergabunglah dengan komunitas yang peduli lingkungan dan saling membantu</p>
        <button class="btn-secondary" onclick="openModal('registerModal')">Daftar Sekarang</button>
    </div>
</section>

@endsection
