<footer class="footer text-light pt-5 pb-3">
    <div class="container">
        <div class="row gy-4">
            <!-- Tentang -->
            <div class="col-lg-4 col-md-6">
                <h5 class="fw-bold mb-3 text-white">Marketplace UMKM</h5>
                <p class="small opacity-75">
                    Platform yang membantu pelaku usaha mikro, kecil, dan menengah di seluruh Indonesia untuk memasarkan
                    produk berkualitas dan meningkatkan jangkauan bisnis mereka.
                </p>
            </div>

            <!-- Link Cepat -->
            <div class="col-lg-4 col-md-6">
                <h5 class="fw-bold mb-3 text-white">Link Cepat</h5>
                <ul class="list-unstyled">
                    <li><a href="/" class="footer-link"><i class="fas fa-angle-right me-2"></i>Beranda</a>
                    </li>
                    <li><a href="#" class="footer-link"><i class="fas fa-angle-right me-2"></i>Produk</a></li>
                    <li><a href="kategori" class="footer-link"><i class="fas fa-angle-right me-2"></i>Kategori</a></li>
                    <li><a href="#" class="footer-link"><i class="fas fa-angle-right me-2"></i>Kontak</a></li>
                    <li><a href="#" class="footer-link"><i class="fas fa-angle-right me-2"></i>Bantuan</a></li>
                </ul>
            </div>

            <!-- Kontak -->
            <div class="col-lg-4 col-md-12">
                <h5 class="fw-bold mb-3 text-white">Hubungi Kami</h5>
                <p class="mb-1 small"><i class="fas fa-map-marker-alt me-2"></i>Jl. Contoh No.123, Jakarta</p>
                <p class="mb-1 small"><i class="fas fa-phone me-2"></i>+62 812 3456 7890</p>

                <div class="social-links mt-3">
                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>

        <hr class="border-light mt-4 opacity-25">
        <div class="text-center small opacity-75">
            &copy; 2025 <strong>Marketplace UMKM</strong>. Semua Hak Dilindungi.
        </div>
    </div>
</footer>

<!-- Bootstrap JS Bundle (Popper + Bootstrap JS) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function () {
        <?php if (session()->getFlashdata('error')): ?>
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: '<?= session()->getFlashdata('error') ?>',
                confirmButtonText: 'OK'
            });
        <?php elseif (session()->getFlashdata('success')): ?>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '<?= session()->getFlashdata('success') ?>',
                confirmButtonText: 'OK'
            });
        <?php endif; ?>
    });
</script>

<!-- Script Filter Kategori -->
<script>
    document.querySelectorAll('.add-to-cart-btn').forEach(button => {
        button.addEventListener('click', function () {
            const product_id = this.dataset.id;
            const name = this.dataset.name;
            const price = this.dataset.price;
            const image = this.dataset.image;

            fetch('/keranjang/add_cart', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: `product_id=${product_id}&name=${encodeURIComponent(name)}&price=${price}&image_url=${encodeURIComponent(image)}`
            })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: 'Produk berhasil ditambahkan ke keranjang!',
                            confirmButtonText: 'OK'
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: 'Produk gagal ditambahkan ke keranjang.',
                            confirmButtonText: 'OK'
                        });
                    }
                })
                .catch(err => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Terjadi kesalahan saat menambahkan produk.',
                        confirmButtonText: 'OK'
                    });
                    console.error(err);
                });
        });
    });
</script>

<script>
    $('.btn-increase, .btn-decrease').click(function () {
        let id = $(this).data('id');
        let $input = $('.qty-input[data-id="' + id + '"]'); // ambil input
        let qty = parseInt($input.val()) || 1; // ambil value dari input

        if ($(this).hasClass('btn-increase')) qty++;
        else qty = Math.max(1, qty - 1);

        // update input dulu
        $input.val(qty);

        $.post('/keranjang/update_cart', { product_id: id, quantity: qty }, function (res) {
            if (res.status === 'success') {
                $('#subtotal-' + id).text(res.productSubtotal);
                $('#total-cart').text(res.totalCart);
                $('#total-with-shipping').text(res.totalWithShipping);
            } else {
                alert(res.message);
            }
        }, 'json');
    });

</script>


<script>
    document.querySelectorAll('.add-to-cart-btn').forEach(button => {
        button.addEventListener('click', function () {
            const product_id = this.dataset.id;
            const name = this.dataset.name;
            const price = this.dataset.price;
            const image = this.dataset.image;

            fetch('/keranjang/add_cart', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: `product_id=${product_id}&name=${encodeURIComponent(name)}&price=${price}&image_url=${image_url}`
            })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        alert('✅ Produk berhasil ditambahkan ke keranjang!');
                    } else {
                        alert('❌ Gagal menambahkan produk ke keranjang.');
                    }
                })
                .catch(err => console.error(err));
        });
    });
