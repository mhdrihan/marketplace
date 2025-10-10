<div class="container my-5">
    <h2 class="mb-4 text-center fw-bold text-primary">Daftar Produk</h2>

    <!-- Filter & Search -->
    <div class="row mb-4 align-items-center">
        <div class="col-md-4">
            <select class="form-select shadow-sm border-0 rounded-pill">
                <option selected>Semua Kategori</option>
                <option value="1">Fashion</option>
                <option value="2">Elektronik</option>
                <option value="3">Makanan</option>
            </select>
        </div>
        <div class="col-md-4 offset-md-4">
            <div class="input-group shadow-sm">
                <input type="text" class="form-control border-0" placeholder="Cari produk...">
                <button class="btn btn-primary px-3" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Produk List (Vertical Style) -->
    <div class="product-item card mb-4 shadow-sm border-0 p-3">
        <div class="row align-items-center">
            <div class="col-md-3 text-center">
                <img src="https://via.placeholder.com/250x180" class="img-fluid rounded" alt="Produk A">
            </div>
            <div class="col-md-6">
                <h5 class="fw-semibold mb-1">Produk A</h5>
                <p class="text-muted mb-1">Rp 150.000</p>
                <p class="small text-secondary mb-2">Kategori: Fashion</p>
                <span class="badge bg-light text-primary border">Produk Unggulan</span>
            </div>
            <div class="col-md-3 text-md-end text-center mt-3 mt-md-0">
                <a href="#" class="btn btn-sm btn-outline-primary me-2">
                    <i class="fas fa-eye"></i> Detail
                </a>
                <a href="#" class="btn btn-sm btn-success">
                    <i class="fas fa-cart-plus"></i> Keranjang
                </a>
            </div>
        </div>
    </div>

    <div class="product-item card mb-4 shadow-sm border-0 p-3">
        <div class="row align-items-center">
            <div class="col-md-3 text-center">
                <img src="https://via.placeholder.com/250x180" class="img-fluid rounded" alt="Produk B">
            </div>
            <div class="col-md-6">
                <h5 class="fw-semibold mb-1">Produk B</h5>
                <p class="text-muted mb-1">Rp 250.000</p>
                <p class="small text-secondary mb-2">Kategori: Elektronik</p>
                <span class="badge bg-light text-success border">Diskon 10%</span>
            </div>
            <div class="col-md-3 text-md-end text-center mt-3 mt-md-0">
                <a href="#" class="btn btn-sm btn-outline-primary me-2">
                    <i class="fas fa-eye"></i> Detail
                </a>
                <a href="#" class="btn btn-sm btn-success">
                    <i class="fas fa-cart-plus"></i> Keranjang
                </a>
            </div>
        </div>
    </div>

    <div class="product-item card mb-4 shadow-sm border-0 p-3">
        <div class="row align-items-center">
            <div class="col-md-3 text-center">
                <img src="https://via.placeholder.com/250x180" class="img-fluid rounded" alt="Produk C">
            </div>
            <div class="col-md-6">
                <h5 class="fw-semibold mb-1">Produk C</h5>
                <p class="text-muted mb-1">Rp 100.000</p>
                <p class="small text-secondary mb-2">Kategori: Makanan</p>
                <span class="badge bg-light text-warning border">Baru Rilis</span>
            </div>
            <div class="col-md-3 text-md-end text-center mt-3 mt-md-0">
                <a href="#" class="btn btn-sm btn-outline-primary me-2">
                    <i class="fas fa-eye"></i> Detail
                </a>
                <a href="#" class="btn btn-sm btn-success">
                    <i class="fas fa-cart-plus"></i> Keranjang
                </a>
            </div>
        </div>
    </div>

    <div class="product-item card mb-4 shadow-sm border-0 p-3">
        <div class="row align-items-center">
            <div class="col-md-3 text-center">
                <img src="https://via.placeholder.com/250x180" class="img-fluid rounded" alt="Produk D">
            </div>
            <div class="col-md-6">
                <h5 class="fw-semibold mb-1">Produk D</h5>
                <p class="text-muted mb-1">Rp 300.000</p>
                <p class="small text-secondary mb-2">Kategori: Fashion</p>
                <span class="badge bg-light text-danger border">Stok Terbatas</span>
            </div>
            <div class="col-md-3 text-md-end text-center mt-3 mt-md-0">
                <a href="#" class="btn btn-sm btn-outline-primary me-2">
                    <i class="fas fa-eye"></i> Detail
                </a>
                <a href="#" class="btn btn-sm btn-success">
                    <i class="fas fa-cart-plus"></i> Keranjang
                </a>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center mt-4">
            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>
</div>