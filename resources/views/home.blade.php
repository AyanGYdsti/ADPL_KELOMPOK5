@extends('layouts.jelajah')

@section('title', 'Home')

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reuse & Share - Berbagi Barang Secara Komunitas</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: #f8f9fa;
            color: #333;
        }

        .header {
            background: white;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #10b981;
            font-weight: bold;
            font-size: 1.2rem;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .user-avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: #10b981;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }

        .hero {
            background: linear-gradient(135deg, #10b981, #059669);
            padding: 3rem 2rem;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 2rem;
            align-items: center;
        }

        .hero-text h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .hero-text p {
            opacity: 0.9;
            margin-bottom: 1.5rem;
        }

        .search-container {
            position: relative;
            max-width: 400px;
            width: 100%;
        }

        .search-input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            outline: none;
        }

        .search-btn {
            position: absolute;
            right: 8px;
            top: 50%;
            transform: translateY(-50%);
            background: #10b981;
            border: none;
            padding: 0.5rem;
            border-radius: 6px;
            color: white;
            cursor: pointer;
        }

        .hero-illustration {
            display: flex;
            gap: 1rem;
        }

        .person {
            width: 60px;
            height: 80px;
            background: rgba(255,255,255,0.2);
            border-radius: 30px 30px 10px 10px;
            position: relative;
        }

        .person::before {
            content: '';
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            width: 20px;
            height: 20px;
            background: rgba(255,255,255,0.8);
            border-radius: 50%;
        }

        .main-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .filters {
            margin-bottom: 2rem;
        }

        .filter-title {
            font-weight: bold;
            margin-bottom: 1rem;
            color: #374151;
        }

        .category-filters {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .category-btn {
            padding: 0.5rem 1rem;
            border: 1px solid #d1d5db;
            border-radius: 20px;
            background: white;
            cursor: pointer;
            transition: all 0.2s;
            font-size: 0.9rem;
        }

        .category-btn:hover, .category-btn.active {
            background: #10b981;
            color: white;
            border-color: #10b981;
        }

        .sort-filters {
            display: flex;
            gap: 0.5rem;
        }

        .sort-btn {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            border: 1px solid #d1d5db;
            background: white;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s;
        }

        .sort-btn:hover, .sort-btn.active {
            background: #374151;
            color: white;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 1.5rem;
        }

        .product-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            transition: transform 0.2s, box-shadow 0.2s;
            cursor: pointer;
        }

        .product-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 16px rgba(0,0,0,0.15);
        }

        .product-image {
            width: 100%;
            height: 200px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            border-radius: 8px 8px 0 0;
        }

        .product-image.placeholder {
            background: linear-gradient(45deg, #f3f4f6, #e5e7eb);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: #9ca3af;
        }

        .product-info {
            padding: 1rem;
        }

        .product-title {
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #374151;
        }

        .product-location {
            font-size: 0.85rem;
            color: #6b7280;
            margin-bottom: 0.5rem;
        }

        .product-condition {
            display: inline-block;
            padding: 0.25rem 0.5rem;
            background: #dcfce7;
            color: #16a34a;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: 500;
            margin-bottom: 0.75rem;
        }

        .product-message {
            font-size: 0.85rem;
            color: #6b7280;
            margin-bottom: 0.75rem;
            line-height: 1.4;
        }

        .order-btn {
            width: 100%;
            padding: 0.75rem;
            background: #10b981;
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
            font-size: 0.9rem;
        }

        .order-btn:hover {
            background: #059669;
        }

        .no-products {
            text-align: center;
            padding: 3rem;
            color: #6b7280;
            grid-column: 1 / -1;
        }

        @media (max-width: 768px) {
            .hero-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .hero-text h1 {
                font-size: 2rem;
            }

            .category-filters {
                justify-content: center;
            }

            .products-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }
        }
    </style>
