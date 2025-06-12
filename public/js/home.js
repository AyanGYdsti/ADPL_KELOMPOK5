
        const products = [
            {
                title: "Blazer Wanita",
                description: "Blazer wanita kondisi masih bagus, jarang dipakai",
                location: "Jakarta Selatan",
                image: "linear-gradient(45deg, #d4b5a0, #c19a6b)",
                badge: "Tersedia"
            },
            {
                title: "Tas Ransel",
                description: "Tas ransel untuk sekolah atau kuliah, kondisi 90%",
                location: "Bandung",
                image: "linear-gradient(45deg, #c0392b, #e74c3c)",
                badge: "Tersedia"
            },
            {
                title: "Sepatu Sneakers",
                description: "Sepatu sneakers putih, ukuran 42, masih layak pakai",
                location: "Jakarta Pusat",
                image: "linear-gradient(45deg, #f8f9fa, #e9ecef)",
                badge: "Tersedia"
            },
            {
                title: "Kamus Bahasa Inggris",
                description: "Kamus lengkap bahasa Inggris-Indonesia",
                location: "Yogyakarta",
                image: "linear-gradient(45deg, #f39c12, #e67e22)",
                badge: "Tersedia"
            },
            {
                title: "Baju Jeans",
                description: "Celana jeans pria ukuran L, kondisi baik",
                location: "Surabaya",
                image: "linear-gradient(45deg, #2c3e50, #34495e)",
                badge: "Tersedia"
            },
            {
                title: "Peralatan Dapur",
                description: "Set peralatan masak lengkap untuk pemula",
                location: "Medan",
                image: "linear-gradient(45deg, #95a5a6, #7f8c8d)",
                badge: "Tersedia"
            },
            {
                title: "Laptop Stand",
                description: "Stand laptop kayu, adjustable, kondisi seperti baru",
                location: "Jakarta Utara",
                image: "linear-gradient(45deg, #8b4513, #a0522d)",
                badge: "Tersedia"
            },
            {
                title: "Topi Baseball",
                description: "Koleksi topi baseball berbagai merk",
                location: "Bali",
                image: "linear-gradient(45deg, #27ae60, #2ecc71)",
                badge: "Tersedia"
            },
            {
                title: "Kursi Kayu",
                description: "Kursi kayu antik untuk ruang tamu",
                location: "Solo",
                image: "linear-gradient(45deg, #d4ac0d, #f1c40f)",
                badge: "Tersedia"
            },
            {
                title: "Ceret Vintage",
                description: "Ceret tembaga vintage untuk dekorasi atau koleksi",
                location: "Malang",
                image: "linear-gradient(45deg, #b7472a, #cd6155)",
                badge: "Tersedia"
            },
            {
                title: "Bola Pingpong",
                description: "Set lengkap peralatan tenis meja",
                location: "Semarang",
                image: "linear-gradient(45deg, #e8f8f5, #d5f4e6)",
                badge: "Tersedia"
            },
            {
                title: "Mainan Anak",
                description: "Berbagai mainan edukatif untuk anak usia 3-7 tahun",
                location: "Bekasi",
                image: "linear-gradient(45deg, #ff6b9d, #ff8fab)",
                badge: "Tersedia"
            },
            {
                title: "Mobil Mainan",
                description: "Mobil remote control untuk anak, masih berfungsi",
                location: "Tangerang",
                image: "linear-gradient(45deg, #74b9ff, #0984e3)",
                badge: "Tersedia"
            },
            {
                title: "Camera Vintage",
                description: "Kamera film jadul untuk pecinta fotografi analog",
                location: "Jakarta Barat",
                image: "linear-gradient(45deg, #2d3436, #636e72)",
                badge: "Tersedia"
            }
        ];

        function loadProducts() {
            const grid = document.getElementById('productsGrid');
            grid.innerHTML = '';
            
            products.forEach(product => {
                const card = document.createElement('div');
                card.className = 'product-card';
                card.innerHTML = `
                    <div class="product-image" style="background: ${product.image}">
                        <div class="product-badge">${product.badge}</div>
                    </div>
                    <div class="product-info">
                        <div class="product-title">${product.title}</div>
                        <div class="product-description">${product.description}</div>
                        <div class="product-footer">
                            <div class="product-location">📍 ${product.location}</div>
                            <button class="contact-btn" onclick="contactSeller('${product.title}')">Hubungi</button>
                        </div>
                    </div>
                `;
                grid.appendChild(card);
            });
        }

        function contactSeller(productName) {
            alert(`Menghubungi penjual untuk: ${productName}\n\nFitur chat akan segera tersedia!`);
        }

        function toggleTheme() {
            const toggle = document.querySelector('.toggle-switch');
            toggle.classList.toggle('active');
            
            if (toggle.classList.contains('active')) {
                toggle.style.background = '#16a085';
                toggle.querySelector('::after') && (toggle.style.setProperty('--toggle-pos', '2px'));
            } else {
                toggle.style.background = '#ff6b35';
            }
        }

        // Filter functionality
        document.querySelectorAll('.filter-pill').forEach(pill => {
            pill.addEventListener('click', function() {
                document.querySelectorAll('.filter-pill').forEach(p => p.classList.remove('active'));
                this.classList.add('active');
                
                // Here you would filter products based on category
                console.log('Filter selected:', this.textContent);
            });
        });

        // Search functionality
        document.querySelector('.search-input').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const filteredProducts = products.filter(product => 
                product.title.toLowerCase().includes(searchTerm) ||
                product.description.toLowerCase().includes(searchTerm) ||
                product.location.toLowerCase().includes(searchTerm)
            );
            
            // Update grid with filtered products
            const grid = document.getElementById('productsGrid');
            grid.innerHTML = '';
            
            filteredProducts.forEach(product => {
                const card = document.createElement('div');
                card.className = 'product-card';
                card.innerHTML = `
                    <div class="product-image" style="background: ${product.image}">
                        <div class="product-badge">${product.badge}</div>
                    </div>
                    <div class="product-info">
                        <div class="product-title">${product.title}</div>
                        <div class="product-description">${product.description}</div>
                        <div class="product-footer">
                            <div class="product-location">📍 ${product.location}</div>
                            <button class="contact-btn" onclick="contactSeller('${product.title}')">Hubungi</button>
                        </div>
                    </div>
                `;
                grid.appendChild(card);
            });
        });

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            loadProducts();
        });

        // Smooth scroll for better UX
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });