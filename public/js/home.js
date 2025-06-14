function loadProductsFromAPI(kategori = null) {
    $.ajax({
        url: "/products",
        method: "GET",
        data: kategori ? { kategori } : {}, // kirim query ?kategori=xxx
        success: function (data) {
            const grid = document.getElementById("productsGrid");
            grid.innerHTML = "";

            data.forEach((product) => {
                const card = document.createElement("div");
                card.className = "product-card";
                const gambar = product.gambar ? product.gambar[0] : ""; // pakai gambar[0] jika array

                card.innerHTML = `
                    <div class="product-image" style="background-image: url('${gambar}'); background-size: cover; position: relative;">
                        <div class="product-badge">Tersedia</div>
                    </div>

                    <div class="product-info">
                        <div class="product-title">${product.nama}</div>
                        <div class="product-description">${product.deskripsi}</div>
                        <div class="product-footer">
                            <div class="product-location">📍 ${product.lokasi}</div>
                            <button class="contact-btn" onclick="contactSeller('${product.nama}')">Hubungi</button>
                        </div>
                    </div>
                `;
                grid.appendChild(card);
            });
        },
        error: function (err) {
            console.error("Gagal mengambil data produk:", err);
        },
    });
}

document.addEventListener("DOMContentLoaded", function () {
    loadProductsFromAPI();

    document.querySelectorAll(".filter-pill").forEach((pill) => {
        pill.addEventListener("click", function () {
            // aktifkan pill yang dipilih
            document
                .querySelectorAll(".filter-pill")
                .forEach((p) => p.classList.remove("active"));
            pill.classList.add("active");

            const kategoriDipilih = pill.dataset.category;
            if (kategoriDipilih === "Semua") {
                loadProductsFromAPI(); // tanpa filter
            } else {
                loadProductsFromAPI(kategoriDipilih); // filter berdasarkan kategori
            }
        });
    });
});
