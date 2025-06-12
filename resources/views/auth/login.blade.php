@extends('layouts.auth')

@section('content')
<!-- Navigation Buttons -->
<div class="nav-buttons">
    <button class="nav-btn active" onclick="showPage('register')">Registrasi</button>
    <button class="nav-btn" onclick="showPage('login')">Log in</button>
</div>

<!-- Register Page -->
<div id="register-page" class="page active">
    <div class="left-side">
        <div class="header">
            <div class="header-logo">♻</div>
            <span class="header-text">Reuse & share</span>
        </div>

        <div class="main-logo"></div>
        <h1 class="main-title">REUSE & SHARE</h1>
        <p class="main-subtitle">Berbagi Barang, Menyeimbangkan kehidupan.</p>
        <p class="description">
            Bergabunglah dengan komunitas yang peduli lingkungan. 
            Berbagi barang bekas, temukan kebutuhan Anda, dan 
            ciptakan dunia yang lebih berkelanjutan.
        </p>
    </div>

    <div class="right-side">
        <div class="form-container">
            <h2 class="form-title">Registrasi</h2>
            <form method="POST" action="{{ url('/register') }}">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" placeholder="Nama lengkap" required>
                </div>
                <div class="form-group">
                    <input type="text" name="alamat" placeholder="Alamat Lengkap" required>
                </div>
                <div class="form-group">
                    <input type="tel" name="phone" placeholder="No. Telpon/WA" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Alamat Email" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn-primary">Daftar</button>
            </form>

            <div class="form-footer">
                <p>Sudah punya akun? <a href="#" onclick="showPage('login')">Log in</a></p>
            </div>
        </div>
    </div>
</div>

<!-- Login Page -->
<div id="login-page" class="page">
    <div class="left-side">
        <div class="header">
            <div class="header-logo">♻</div>
            <span class="header-text">Reuse & share</span>
        </div>

        <div class="main-logo"></div>
        <h1 class="main-title">REUSE & SHARE</h1>
        <p class="main-subtitle">Berbagi Barang, Menyeimbangkan kehidupan.</p>
        <p class="description">
            Selamat datang kembali! Masuk ke akun Anda dan 
            lanjutkan berbagi dengan komunitas peduli lingkungan.
        </p>
    </div>

    <div class="right-side">
        <div class="form-container">
            <h2 class="form-title">Log in</h2>
            <form method="POST" action="{{ url('/login') }}">
                @csrf
                <div class="form-group">
                    <input type="text" name="login" placeholder="No. Handphone/Username/Email" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn-primary">Log In</button>
            </form>

            <div class="forgot-password">
                <a href="#">Lupa Password</a>
            </div>

            <div class="form-footer">
                <p>Baru di Reuse&Share? <a href="#" onclick="showPage('register')">Daftar</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
