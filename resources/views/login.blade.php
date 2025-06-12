<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reuse & Share</title>
    <style>
        /* STYLE kamu di sini, saya salin langsung dari HTML-mu, tetap inline */
        /* kamu bisa memindahkannya ke public/css/login.css jika mau */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #4a9b8e 0%, #6bb6a8 100%);
            min-height: 100vh;
            display: flex;
            overflow-x: hidden;
        }

        /* ...potong karena terlalu panjang untuk ruang ini... */
        /* (Kamu bisa paste semua CSS dari file HTML aslinya ke sini) */

    </style>
</head>
<body>
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
                        <input type="tel" name="telpon" placeholder="No. Telpon wa/hp no whatsApp" required>
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

    <script>
        function showPage(pageType) {
            document.querySelectorAll('.page').forEach(page => {
                page.classList.remove('active');
            });
            document.getElementById(pageType + '-page').classList.add('active');

            document.querySelectorAll('.nav-btn').forEach(btn => {
                btn.classList.remove('active');
            });
            const buttons = document.querySelectorAll('.nav-btn');
            buttons.forEach(btn => {
                if ((pageType === 'register' && btn.textContent === 'Registrasi') ||
                    (pageType === 'login' && btn.textContent === 'Log in')) {
                    btn.classList.add('active');
                }
            });
        }
        document.addEventListener('DOMContentLoaded', function() {
            const rightSide = document.querySelector('.right-side');
            rightSide.style.opacity = '0';
            rightSide.style.transform = 'translateX(50px)';
            setTimeout(() => {
                rightSide.style.transition = 'all 0.6s ease';
                rightSide.style.opacity = '1';
                rightSide.style.transform = 'translateX(0)';
            }, 300);
        });
    </script>
</body>
</html>
