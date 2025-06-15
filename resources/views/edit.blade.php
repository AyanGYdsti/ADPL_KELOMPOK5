<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Edit Tas Sekolah</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #4a9b8e 0%, #6bb6a8 100%);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }

    .card {
      background: rgba(255, 255, 255, 1);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      width: 100%;
      max-width: 420px;
      border-radius: 32px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      animation: slideUp 0.8s ease;
      position: relative;
    }

    .card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: #5fb3b3;
    }

    /* Header */
    .header {
      background: #6bb6a8;
      color: white;
      padding: 20px 60px;
      text-align: center;
      position: relative;
    }

    .header h1 {
      font-size: 22px;
      font-weight: 700;
      margin: 0;
    }

    /* Back Button */
    .back-button {
      position: absolute;
      top: 50%;
      left: 20px;
      transform: translateY(-50%);
      background: rgba(255, 255, 255, 0.2);
      border: none;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      font-size: 18px;
      color: white;
      transition: all 0.3s ease;
    }

    .back-button:hover {
      background: rgba(255, 255, 255, 0.3);
      transform: translateY(-50%) scale(1.1);
    }

    /* Delete Button */
    .delete-button {
      position: absolute;
      top: 50%;
      right: 20px;
      transform: translateY(-50%);
      background: rgba(255, 77, 87, 0.9);
      border: none;
      padding: 8px 16px;
      border-radius: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      font-size: 14px;
      font-weight: 600;
      color: #fff;
      transition: all 0.3s ease;
      font-family: 'Poppins', sans-serif;
    }

    .delete-button:hover {
      background: #ff4d57;
      transform: translateY(-50%) scale(1.05);
    }

    /* Image Upload Section */
    .image-upload-section {
      position: relative;
      width: 100%;
      height: 300px;
      overflow: hidden;
      background: #f8f9fa;
      border-bottom: 1px solid #e9ecef;
    }

    .image-preview {
      position: relative;
      width: 100%;
      height: 100%;
      overflow: hidden;
    }

    .slider-container {
      display: flex;
      width: 400%;
      height: 100%;
      transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .slider-container img {
      width: 25%;
      height: 100%;
      object-fit: cover;
      flex-shrink: 0;
    }

    .image-upload-overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.5);
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .image-preview:hover .image-upload-overlay {
      opacity: 1;
    }

    .upload-btn {
      background: #6bb6a8;
      color: white;
      border: none;
      padding: 12px 24px;
      border-radius: 20px;
      cursor: pointer;
      font-weight: 600;
      font-family: 'Poppins', sans-serif;
      transition: all 0.3s ease;
    }

    .upload-btn:hover {
      background: #5fb3b3;
      transform: scale(1.05);
    }

    .slider-dots {
      position: absolute;
      bottom: 16px;
      left: 50%;
      transform: translateX(-50%);
      display: flex;
      gap: 8px;
    }

    .dot {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.5);
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .dot.active {
      background: #fff;
      transform: scale(1.2);
    }

    .slider-nav {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(255, 255, 255, 0.9);
      border: none;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
      color: #333;
      transition: all 0.3s ease;
      opacity: 0;
    }

    .image-preview:hover .slider-nav {
      opacity: 1;
    }

    .prev {
      left: 16px;
    }

    .next {
      right: 16px;
    }

    .slider-nav:hover {
      background: #fff;
      transform: translateY(-50%) scale(1.1);
    }

    /* Form Content */
    .content {
      padding: 28px;
      animation: fadeInUp 1s ease;
    }

    .form-group {
      margin-bottom: 24px;
    }

    .form-group label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
      color: #2c3e50;
      font-size: 16px;
    }

    .form-group input,
    .form-group textarea,
    .form-group select {
      width: 100%;
      padding: 16px;
      border: 2px solid #e1e5e9;
      border-radius: 16px;
      font-size: 16px;
      font-family: 'Poppins', sans-serif;
      transition: all 0.3s ease;
      background: #fafafa;
    }

    .form-group input:focus,
    .form-group textarea:focus,
    .form-group select:focus {
      outline: none;
      border-color: #6bb6a8;
      background: white;
      box-shadow: 0 0 0 3px rgba(107, 182, 168, 0.1);
    }

    .form-group textarea {
      resize: vertical;
      min-height: 120px;
      line-height: 1.7;
    }

    .price-group {
      display: flex;
      gap: 12px;
      align-items: end;
    }

    .price-input {
      flex: 1;
    }

    .price-toggle {
      background: #6bb6a8;
      color: white;
      border: none;
      padding: 16px 24px;
      border-radius: 16px;
      cursor: pointer;
      font-weight: 600;
      font-family: 'Poppins', sans-serif;
      transition: all 0.3s ease;
      white-space: nowrap;
    }

    .price-toggle:hover {
      background: #5fb3b3;
      transform: scale(1.05);
    }

    .price-toggle.free {
      background: #28a745;
    }

    .price-toggle.free:hover {
      background: #218838;
    }

    /* Contact Section */
    .contact-section {
      background: #f8f9ff;
      padding: 20px;
      border-radius: 16px;
      border-left: 4px solid #6bb6a8;
      margin-bottom: 24px;
    }

    .contact-section h3 {
      color: #2c3e50;
      margin-bottom: 16px;
      font-size: 16px;
      font-weight: 600;
    }

    .contact-method {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 12px;
      background: white;
      border-radius: 12px;
      border: 2px solid #e1e5e9;
    }

    .contact-method img {
      width: 24px;
      height: 24px;
    }

    /* Location Section */
    .location-section {
      background: #6bb6a8;
      color: white;
      padding: 20px;
      border-radius: 16px;
      margin-bottom: 24px;
    }

    .location-section h3 {
      margin-bottom: 16px;
      font-size: 16px;
      font-weight: 600;
    }

    .location-section input,
    .location-section textarea {
      background: rgba(255, 255, 255, 0.9);
      border: none;
      color: #333;
    }

    .location-section input:focus,
    .location-section textarea:focus {
      background: white;
      box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.3);
    }

    /* Action Buttons */
    .action-buttons {
      display: flex;
      gap: 12px;
      margin-bottom: 16px;
    }

    .save-btn {
      width: 100%;
      background: #6bb6a8;
      border: none;
      color: white;
      padding: 18px;
      font-size: 16px;
      border-radius: 20px;
      cursor: pointer;
      font-weight: 700;
      font-family: 'Poppins', sans-serif;
      box-shadow: 0 6px 16px rgba(95, 179, 179, 0.4);
      transition: all 0.3s ease;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .save-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(95, 179, 179, 0.5);
    }

    .preview-btn {
      flex: 1;
      background: #17a2b8;
      border: none;
      color: white;
      padding: 18px;
      font-size: 16px;
      border-radius: 20px;
      cursor: pointer;
      font-weight: 700;
      font-family: 'Poppins', sans-serif;
      box-shadow: 0 6px 16px rgba(23, 162, 184, 0.4);
      transition: all 0.3s ease;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .preview-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(23, 162, 184, 0.5);
    }

    .delete-text {
      width: 100%;
      text-align: center;
      color: #ff4757;
      font-size: 14px;
      cursor: pointer;
      font-weight: 600;
      font-family: 'Poppins', sans-serif;
      transition: all 0.3s ease;
      padding: 16px;
      text-decoration: underline;
    }

    .delete-text:hover {
      color: #ff3742;
      transform: scale(1.02);
    }

    /* Hidden file input */
    #imageUpload {
      display: none;
    }

    /* Animations */
    @keyframes slideUp {
      from {
        opacity: 0;
        transform: translateY(60px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(40px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media (min-width: 640px) {
      .card {
        max-width: 870px;
      }
    }
  </style>
</head>
<body>
  <div class="card">
    <div class="header">
      <button class="back-button" onclick="goBack()">‹</button>
      <h1>Edit Barang</h1>
      <button class="delete-button" onclick="confirmDelete()">🗑️ Hapus</button>
    </div>

    <div class="image-upload-section">
      <div class="image-preview">
        <div class="slider-container" id="sliderContainer">
          <img src="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=400&h=300&fit=crop" alt="Tas Pink 1" />
          <img src="https://images.unsplash.com/photo-1576995853123-5a10305d93c0?w=400&h=300&fit=crop" alt="Tas Pink 2" />
          <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?w=400&h=300&fit=crop" alt="Tas Pink 3" />
          <img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=400&h=300&fit=crop" alt="Tas Pink 4" />
        </div>

        <div class="image-upload-overlay">
          <button class="upload-btn" onclick="document.getElementById('imageUpload').click()">
            📷 Ubah Foto
          </button>
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

      <input type="file" id="imageUpload" multiple accept="image/*" onchange="handleImageUpload(event)">
    </div>

    <div class="content">
      <form id="itemForm">
        <div class="form-group">
          <label for="itemTitle">Nama Barang *</label>
          <input type="text" id="itemTitle" value="Tas Sekolah" required>
        </div>

        <div class="form-group">
          <label for="itemPrice">Harga</label>
          <div class="price-group">
            <div class="price-input">
              <input type="number" id="itemPrice" value="0" min="0" disabled>
            </div>
            <button type="button" class="price-toggle free" id="priceToggle" onclick="togglePrice()">
              Gratis
            </button>
          </div>
        </div>

        <div class="form-group">
          <label for="itemDescription">Keterangan *</label>
          <textarea id="itemDescription" required>Tas sekolah warna pink tidak ada minus, sudah dicuci bersih, pemakaian tidak cukup sebulan. Muat untuk buku panjang serta laptop, bahan nya sangat berkualitas. Diberikan untuk siapa pun yang mau!</textarea>
        </div>

        <div class="contact-section">
          <h3>📞 Metode Kontak</h3>
          <div class="contact-method">
            <img src="https://img.icons8.com/color/24/whatsapp--v1.png" alt="WhatsApp">
            <span>WhatsApp</span>
          </div>
        </div>

        <div class="location-section">
          <h3>📍 Lokasi Pengambilan</h3>
          <div class="form-group" style="margin-bottom: 16px;">
            <label for="locationCity">Kota</label>
            <input type="text" id="locationCity" value="Kendari" style="background: rgba(255, 255, 255, 0.9);">
          </div>
          <div class="form-group" style="margin-bottom: 16px;">
            <label for="locationDistrict">Kecamatan</label>
            <input type="text" id="locationDistrict" value="Wua-Wua" style="background: rgba(255, 255, 255, 0.9);">
          </div>
          <div class="form-group" style="margin-bottom: 0;">
            <label for="locationDetail">Alamat Lengkap</label>
            <textarea id="locationDetail" style="background: rgba(255, 255, 255, 0.9); min-height: 80px;">Jln. Mayjen Sutoyo No. 123
Dekat Kampus Unhalu</textarea>
          </div>
        </div>

        <div class="action-buttons">
          <button type="submit" class="save-btn">💾 Simpan Perubahan</button>
        </div>
      </form>

      <div class="delete-text" onclick="confirmDelete()">
        🗑️ Hapus Barang Ini
      </div>
    </div>
  </div>

  <script>
    let currentSlideIndex = 0;
    const totalSlides = 4;
    let isFree = true;

    function changeSlide(direction) {
      currentSlideIndex += direction;

      if (currentSlideIndex >= totalSlides) {
        currentSlideIndex = 0;
      } else if (currentSlideIndex < 0) {
        currentSlideIndex = totalSlides - 1;
      }

      updateSlider();
    }

    function currentSlide(slideIndex) {
      currentSlideIndex = slideIndex - 1;
      updateSlider();
    }

    function updateSlider() {
      const sliderContainer = document.getElementById('sliderContainer');
      const dots = document.querySelectorAll('.dot');

      sliderContainer.style.transform = `translateX(-${currentSlideIndex * 25}%)`;

      dots.forEach((dot, index) => {
        dot.classList.toggle('active', index === currentSlideIndex);
      });
    }

    function togglePrice() {
      const priceInput = document.getElementById('itemPrice');
      const priceToggle = document.getElementById('priceToggle');

      isFree = !isFree;

      if (isFree) {
        priceInput.disabled = true;
        priceInput.value = '0';
        priceToggle.textContent = 'Gratis';
        priceToggle.classList.add('free');
        priceToggle.style.background = '#28a745';
      } else {
        priceInput.disabled = false;
        priceInput.focus();
        priceToggle.textContent = 'Berbayar';
        priceToggle.classList.remove('free');
        priceToggle.style.background = '#6bb6a8';
      }
    }

    function handleImageUpload(event) {
      const files = event.target.files;
      if (files.length > 0) {
        alert(`📷 ${files.length} foto berhasil dipilih!\n\nFoto akan diupload setelah menyimpan perubahan.`);
      }
    }

    function goBack() {
      if (confirm('⚠️ Keluar dari edit?\n\nPerubahan yang belum disimpan akan hilang.')) {
        window.history.back();
      }
    }

    function previewItem() {
      alert('👁️ Membuka preview...\n\nAnda akan melihat bagaimana barang ini tampil untuk pembeli.');
    }

    function confirmDelete() {
      if (confirm('⚠️ Hapus barang ini?\n\nTindakan ini tidak dapat dibatalkan. Barang akan dihapus permanen dari daftar Anda.')) {
        alert('🗑️ Barang berhasil dihapus!\n\nAnda akan dikembalikan ke halaman utama.');
        window.history.back();
      }
    }

    // Handle form submission
    document.getElementById('itemForm').addEventListener('submit', function(e) {
      e.preventDefault();

      const formData = {
        title: document.getElementById('itemTitle').value,
        price: isFree ? 0 : document.getElementById('itemPrice').value,
        description: document.getElementById('itemDescription').value,
        contactMethod: 'whatsapp',
        location: {
          city: document.getElementById('locationCity').value,
          district: document.getElementById('locationDistrict').value,
          detail: document.getElementById('locationDetail').value
        },
        isFree: isFree,
        timestamp: new Date().toISOString()
      };

      console.log('Data barang disimpan:', formData);
      alert('✅ Berhasil disimpan!\n\nPerubahan barang Anda telah disimpan dan akan tampil untuk pembeli.');
    });

    // Auto slide every 5 seconds
    setInterval(() => {
      changeSlide(1);
    }, 5000);

    // Touch/swipe support for mobile
    let startX = 0;
    let endX = 0;
    const slider = document.querySelector('.image-preview');

    slider.addEventListener('touchstart', function(e) {
      startX = e.touches[0].clientX;
    });

    slider.addEventListener('touchend', function(e) {
      endX = e.changedTouches[0].clientX;
      handleSwipe();
    });

    function handleSwipe() {
      const swipeThreshold = 50;
      const swipeDistance = startX - endX;

      if (Math.abs(swipeDistance) > swipeThreshold) {
        if (swipeDistance > 0) {
          changeSlide(1);
        } else {
          changeSlide(-1);
        }
      }
    }

    // Prevent form submission on Enter key in input fields
    document.querySelectorAll('input').forEach(input => {
      input.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
          e.preventDefault();
        }
      });
    });
  </script>
</body>
</html>
