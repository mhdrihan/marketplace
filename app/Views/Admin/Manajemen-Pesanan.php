<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h4 class="card-title mb-3 text-primary fw-bold">Daftar Pesanan</h4>
                        <p class="card-description text-muted">
                            Kelola seluruh pesanan pelanggan dengan mudah dan pantau status pemesanan di bawah ini.
                        </p>

                        <!-- Tabel Pesanan -->
                        <div class="table-responsive">
                            <table class="table table-hover align-middle text-center" id="tabelPesanan">
                                <thead class="table-primary text-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pembeli</th>
                                        <th>Produk</th>
                                        <th>Total Harga</th>
                                        <th>Status</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr data-nama="Jacob" data-produk="Photoshop CC License" data-harga="Rp 280.000"
                                        data-status="Pending" data-tanggal="09 Okt 2025"
                                        data-catatan="Pembayaran sedang diverifikasi oleh sistem.">
                                        <td>1</td>
                                        <td>Jacob</td>
                                        <td>Photoshop CC License</td>
                                        <td>Rp 280.000</td>
                                        <td><span class="badge rounded-pill bg-danger px-3 py-2">Pending</span></td>
                                        <td>09 Okt 2025</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-info rounded-pill px-3 btn-detail">
                                                <i class="ti-eye"></i> Detail
                                            </button>
                                        </td>
                                    </tr>
                                    <tr data-nama="Messsy" data-produk="Flash Animation" data-harga="Rp 210.000"
                                        data-status="Proses" data-tanggal="08 Okt 2025"
                                        data-catatan="Pesanan sedang dikemas dan menunggu pengiriman.">
                                        <td>2</td>
                                        <td>Messsy</td>
                                        <td>Flash Animation</td>
                                        <td>Rp 210.000</td>
                                        <td><span
                                                class="badge rounded-pill bg-warning text-dark px-3 py-2">Proses</span>
                                        </td>
                                        <td>08 Okt 2025</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-info rounded-pill px-3 btn-detail">
                                                <i class="ti-eye"></i> Detail
                                            </button>
                                        </td>
                                    </tr>
                                    <tr data-nama="John" data-produk="Adobe Premiere" data-harga="Rp 350.000"
                                        data-status="Diperbaiki" data-tanggal="08 Okt 2025"
                                        data-catatan="Ada kendala pada file, sedang diperbaiki.">
                                        <td>3</td>
                                        <td>John</td>
                                        <td>Adobe Premiere</td>
                                        <td>Rp 350.000</td>
                                        <td><span
                                                class="badge rounded-pill bg-info text-dark px-3 py-2">Diperbaiki</span>
                                        </td>
                                        <td>08 Okt 2025</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-info rounded-pill px-3 btn-detail">
                                                <i class="ti-eye"></i> Detail
                                            </button>
                                        </td>
                                    </tr>
                                    <tr data-nama="Peter" data-produk="After Effects Pro" data-harga="Rp 820.000"
                                        data-status="Selesai" data-tanggal="07 Okt 2025"
                                        data-catatan="Pesanan telah dikirim dan diterima oleh pembeli.">
                                        <td>4</td>
                                        <td>Peter</td>
                                        <td>After Effects Pro</td>
                                        <td>Rp 820.000</td>
                                        <td><span class="badge rounded-pill bg-success px-3 py-2">Selesai</span></td>
                                        <td>07 Okt 2025</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-info rounded-pill px-3 btn-detail">
                                                <i class="ti-eye"></i> Detail
                                            </button>
                                        </td>
                                    </tr>
                                    <tr data-nama="Dave" data-produk="Sound Pack Bundle" data-harga="Rp 980.000"
                                        data-status="Dibatalkan" data-tanggal="07 Okt 2025"
                                        data-catatan="Pesanan dibatalkan oleh pembeli.">
                                        <td>5</td>
                                        <td>Dave</td>
                                        <td>Sound Pack Bundle</td>
                                        <td>Rp 980.000</td>
                                        <td><span class="badge rounded-pill bg-secondary px-3 py-2">Dibatalkan</span>
                                        </td>
                                        <td>07 Okt 2025</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-info rounded-pill px-3 btn-detail">
                                                <i class="ti-eye"></i> Detail
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <nav aria-label="Page navigation" class="mt-4">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#">Sebelumnya</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Berikutnya</a>
                                </li>
                            </ul>
                        </nav>

                        <!-- Keterangan Status -->
                        <div class="mt-5">
                            <div class="p-4 rounded-4 shadow-sm" style="background-color: #f7f8fc;">
                                <h6 class="fw-bold mb-3 text-primary">Keterangan Status:</h6>
                                <ul class="list-unstyled mb-0 small">
                                    <li class="mb-3">
                                        <span class="badge rounded-pill bg-danger px-3 py-2 me-2">Pending</span>
                                        <strong>Pesanan belum dikonfirmasi oleh penjual.</strong>
                                    </li>
                                    <li class="mb-3">
                                        <span
                                            class="badge rounded-pill bg-warning text-dark px-3 py-2 me-2">Proses</span>
                                        <strong>Pesanan sedang diproses atau dikemas.</strong>
                                    </li>
                                    <li class="mb-3">
                                        <span
                                            class="badge rounded-pill bg-info text-dark px-3 py-2 me-2">Diperbaiki</span>
                                        <strong>Ada revisi atau kendala dalam pesanan.</strong>
                                    </li>
                                    <li class="mb-3">
                                        <span class="badge rounded-pill bg-success px-3 py-2 me-2">Selesai</span>
                                        <strong>Pesanan sudah diterima oleh pembeli.</strong>
                                    </li>
                                    <li>
                                        <span class="badge rounded-pill bg-secondary px-3 py-2 me-2">Dibatalkan</span>
                                        <strong>Pesanan dibatalkan oleh pembeli atau penjual.</strong>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Akhir Card Body -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- MODAL DINAMIS DETAIL PESANAN -->
<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="detailModalLabel">Detail Pesanan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modalDetailBody">
                <!-- Detail pesanan akan diisi otomatis dengan JavaScript -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Script Modal Dinamis -->
<script>
    document.querySelectorAll(".btn-detail").forEach(button => {
        button.addEventListener("click", () => {
            const row = button.closest("tr");
            const nama = row.dataset.nama;
            const produk = row.dataset.produk;
            const harga = row.dataset.harga;
            const status = row.dataset.status;
            const tanggal = row.dataset.tanggal;
            const catatan = row.dataset.catatan;

            document.getElementById("detailModalLabel").textContent = `Detail Pesanan - ${nama}`;
            document.getElementById("modalDetailBody").innerHTML = `
        <p><strong>Nama Pembeli:</strong> ${nama}</p>
        <p><strong>Produk:</strong> ${produk}</p>
        <p><strong>Total Harga:</strong> ${harga}</p>
        <p><strong>Status:</strong> ${status}</p>
        <p><strong>Tanggal Pemesanan:</strong> ${tanggal}</p>
        <p><strong>Catatan:</strong> ${catatan}</p>
      `;

            const modal = new bootstrap.Modal(document.getElementById("detailModal"));
            modal.show();
        });
    });
</script>