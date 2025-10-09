<div class="container my-5">
    <h2 class="mb-4 text-center">Daftar Produk</h2>

    <!-- Filter & Search -->
    <div class="row mb-4">
        <div class="col-md-4">
            <select class="form-select">
                <option selected>Semua Kategori</option>
                <option value="1">Fashion</option>
                <option value="2">Elektronik</option>
                <option value="3">Makanan</option>
            </select>
        </div>
        <div class="col-md-4 offset-md-4">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari produk...">
                <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </div>

    <!-- Produk Grid -->
    <div class="row g-4">
        <!-- Produk 1 -->
        <div class="col-md-3">
            <div class="card h-100 shadow-sm border-0">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Produk A">
                <div class="card-body">
                    <h5 class="card-title">Produk A</h5>
                    <p class="card-text text-muted">Rp 150.000</p>
                    <p class="card-text"><small class="text-muted">Kategori: Fashion</small></p>
                    <a href="#" class="btn btn-sm btn-primary">Lihat Detail</a>
                    <a href="#" class="btn btn-sm btn-outline-success"><i class="fas fa-cart-plus"></i> Keranjang</a>
                </div>
            </div>
        </div>

        <!-- Produk 2 -->
        <div class="col-md-3">
            <div class="card h-100 shadow-sm border-0">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Produk B">
                <div class="card-body">
                    <h5 class="card-title">Produk B</h5>
                    <p class="card-text text-muted">Rp 250.000</p>
                    <p class="card-text"><small class="text-muted">Kategori: Elektronik</small></p>
                    <a href="#" class="btn btn-sm btn-primary">Lihat Detail</a>
                    <a href="#" class="btn btn-sm btn-outline-success"><i class="fas fa-cart-plus"></i> Keranjang</a>
                </div>
            </div>
        </div>

        <!-- Produk 3 -->
        <div class="col-md-3">
            <div class="card h-100 shadow-sm border-0">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Produk C">
                <div class="card-body">
                    <h5 class="card-title">Produk C</h5>
                    <p class="card-text text-muted">Rp 100.000</p>
                    <p class="card-text"><small class="text-muted">Kategori: Makanan</small></p>
                    <a href="#" class="btn btn-sm btn-primary">Lihat Detail</a>
                    <a href="#" class="btn btn-sm btn-outline-success"><i class="fas fa-cart-plus"></i> Keranjang</a>
                </div>
            </div>
        </div>

        <!-- Produk 4 -->
        <div class="col-md-3">
            <div class="card h-100 shadow-sm border-0">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Produk D">
                <div class="card-body">
                    <h5 class="card-title">Produk D</h5>
                    <p class="card-text text-muted">Rp 300.000</p>
                    <p class="card-text"><small class="text-muted">Kategori: Fashion</small></p>
                    <a href="#" class="btn btn-sm btn-primary">Lihat Detail</a>
                    <a href="#" class="btn btn-sm btn-outline-success"><i class="fas fa-cart-plus"></i> Keranjang</a>
                </div>
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