<div class="container my-5">
    <h2 class="mb-4 text-center">Daftar Pesanan Saya</h2>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <table class="table table-hover table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Produk</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Total</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Pesanan 1 -->
                    <tr>
                        <td>1</td>
                        <td>05/09/2025</td>
                        <td>Produk A</td>
                        <td>2</td>
                        <td>Rp 300.000</td>
                        <td><span class="badge bg-warning text-dark">Proses</span></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">
                                <i class="fas fa-eye"></i> Detail
                            </a>
                        </td>
                    </tr>
                    <!-- Pesanan 2 -->
                    <tr>
                        <td>2</td>
                        <td>28/08/2025</td>
                        <td>Produk B</td>
                        <td>1</td>
                        <td>Rp 150.000</td>
                        <td><span class="badge bg-success">Selesai</span></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-outline-success">
                                <i class="fas fa-download"></i> Invoice
                            </a>
                        </td>
                    </tr>
                    <!-- Pesanan 3 -->
                    <tr>
                        <td>3</td>
                        <td>20/08/2025</td>
                        <td>Produk C</td>
                        <td>3</td>
                        <td>Rp 450.000</td>
                        <td><span class="badge bg-danger">Dibatalkan</span></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-outline-secondary">
                                <i class="fas fa-info-circle"></i> Lihat
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- Pagination Dummy -->
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center mt-3">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>