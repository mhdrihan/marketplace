<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>UMKM Indonesia - Blibli Style</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="styles.css" rel="stylesheet" />
</head>

<body>

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
                        <li><a href="/kategori"><i class="fas fa-th-large"></i>Semua Produk</a></li>
                        <li><a href="/kategori"><i class="fas fa-utensils"></i>Makanan & Minuman</a></li>
                        <li><a href="/kategori/"><i class="fas fa-tshirt"></i>Fashion & Aksesoris</a></li>
                        <li><a href="/kategori"><i class="fas fa-hand-sparkles"></i>Kerajinan Tangan</a></li>
                        <li><a href="/kategori"><i class="fas fa-mobile-alt"></i>Elektronik</a></li>
                        <li><a href="/kategori"><i class="fas fa-heart"></i>Kesehatan & Kecantikan</a></li>
                        <li><a href="/kategori"><i class="fas fa-ellipsis-h"></i>Lainnya</a></li>
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
                        <li><a href="/Profile"><i class="fas fa-user-circle"></i>Profil</a></li>
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
                <!-- Makanan Section -->
                <section id="produk">
                    <h2 class="section-title">Makanan & Minuman</h2>
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6">
                            <div class="product-card">
                                <div class="product-image">
                                    <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?ixlib=rb-4.0.3&w=400"
                                        alt="Keripik Pisang">
                                    <div class="product-badge">Terlaris</div>
                                    <button class="quick-view" title="Quick View">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title">Keripik Pisang Manis</h3>
                                    <div class="product-rating">
                                        <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-text">(127 ulasan)</span>
                                    </div>
                                    <div class="product-price">Rp 15.000</div>
                                    <button class="add-to-cart-btn">
                                        <i class="fas fa-cart-plus"></i>
                                        Tambah ke Keranjang
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="product-card">
                                <div class="product-image">
                                    <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?ixlib=rb-4.0.3&w=400"
                                        alt="Rendang Padang">
                                    <div class="product-badge">Hot</div>
                                    <button class="quick-view" title="Quick View">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title">Rendang Padang Asli</h3>
                                    <div class="product-rating">
                                        <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <span class="rating-text">(89 ulasan)</span>
                                    </div>
                                    <div class="product-price">Rp 50.000</div>
                                    <button class="add-to-cart-btn">
                                        <i class="fas fa-cart-plus"></i>
                                        Tambah ke Keranjang
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="product-card">
                                <div class="product-image">
                                    <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?ixlib=rb-4.0.3&w=400"
                                        alt="Kue Lapis">
                                    <div class="product-badge">New</div>
                                    <button class="quick-view" title="Quick View">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title">Kue Lapis Legit</h3>
                                    <div class="product-rating">
                                        <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-text">(156 ulasan)</span>
                                    </div>
                                    <div class="product-price">Rp 25.000</div>
                                    <button class="add-to-cart-btn">
                                        <i class="fas fa-cart-plus"></i>
                                        Tambah ke Keranjang
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Produk Lainnya Section -->
                <section>
                    <h2 class="section-title">Produk Lainnya</h2>
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6">
                            <div class="product-card">
                                <div class="product-image">
                                    <img src="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?ixlib=rb-4.0.3&w=400"
                                        alt="Tas Rajut">
                                    <div class="product-badge">Handmade</div>
                                    <button class="quick-view" title="Quick View">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title">Tas Rajut Handmade</h3>
                                    <div class="product-rating">
                                        <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <span class="rating-text">(67 ulasan)</span>
                                    </div>
                                    <div class="product-price">Rp 45.000</div>
                                    <button class="add-to-cart-btn">
                                        <i class="fas fa-cart-plus"></i>
                                        Tambah ke Keranjang
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="product-card">
                                <div class="product-image">
                                    <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&w=400"
                                        alt="Batik Handmade">
                                    <div class="product-badge">Premium</div>
                                    <button class="quick-view" title="Quick View">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title">Batik Handmade Solo</h3>
                                    <div class="product-rating">
                                        <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-text">(203 ulasan)</span>
                                    </div>
                                    <div class="product-price">Rp 100.000</div>
                                    <button class="add-to-cart-btn">
                                        <i class="fas fa-cart-plus"></i>
                                        Tambah ke Keranjang
                                    </button>
                                </div>
                            </div>
                        </div>
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
                    title: 'Gagal Login',
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