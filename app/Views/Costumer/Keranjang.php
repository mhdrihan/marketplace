<div class="container my-5">
    <h2 class="mb-4 text-center fw-bold text-primary">🛒 Keranjang Belanja</h2>

    <div class="row g-4">
        <!-- Daftar Produk -->
        <div class="col-lg-8">
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body">
                    <table class="table table-hover align-middle text-center">
                        <thead class="table-primary">
                            <tr>
                                <th>Produk</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Subtotal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="cartTable">
                            <!-- Item 1 -->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://via.placeholder.com/80" class="me-3 rounded" alt="Produk A">
                                        <div class="text-start">
                                            <h6 class="mb-0 fw-semibold">Produk A</h6>
                                            <small class="text-muted">Kategori: Fashion</small>
                                        </div>
                                    </div>
                                </td>
                                <td data-price="150000">Rp 150.000</td>
                                <td>
                                    <input type="number" class="form-control form-control-sm qty" value="2" min="1"
                                        style="width: 70px;">
                                </td>
                                <td class="subtotal">Rp 300.000</td>
                                <td>
                                    <button class="btn btn-sm btn-outline-danger btn-hapus">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </td>
                            </tr>

                            <!-- Item 2 -->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://via.placeholder.com/80" class="me-3 rounded" alt="Produk B">
                                        <div class="text-start">
                                            <h6 class="mb-0 fw-semibold">Produk B</h6>
                                            <small class="text-muted">Kategori: Elektronik</small>
                                        </div>
                                    </div>
                                </td>
                                <td data-price="250000">Rp 250.000</td>
                                <td>
                                    <input type="number" class="form-control form-control-sm qty" value="1" min="1"
                                        style="width: 70px;">
                                </td>
                                <td class="subtotal">Rp 250.000</td>
                                <td>
                                    <button class="btn btn-sm btn-outline-danger btn-hapus">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Ringkasan Belanja -->
        <div class="col-lg-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-3">Ringkasan Belanja</h5>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Subtotal</span>
                        <strong id="subtotalText">Rp 550.000</strong>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Ongkir</span>
                        <strong id="ongkirText">Rp 20.000</strong>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mb-3 fs-5">
                        <span>Total</span>
                        <strong id="totalText">Rp 570.000</strong>
                    </div>
                    <button id="checkoutBtn" class="btn btn-primary w-100 mb-2">
                        <i class="fas fa-credit-card"></i> Checkout
                    </button>
                    <a href="#" class="btn btn-outline-secondary w-100">
                        <i class="fas fa-shopping-bag"></i> Lanjut Belanja
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Pesan jika keranjang kosong -->
    <div id="emptyMessage" class="alert alert-info text-center mt-4 d-none">
        <i class="fas fa-info-circle"></i> Keranjang belanja Anda masih kosong.
    </div>
</div>

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
</script>