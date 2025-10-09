<div class="container my-5">
    <h2 class="mb-4 text-center">Keranjang Belanja</h2>

    <div class="row">
        <!-- Daftar Produk -->
        <div class="col-lg-8">
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body">
                    <table class="table table-bordered align-middle">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">Produk</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Subtotal</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Item 1 -->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://via.placeholder.com/80" class="me-3 rounded" alt="Produk A">
                                        <div>
                                            <h6 class="mb-0">Produk A</h6>
                                            <small class="text-muted">Kategori: Fashion</small>
                                        </div>
                                    </div>
                                </td>
                                <td>Rp 150.000</td>
                                <td>
                                    <input type="number" class="form-control form-control-sm" value="2" min="1"
                                        style="width: 70px;">
                                </td>
                                <td>Rp 300.000</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-outline-danger">
                                        <i class="fas fa-trash"></i> Hapus
                                    </a>
                                </td>
                            </tr>

                            <!-- Item 2 -->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://via.placeholder.com/80" class="me-3 rounded" alt="Produk B">
                                        <div>
                                            <h6 class="mb-0">Produk B</h6>
                                            <small class="text-muted">Kategori: Elektronik</small>
                                        </div>
                                    </div>
                                </td>
                                <td>Rp 250.000</td>
                                <td>
                                    <input type="number" class="form-control form-control-sm" value="1" min="1"
                                        style="width: 70px;">
                                </td>
                                <td>Rp 250.000</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-outline-danger">
                                        <i class="fas fa-trash"></i> Hapus
                                    </a>
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
                    <h5 class="card-title">Ringkasan Belanja</h5>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Subtotal</span>
                        <strong>Rp 550.000</strong>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Ongkir</span>
                        <strong>Rp 20.000</strong>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mb-3">
                        <span>Total</span>
                        <strong>Rp 570.000</strong>
                    </div>
                    <a href="#" class="btn btn-primary w-100 mb-2">
                        <i class="fas fa-credit-card"></i> Checkout
                    </a>
                    <a href="#" class="btn btn-outline-secondary w-100">
                        <i class="fas fa-shopping-bag"></i> Lanjut Belanja
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Pesan jika keranjang kosong -->
    <!--
    <div class="alert alert-info text-center mt-4">
        <i class="fas fa-info-circle"></i> Keranjang belanja Anda masih kosong.
    </div>
    -->
</div>