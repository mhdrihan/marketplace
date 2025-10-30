<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 hero-content">
                <h1>Dukung UMKM Indonesia</h1>
                <p>Temukan produk berkualitas dari pelaku usaha mikro, kecil, dan menengah terpercaya di seluruh
                    Indonesia. Belanja sekarang dan dukung ekonomi lokal!</p>
                <div>
                    <a href="#produk" class="btn btn-light btn-lg me-3">Mulai Belanja</a>
                    <a href="/tentang" class="btn btn-outline-light btn-lg">Pelajari Lebih Lanjut</a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&w=600"
                    alt="UMKM Products" class="img-fluid rounded-3" style="max-height: 400px; object-fit: cover;">
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<div class="container my-5">
    <!-- Promo Banner -->
    <div class="promo-banner">
        <h3><i class="fas fa-fire me-2"></i>Flash Sale Hari Ini!</h3>
        <p class="mb-0">Dapatkan diskon hingga 50% untuk produk UMKM pilihan. Buruan, stock terbatas!</p>
    </div>

    <div class="row">
        <!-- Sidebar Categories -->
        <div class="col-lg-3">
            <div class="sidebar">
                <h5><i class="fas fa-list me-2"></i>Kategori Produk</h5>
                <ul class="category-list">
                    <?php foreach ($categories as $category): ?>
                        <li>
                            <a href="/kategori/<?= $category['category_id'] ?>">
                                <i class="fas fa-tags"></i> <?= $category['name'] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Promo & Diskon -->
            <div class="sidebar mt-4">
                <h5><i class="fas fa-tags me-2"></i>Promo & Diskon</h5>
                <ul class="category-list">
                    <li><a href="/promo"><i class="fas fa-bolt"></i>Flash Sale</a></li>
                    <li><a href="/promo"><i class="fas fa-ticket-alt"></i>Voucher</a></li>
                    <li><a href="/promo"><i class="fas fa-star"></i>Produk Terlaris</a></li>
                </ul>
            </div>

            <!-- Akun Saya -->
            <div class="sidebar mt-4">
                <h5><i class="fas fa-user me-2"></i>Akun Saya</h5>
                <ul class="category-list">
                    <li><a href="/Profile"><i class="fas fa-user-circle"></i>Profile</a></li>
                    <li><a href="/pesanan"><i class="fas fa-shopping-bag"></i>Pesanan Saya</a></li>
                    <li><a href="/wishlist"><i class="fas fa-heart"></i>Wishlist</a></li>
                    <li><a href="/keranjang"><i class="fas fa-shopping-cart"></i>Keranjang Belanja</a></li>
                    <li><a href="/notifikasi"><i class="fas fa-bell"></i>Notifikasi</a></li>
                    <li><a href="/logout"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                </ul>
            </div>
        </div>

        <!-- Product Content -->
        <div class="col-lg-9">
            <section id="produk">
                <h2 class="section-title">Produk</h2>
                <div class="row g-4">
                    <?php if (!empty($products)): ?>
                        <?php foreach ($products as $product): ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="/uploads/products/<?= esc($product['image_url']) ?>"
                                            alt="<?= esc($product['name']) ?>">
                                        <button class="quick-view" title="Quick View">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-title"><?= esc($product['name']) ?></h3>
                                        <div class="product-price">Rp <?= number_format($product['price'], 0, ',', '.') ?></div>
                                        <button class="add-to-cart-btn">
                                            <i class="fas fa-cart-plus"></i>
                                            Tambah ke Keranjang
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p class="text-center">Belum ada produk tersedia.</p>
                    <?php endif; ?>
                </div>
            </section>
        </div>
    </div>
</div>
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
</body>

</html>