</script>


<!-- JS Fungsional -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const cartTable = document.getElementById("cartTable");
        const subtotalText = document.getElementById("subtotalText");
        const totalText = document.getElementById("totalText");
        const ongkirText = document.getElementById("ongkirText");
        const emptyMessage = document.getElementById("emptyMessage");
        const checkoutBtn = document.getElementById("checkoutBtn");

        // Misalnya status login (ganti ke true jika user sudah login)
        let isLoggedIn = false;

        // Fungsi untuk update total
        function updateTotals() {
            let subtotal = 0;
            document.querySelectorAll("#cartTable tr").forEach(row => {
                const price = parseInt(row.querySelector("td[data-price]").dataset.price);
                const qty = parseInt(row.querySelector(".qty").value);
                const subtotalCell = row.querySelector(".subtotal");
                const totalItem = price * qty;
                subtotalCell.textContent = formatRupiah(totalItem);
                subtotal += totalItem;
            });

            const ongkir = 20000;
            subtotalText.textContent = formatRupiah(subtotal);
            totalText.textContent = formatRupiah(subtotal + ongkir);
        }

        // Format angka ke Rupiah
        function formatRupiah(angka) {
            return "Rp " + angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

        // Hapus produk
        cartTable.addEventListener("click", function (e) {
            if (e.target.closest(".btn-hapus")) {
                const row = e.target.closest("tr");
                const productName = row.querySelector("h6").innerText;
                if (confirm(`Hapus ${productName} dari keranjang?`)) {
                    row.remove();
                    if (cartTable.children.length === 0) {
                        emptyMessage.classList.remove("d-none");
                    }
                    updateTotals();
                }
            }
        });

        // Update subtotal saat jumlah berubah
        cartTable.addEventListener("input", function (e) {
            if (e.target.classList.contains("qty")) {
                updateTotals();
            }
        });

        // Tombol Checkout
        checkoutBtn.addEventListener("click", function () {
            if (!isLoggedIn) {
                alert("⚠️ Silakan login atau daftar dulu untuk melanjutkan checkout.");
            } else {
                alert("✅ Terima kasih! Pesanan Anda sedang diproses.");
                cartTable.innerHTML = "";
                updateTotals();
                emptyMessage.classList.remove("d-none");
            }
        });

        // Inisialisasi awal
        updateTotals();
    });
</script><!-- JS Fungsional -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const cartTable = document.getElementById("cartTable");
        const subtotalText = document.getElementById("subtotalText");
        const totalText = document.getElementById("totalText");
        const ongkirText = document.getElementById("ongkirText");
        const emptyMessage = document.getElementById("emptyMessage");
        const checkoutBtn = document.getElementById("checkoutBtn");

        // Misalnya status login (ganti ke true jika user sudah login)
        let isLoggedIn = false;

        // Fungsi untuk update total
        function updateTotals() {
            let subtotal = 0;
            document.querySelectorAll("#cartTable tr").forEach(row => {
                const price = parseInt(row.querySelector("td[data-price]").dataset.price);
                const qty = parseInt(row.querySelector(".qty").value);
                const subtotalCell = row.querySelector(".subtotal");
                const totalItem = price * qty;
                subtotalCell.textContent = formatRupiah(totalItem);
                subtotal += totalItem;
            });

            const ongkir = 20000;
            subtotalText.textContent = formatRupiah(subtotal);
            totalText.textContent = formatRupiah(subtotal + ongkir);
        }

        // Format angka ke Rupiah
        function formatRupiah(angka) {
            return "Rp " + angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

        // Hapus produk
        cartTable.addEventListener("click", function (e) {
            if (e.target.closest(".btn-hapus")) {
                const row = e.target.closest("tr");
                const productName = row.querySelector("h6").innerText;
                if (confirm(`Hapus ${productName} dari keranjang?`)) {
                    row.remove();
                    if (cartTable.children.length === 0) {
                        emptyMessage.classList.remove("d-none");
                    }
                    updateTotals();
                }
            }
        });

        // Update subtotal saat jumlah berubah
        cartTable.addEventListener("input", function (e) {
            if (e.target.classList.contains("qty")) {
                updateTotals();
            }
        });

        // Tombol Checkout
        checkoutBtn.addEventListener("click", function () {
            if (!isLoggedIn) {
                alert("⚠️ Silakan login atau daftar dulu untuk melanjutkan checkout.");
            } else {
                alert("✅ Terima kasih! Pesanan Anda sedang diproses.");
                cartTable.innerHTML = "";
                updateTotals();
                emptyMessage.classList.remove("d-none");
            }
        });

        // Inisialisasi awal
        updateTotals();
    });
</script>

</body>

</html>