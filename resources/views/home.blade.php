@extends('layouts.jelajah')

@section('title', 'Home')

@section('content')
    <header class="header">
        <div class="logo">Reuse & share</div>
        <div class="toggle-switch" onclick="toggleTheme()"></div>
    </header>

    <section class="hero-section">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Berbagi Barang<br>Secara Komunitas</h1>
                <div class="hero-tag">Mari berbagi bersama</div>
            </div>
            <div class="hero-illustration">
                <div class="person-char person1"></div>
                <div class="person-char person2"></div>
                <div class="person-char person3"></div>
            </div>
        </div>
    </section>

    <section class="search-section">
        <div class="search-bar">
            <input type="text" class="search-input" placeholder="Cari barang yang Anda butuhkan...">
            <button class="search-btn">🔍</button>
        </div>
        <div class="filter-pills">
            <div class="filter-pill active" data-category="Semua">Semua</div>
            <div class="filter-pill" data-category="Tas">Tas</div>
            <div class="filter-pill" data-category="Elektronik">Elektronik</div>
            <div class="filter-pill" data-category="Pakaian">Pakaian</div>
            <div class="filter-pill" data-category="Furniture">Furniture</div>
            <div class="filter-pill" data-category="Buku">Buku</div>
            <div class="filter-pill" data-category="Mainan">Mainan</div>
            <div class="filter-pill" data-category="Olahraga">Olahraga</div>
            <div class="filter-pill" data-category="Kendaraan">Kendaraan</div>
            <div class="filter-pill" data-category="Lainnya">Lainnya</div>
        </div>

    </section>

    <div class="main-content">
        <div class="products-grid" id="productsGrid">
            <!-- Produk akan dimuat via JS -->
        </div>

        <div class="sidebar">
            <h3 style="margin-bottom: 1rem; color: #2c3e50;">📍 Lokasi</h3>
            <div class="map-container">
                <div class="map-pin pin1"></div>
                <div class="map-pin pin2"></div>
                <div class="map-pin pin3"></div>
                <div class="map-pin pin4"></div>
            </div>
            <div class="location-list">
                <div class="location-item">
                    <div class="location-dot dot-blue"></div>
                    <span>Jakarta Selatan</span>
                </div>
                <div class="location-item">
                    <div class="location-dot dot-pink"></div>
                    <span>Bandung</span>
                </div>
                <div class="location-item">
                    <div class="location-dot dot-green"></div>
                    <span>Surabaya</span>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
