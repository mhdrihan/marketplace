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
                                        <button class="add-to-cart-btn" data-id="<?= $product['product_id'] ?>"
                                            data-name="<?= $product['product_name'] ?>" data-price="<?= $product['price'] ?>">
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