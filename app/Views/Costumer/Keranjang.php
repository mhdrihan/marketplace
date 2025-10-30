<div class="container my-5">
    <h2 class="mb-4 text-center fw-bold text-primary">🛒 Keranjang Belanja</h2>

    <?php if (!empty($cart)): ?>
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
                                <?php $subtotalAll = 0; ?>
                                <?php foreach ($cart as $item): ?>
                                    <?php $subtotal = $item['price'] * $item['quantity']; ?>
                                    <?php $subtotalAll += $subtotal; ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="/uploads/products/<?= esc($item['image_url']) ?>" class="me-3 rounded"
                                                    width="80" alt="<?= esc($item['name']) ?>">
                                                <div class="text-start">
                                                    <h6 class="mb-0 fw-semibold"><?= esc($item['name']) ?></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Rp <?= number_format($item['price'], 0, ',', '.') ?></td>
                                        <td>
                                            <div class="input-group input-group-sm justify-content-center">
                                                <button type="button" class="btn btn-outline-secondary btn-decrease"
                                                    data-id="<?= $item['product_id'] ?>">−</button>
                                                <input type="number" class="form-control text-center qty-input"
                                                    data-id="<?= $item['product_id'] ?>" value="<?= $item['quantity'] ?>"
                                                    min="1" style="width: 60px;">
                                                <button type="button" class="btn btn-outline-secondary btn-increase"
                                                    data-id="<?= $item['product_id'] ?>">+</button>
                                            </div>
                                        </td>
                                        <td id="subtotal-<?= $item['product_id'] ?>">Rp
                                            <?= number_format($subtotal, 0, ',', '.') ?></td>
                                        <td>
                                            <a href="<?= base_url('keranjang/remove_cart/' . $item['product_id']) ?>"
                                                class="btn btn-sm btn-outline-danger">
                                                <i class="fas fa-trash"></i> Hapus
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
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
                            <strong id="subtotalText">Rp <?= number_format($subtotalAll, 0, ',', '.') ?></strong>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Ongkir</span>
                            <strong id="ongkirText">Rp 20.000</strong>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between mb-3 fs-5">
                            <span>Total</span>
                            <strong id="totalText">Rp <?= number_format($subtotalAll + 20000, 0, ',', '.') ?></strong>
                        </div>
                        <a href="<?= base_url('cart/checkout') ?>" class="btn btn-primary w-100 mb-2">
                            <i class="fas fa-credit-card"></i> Checkout
                        </a>
                        <a href="<?= base_url('/') ?>" class="btn btn-outline-secondary w-100">
                            <i class="fas fa-shopping-bag"></i> Lanjut Belanja
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div id="emptyMessage" class="alert alert-info text-center mt-4">
            <i class="fas fa-info-circle"></i> Keranjang belanja Anda masih kosong.
        </div>
    <?php endif; ?>
</div>