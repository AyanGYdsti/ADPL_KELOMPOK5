
@extends('layouts.orderlayout')


@section('content')
<link rel="stylesheet" href="{{ asset('css/pesananku.css') }}">

<div class="container">
    <!-- Header -->
    <div class="header">
        <div class="header-top">
            <div class="logo">
                <div class="recycle-icon">♻</div>
                Reuse & share
            </div>
            <div class="user-avatar">👤</div>
        </div>

        <div class="header-content">
            <div class="header-text">
                <h1>Pesanan ku</h1>
            </div>
        </div>

        <div class="nav-tabs">
            <button class="nav-tab active" onclick="switchTab('proses')">Proses</button>
            <button class="nav-tab" onclick="switchTab('riwayat')">Riwayat</button>
        </div>
    </div>

    <!-- Content -->
    <div class="content">
        <!-- Tempel isi dari <div class="content">...</div> di sini -->
        {!! file_get_contents(public_path('html_fragments/halaman_pesananku_content.html')) !!}
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="footer-logo">
            <div class="recycle-icon">♻</div>
            <div class="footer-text">
                <h2>REUSE & SHARE</h2>
                <p>Berbagi Barang, Menyeimbangkan kehidupan.</p>
            </div>
        </div>
        <div class="footer-description">
            <p>Bergabunglah dengan komunitas yang peduli lingkungan. Berbagi barang bekas, temukan kebutuhan Anda, dan ciptakan dunia yang lebih berkelanjutan.</p>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal" id="detailModal">
    <div class="modal-content">
        <button class="close-modal" onclick="closeModal()">&times;</button>
        <h3 id="modalTitle">Detail Barang</h3>
        <p id="modalDescription">Informasi detail tentang barang yang dipilih.</p>
        <button class="btn btn-primary" onclick="closeModal()">Tutup</button>
    </div>
</div>

<script src="{{ asset('js/pesananku.js') }}"></script>
@endsection
