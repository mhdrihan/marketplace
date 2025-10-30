<div class="container my-5">
    <div class="row">
        <!-- Sidebar Kategori -->
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
        </div>

        <!-- Konten Produk -->
        <div class="col-lg-9">
            <section id="produk">
                <h2 class="section-title"><?= esc($selectedCategory) ?></h2>
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
                                        <div class="product-price">
                                            Rp <?= number_format($product['price'], 0, ',', '.') ?>
                                        </div>
                                        <button class="add-to-cart-btn">
                                            <i class="fas fa-cart-plus"></i> Tambah ke Keranjang
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <h4 class="text-center">Belum ada produk untuk kategori ini.</h4>
                    <?php endif; ?>
                </div>
            </section>
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