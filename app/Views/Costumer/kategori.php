<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Filter Kategori Produk</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="styles.css" rel="stylesheet" />
</head>

<body>

    <div class="container my-5">
        <div class="row">
            <!-- Sidebar Kategori -->
            <div class="col-lg-3">
                <div class="sidebar">
                    <h5><i class="fas fa-list me-2"></i>Kategori Produk</h5>
                    <ul class="category-list list-unstyled">
                        <li><a href="#" class="category-link active" data-category="all"><i class="fas fa-th-large"></i>
                                Semua Produk</a></li>
                        <li><a href="#" class="category-link" data-category="makanan-minuman"><i
                                    class="fas fa-utensils"></i> Makanan & Minuman</a></li>
                        <li><a href="#" class="category-link" data-category="fashion-aksesoris"><i
                                    class="fas fa-tshirt"></i> Fashion & Aksesoris</a></li>
                        <li><a href="#" class="category-link" data-category="kerajinan-tangan"><i
                                    class="fas fa-hammer"></i> Kerajinan Tangan</a></li>
                        <li><a href="#" class="category-link" data-category="elektronik"><i
                                    class="fas fa-mobile-alt"></i> Elektronik</a></li>
                        <li><a href="#" class="category-link" data-category="kesehatan-kecantikan"><i
                                    class="fas fa-heart"></i> Kesehatan & Kecantikan</a></li>
                        <li><a href="#" class="category-link" data-category="lainnya"><i class="fas fa-ellipsis-h"></i>
                                Lainnya</a></li>
                    </ul>
                </div>
            </div>

            <!-- Konten Produk -->
            <div class="col-lg-9">
                <h2 class="section-title mb-4" style="color: var(--bs-primary); font-weight: 700;">Semua Produk</h2>
                <div class="row g-4" id="product-list">
                    <!-- Produk Makanan & Minuman -->
                    <div class="col-lg-4 col-md-6 product-item" data-category="makanan-minuman">
                        <div class="product-card">
                            <div class="product-image">
                                <a href="#">
                                    <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2023/3/15/1a1a3a3a-3a3a-4a4a-9a9a-1a1a1a1a1a1a.jpg"
                                        alt="Sepatu Sneakers Pria" class="img-fluid"
                                        onerror="this.src='assets/img/no-image.png'">
                                </a>
                                <div class="product-badge">Diskon 20%</div>
                                <a href="#" class="quick-view" title="Lihat Detail">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">
                                    <a href="#">Sepatu Sneakers Pria Casual Stylish</a>
                                </h3>
                                <div class="product-rating">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <span class="rating-text">(150 ulasan)</span>
                                </div>
                                <div class="product-price">
                                    <span class="original-price">Rp 500.000</span>
                                    <span class="discount-price">Rp 400.000</span>
                                </div>
                                <a href="#" class="btn btn-sm btn-primary add-to-cart-btn">
                                    <i class="fas fa-shopping-cart me-1"></i> Tambah ke Keranjang
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Produk Fashion & Aksesoris -->
                    <div class="col-lg-4 col-md-6 product-item" data-category="fashion-aksesoris">
                        <div class="product-card">
                            <div class="product-image">
                                <a href="#">
                                    <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2023/4/10/2b2b2b2b-2b2b-4b4b-8b8b-2b2b2b2b2b2b.jpg"
                                        alt="Jam Tangan Wanita" class="img-fluid"
                                        onerror="this.src='assets/img/no-image.png'">
                                </a>
                                <div class="product-badge" style="background-color: #28a745;">Terlaris</div>
                                <a href="#" class="quick-view" title="Lihat Detail">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">
                                    <a href="#">Jam Tangan Wanita Elegan Mewah</a>
                                </h3>
                                <div class="product-rating">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="rating-text">(320 ulasan)</span>
                                </div>
                                <div class="product-price">
                                    <span class="discount-price">Rp 750.000</span>
                                </div>
                                <a href="#" class="btn btn-sm btn-primary add-to-cart-btn">
                                    <i class="fas fa-shopping-cart me-1"></i> Tambah ke Keranjang
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Produk Elektronik -->
                    <div class="col-lg-4 col-md-6 product-item" data-category="elektronik">
                        <div class="product-card">
                            <div class="product-image">
                                <a href="#">
                                    <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2023/2/20/3c3c3c3c-3c3c-4c4c-9c9c-3c3c3c3c3c3c.jpg"
                                        alt="Headphone Wireless" class="img-fluid"
                                        onerror="this.src='assets/img/no-image.png'">
                                </a>
                                <div class="product-badge" style="background-color: #dc3545;">Baru</div>
                                <a href="#" class="quick-view" title="Lihat Detail">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">
                                    <a href="#">Headphone Wireless Bluetooth Noise Cancelling</a>
                                </h3>
                                <div class="product-rating">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <span class="rating-text">(85 ulasan)</span>
                                </div>
                                <div class="product-price">
                                    <span class="original-price">Rp 1.200.000</span>
                                    <span class="discount-price">Rp 950.000</span>
                                </div>
                                <a href="#" class="btn btn-sm btn-primary add-to-cart-btn">
                                    <i class="fas fa-shopping-cart me-1"></i> Tambah ke Keranjang
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Produk Kesehatan & Kecantikan -->
                    <div class="col-lg-4 col-md-6 product-item" data-category="kesehatan-kecantikan">
                        <div class="product-card">
                            <div class="product-image">
                                <a href="#">
                                    <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2023/5/1/4d4d4d4d-4d4d-4d4d-8d8d-4d4d4d4d4d4d.jpg"
                                        alt="Produk Kecantikan" class="img-fluid"
                                        onerror="this.src='assets/img/no-image.png'">
                                </a>
                                <div class="product-badge" style="background-color: #ff69b4;">Promo</div>
                                <a href="#" class="quick-view" title="Lihat Detail">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">
                                    <a href="#">Serum Wajah Anti Aging</a>
                                </h3>
                                <div class="product-rating">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <span class="rating-text">(200 ulasan)</span>
                                </div>
                                <div class="product-price">
                                    <span class="discount-price">Rp 350.000</span>
                                </div>
                                <a href="#" class="btn btn-sm btn-primary add-to-cart-btn">
                                    <i class="fas fa-shopping-cart me-1"></i> Tambah ke Keranjang
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Produk Lainnya -->
                    <div class="col-lg-4 col-md-6 product-item" data-category="lainnya">
                        <div class="product-card">
                            <div class="product-image">
                                <a href="#">
                                    <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2023/6/1/5e5e5e5e-5e5e-4e4e-9e9e-5e5e5e5e5e5e.jpg"
                                        alt="Produk Lainnya" class="img-fluid"
                                        onerror="this.src='assets/img/no-image.png'">
                                </a>
                                <a href="#" class="quick-view" title="Lihat Detail">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">
                                    <a href="#">Produk Unik dan Kreatif</a>
                                </h3>
                                <div class="product-rating">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <span class="rating-text">(50 ulasan)</span>
                                </div>
                                <div class="product-price">
                                    <span class="discount-price">Rp 120.000</span>
                                </div>
                                <a href="#" class="btn btn-sm btn-primary add-to-cart-btn">
                                    <i class="fas fa-shopping-cart me-1"></i> Tambah ke Keranjang
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Tambahkan produk lain sesuai kebutuhan -->
                </div>

                <!-- Pagination -->
                <div class="row mt-5">
                    <div class="col-12">
                        <nav aria-label="Product pagination">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"
                                        aria-disabled="true">Sebelumnya</a></li>
                                <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Berikutnya</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle (Popper + Bootstrap JS) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script Filter Kategori -->
    <script>
        document.querySelectorAll('.category-link').forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();

                // Hapus class active dari semua link
                document.querySelectorAll('.category-link').forEach(l => l.classList.remove('active'));
                // Tambah class active ke link yang diklik
                this.classList.add('active');

                const category = this.getAttribute('data-category');
                const products = document.querySelectorAll('.product-item');

                products.forEach(product => {
                    if (category === 'all') {
                        product.style.display = 'block';
                    } else {
                        if (product.getAttribute('data-category') === category) {
                            product.style.display = 'block';
                        } else {
                            product.style.display = 'none';
                        }
                    }
                });
            });
        });
    </script>

</body>

</html>