</head>
<body>
    <section class="hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Berbagi Barang<br>Secara Komunitas</h1>
                <p>Mari berbagi bersama</p>
                <div class="search-container">
                    <input type="text" class="search-input" placeholder="Cari barang yang Anda butuhkan..." id="searchInput">
                    <button class="search-btn" onclick="searchProducts()">🔍</button>
                </div>
            </div>
            <div class="hero-illustration">
                <div class="person" style="background: rgba(255,182,193,0.3);"></div>
                <div class="person" style="background: rgba(135,206,235,0.3);"></div>
                <div class="person" style="background: rgba(255,218,185,0.3);"></div>
            </div>
        </div>
    </section>

    <main class="main-content">
        <div class="filters">
            <div class="filter-title">Filter</div>
            <div class="category-filters">
                <button class="category-btn active" onclick="filterCategory('semua')">Semua</button>
                <button class="category-btn" onclick="filterCategory('tas')">Tas</button>
                <button class="category-btn" onclick="filterCategory('elektronik')">Elektronik</button>
                <button class="category-btn" onclick="filterCategory('pakaian')">Pakaian</button>
                <button class="category-btn" onclick="filterCategory('furniture')">Furniture</button>
                <button class="category-btn" onclick="filterCategory('buku')">Buku</button>
                <button class="category-btn" onclick="filterCategory('mainan')">Mainan</button>
                <button class="category-btn" onclick="filterCategory('olahraga')">Olahraga</button>
                <button class="category-btn" onclick="filterCategory('kendaraan')">Kendaraan</button>
                <button class="category-btn" onclick="filterCategory('lainnya')">Lainnya</button>
            </div>
            <div class="sort-filters">
                <button class="sort-btn active" onclick="sortBy('newest')" title="Terbaru">📅</button>
                <button class="sort-btn" onclick="sortBy('popular')" title="Populer">⭐</button>
                <button class="sort-btn" onclick="sortBy('nearby')" title="Terdekat">📍</button>
                <button class="sort-btn" onclick="sortBy('condition')" title="Kondisi">✨</button>
            </div>
        </div>

        <div class="products-grid" id="productsGrid">
            <!-- Products will be loaded here -->
        </div>
    </main>

    <script>
        const products = [
            { id: 1, title: 'Blazer Wanita', location: 'Jakarta Selatan', category: 'pakaian', condition: 'Baik', image: 'https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?w=400', popular: false, message: 'Blazer wanita elegant, cocok untuk acara formal. Bahan berkualitas dan masih sangat layak pakai.' },
            { id: 2, title: 'Tas Ransel Vintage', location: 'Bandung', category: 'tas', condition: 'Sangat Baik', image: 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=400', popular: true, message: 'Tas ransel vintage dengan desain klasik. Kapasitas besar dan tali masih kuat untuk aktivitas sehari-hari.' },
            { id: 3, title: 'Laptop Gaming', location: 'Surabaya', category: 'elektronik', condition: 'Baik', image: 'https://images.unsplash.com/photo-1593642632823-8f785ba67e45?w=400', popular: true, message: 'Laptop gaming performa tinggi, masih bisa main game berat. RAM 16GB, SSD 512GB. Siap pakai!' },
            { id: 4, title: 'Sepeda Gunung', location: 'Yogyakarta', category: 'olahraga', condition: 'Sangat Baik', image: 'https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?w=400', popular: false, message: 'Sepeda gunung 21 speed, frame aluminium ringan. Cocok untuk adventure dan olahraga sehari-hari.' },
            { id: 5, title: 'Meja Kerja Kayu', location: 'Jakarta Utara', category: 'furniture', condition: 'Baik', image: 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=400', popular: false, message: 'Meja kerja solid wood, ukuran 120x60cm. Perfect untuk WFH atau belajar. Masih kokoh dan stabil.' },
            { id: 6, title: 'Kamera DSLR', location: 'Makassar', category: 'elektronik', condition: 'Sangat Baik', image: 'https://images.unsplash.com/photo-1516035069371-29a1b244cc32?w=400', popular: true, message: 'Kamera DSLR Canon EOS dengan lensa kit. Hasil foto jernih, cocok untuk belajar fotografi profesional.' },
            { id: 7, title: 'Novel Koleksi', location: 'Medan', category: 'buku', condition: 'Baik', image: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400', popular: false, message: 'Koleksi novel best seller dan klasik. Kondisi halaman masih bagus, cocok untuk pecinta buku.' },
            { id: 8, title: 'Mobil Avanza', location: 'Jakarta Barat', category: 'kendaraan', condition: 'Baik', image: 'https://images.unsplash.com/photo-1494976688153-ca3ce29cd7a6?w=400', popular: true, message: 'Toyota Avanza 2018, terawat dan siap pakai. Mesin halus, AC dingin, perfect untuk keluarga kecil.' },
            { id: 9, title: 'Kursi Gaming', location: 'Semarang', category: 'furniture', condition: 'Sangat Baik', image: 'https://images.unsplash.com/photo-1541558869434-2840d308329a?w=400', popular: false, message: 'Gaming chair ergonomis dengan lumbar support. Nyaman untuk duduk lama, bahan leather berkualitas.' },
            { id: 10, title: 'Drone Camera', location: 'Bali', category: 'elektronik', condition: 'Baik', image: 'https://images.unsplash.com/photo-1473968512647-3e447244af8f?w=400', popular: true, message: 'Drone dengan 4K camera dan gimbal stabilizer. Battery life bagus, cocok untuk aerial photography.' },
            { id: 11, title: 'Jaket Denim', location: 'Malang', category: 'pakaian', condition: 'Baik', image: 'https://images.unsplash.com/photo-1551028719-00167b16eac5?w=400', popular: false, message: 'Jaket denim vintage style, bahan tebal dan hangat. Warna masih bagus, cocok untuk gaya kasual.' },
            { id: 12, title: 'Mainan Lego', location: 'Bogor', category: 'mainan', condition: 'Sangat Baik', image: 'https://images.unsplash.com/photo-1558060370-d644479cb6f7?w=400', popular: false, message: 'Set Lego lengkap dengan manual, semua pieces masih ada. Edukatif dan seru untuk anak-anak.' }
        ];

        let currentCategory = 'semua';
        let currentSort = 'newest';

        function renderProducts(productsToRender = products) {
            const grid = document.getElementById('productsGrid');
            
            if (productsToRender.length === 0) {
                grid.innerHTML = '<div class="no-products">Produk tidak ditemukan.</div>';
                return;
            }

            grid.innerHTML = productsToRender.map(product => `
                <div class="product-card">
                    <div class="product-image" style="background-image: url('${product.image}')"></div>
                    <div class="product-info">
                        <div class="product-title">${product.title}</div>
                        <div class="product-location">📍 ${product.location}</div>
                        <span class="product-condition">${product.condition}</span>
                        <div class="product-message">${product.message}</div>
                        <button class="order-btn" onclick="orderProduct(${product.id})">Pesan Sekarang</button>
                    </div>
                </div>
            `).join('');
        }

        function filterCategory(category) {
            currentCategory = category;
            
            // Update active button
            document.querySelectorAll('.category-btn').forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');
            
            applyFilters();
        }

        function sortBy(sortType) {
            currentSort = sortType;
            
            // Update active button
            document.querySelectorAll('.sort-btn').forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');
            
            applyFilters();
        }

        function applyFilters() {
            let filtered = products;
            
            // Filter by category
            if (currentCategory !== 'semua') {
                filtered = filtered.filter(product => product.category === currentCategory);
            }
            
            // Sort products
            switch (currentSort) {
                case 'popular':
                    filtered = filtered.sort((a, b) => b.popular - a.popular);
                    break;
                case 'condition':
                    filtered = filtered.sort((a, b) => b.condition.localeCompare(a.condition));
                    break;
                case 'nearby':
                    // Simple alphabetical sort by location for demo
                    filtered = filtered.sort((a, b) => a.location.localeCompare(b.location));
                    break;
                default: // newest
                    filtered = filtered.sort((a, b) => b.id - a.id);
            }
            
            renderProducts(filtered);
        }

        function searchProducts() {
            const query = document.getElementById('searchInput').value.toLowerCase();
            if (!query) {
                applyFilters();
                return;
            }
            
            const filtered = products.filter(product => 
                product.title.toLowerCase().includes(query) ||
                product.location.toLowerCase().includes(query) ||
                product.category.toLowerCase().includes(query)
            );
            
            renderProducts(filtered);
        }

        async function orderProduct(id) {
            const product = products.find(p => p.id === id);
            
            if (!product) {
                alert('Produk tidak ditemukan!');
                return;
            }

            // Simulasi menyimpan ke database
            const orderData = {
                product_id: id,
                product_title: product.title,
                customer_name: 'solasa', // Bisa diambil dari session/login
                order_date: new Date().toISOString(),
                status: 'pending',
                location: product.location
            };

            try {
                // Simulasi API call ke backend
                const response = await fetch('http://127.0.0.1:8000/api/orders', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
                    },
                    body: JSON.stringify(orderData)
                });

                if (response.ok) {
                    // Jika berhasil disimpan ke database, redirect ke halaman detail
                    window.location.href = `http://127.0.0.1:8000/pesan/detail/${id}`;
                } else {
                    // Jika gagal, tetap redirect tapi tampilkan pesan
                    alert('Pesanan berhasil dibuat! (Mode Demo)');
                    window.location.href = `http://127.0.0.1:8000/pesan/detail/${id}`;
                }
            } catch (error) {
                // Jika server belum ready, tetap redirect untuk demo
                console.log('Demo mode: ', orderData);
                alert(`Pesanan "${product.title}" berhasil dibuat!\nID: ${id}\nStatus: Pending`);
                window.location.href = `http://127.0.0.1:8000/pesan/detail/${id}`;
            }
        }

        function viewProduct(id) {
            const product = products.find(p => p.id === id);
            alert(`Melihat detail: ${product.title}\nLokasi: ${product.location}\nKondisi: ${product.condition}`);
        }

        // Search on Enter key
        document.getElementById('searchInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                searchProducts();
            }
        });

        // Initial render
        renderProducts();
    </script>
</body>
</html>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@endsection
