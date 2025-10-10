<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div>
                                <h4 class="card-title mb-1 text-primary fw-bold">Laporan Keuangan</h4>
                                <p class="card-description text-muted mb-0">
                                    Pantau arus kas masuk dan keluar dari seluruh transaksi di platform UMKM.
                                </p>
                            </div>
                            <button class="btn btn-outline-primary rounded-pill px-4" onclick="window.print()">
                                <i class="ti-printer me-1"></i> Cetak Semua
                            </button>
                        </div>

                        <!-- Table -->
                        <div class="table-responsive">
                            <table class="table table-hover align-middle text-center" id="tabelKeuangan">
                                <thead class="table-primary text-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Keterangan</th>
                                        <th>Pemasukan</th>
                                        <th>Pengeluaran</th>
                                        <th>Saldo</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="dataKeuangan">
                                    <tr>
                                        <td>1</td>
                                        <td>09 Okt 2025</td>
                                        <td>Penjualan Produk "After Effects Pro"</td>
                                        <td>Rp 820.000</td>
                                        <td>-</td>
                                        <td>Rp 820.000</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-info rounded-pill px-3"
                                                data-bs-toggle="modal" data-bs-target="#detailModal"
                                                data-tanggal="09 Okt 2025"
                                                data-keterangan='Penjualan Produk "After Effects Pro"'
                                                data-jenis="Pemasukan" data-jumlah="Rp 820.000" data-saldo="Rp 820.000">
                                                <i class="ti-eye"></i> Detail
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot class="table-light fw-bold">
                                    <tr>
                                        <td colspan="3" class="text-end">Total:</td>
                                        <td id="totalPemasukan" class="text-success">Rp 820.000</td>
                                        <td id="totalPengeluaran" class="text-danger">Rp 0</td>
                                        <td id="totalSaldo" class="text-primary">Rp 820.000</td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                        <!-- Tombol Tambah Transaksi -->
                        <div class="d-flex justify-content-center mt-5">
                            <button class="btn btn-primary rounded-pill px-4 py-2 shadow-sm" data-bs-toggle="modal"
                                data-bs-target="#tambahTransaksiModal">
                                <i class="ti-plus me-1"></i> Tambah Transaksi
                            </button>
                        </div>

                        <!-- Keterangan -->
                        <div class="mt-5 p-4 bg-light rounded-3">
                            <h6 class="fw-bold mb-3 text-primary">Keterangan:</h6>
                            <ul class="list-unstyled mb-0 small text-muted">
                                <li class="mb-2"><strong>Pemasukan</strong> — Uang yang diterima dari hasil penjualan
                                    atau pendapatan
                                    lain.</li>
                                <li class="mb-2"><strong>Pengeluaran</strong> — Biaya yang dikeluarkan untuk
                                    operasional, promosi, atau
                                    maintenance.</li>
                                <li><strong>Saldo</strong> — Total akhir dari pemasukan dikurangi pengeluaran.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Transaksi -->
<div class="modal fade" id="tambahTransaksiModal" tabindex="-1" aria-labelledby="tambahTransaksiLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content shadow-lg border-0">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title fw-bold" id="tambahTransaksiLabel">Tambah Transaksi Baru</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formTransaksi">
                    <div class="mb-3">
                        <label for="tanggal" class="form-label fw-semibold">Tanggal Transaksi</label>
                        <input type="date" class="form-control" id="tanggal" required>
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label fw-semibold">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan"
                            placeholder="Contoh: Pembelian Bahan Kemasan" required>
                    </div>
                    <div class="mb-3">
                        <label for="jenis" class="form-label fw-semibold">Jenis Transaksi</label>
                        <select class="form-select" id="jenis" required>
                            <option value="">-- Pilih Jenis --</option>
                            <option value="pemasukan">Pemasukan</option>
                            <option value="pengeluaran">Pengeluaran</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="jumlah" class="form-label fw-semibold">Jumlah (Rp)</label>
                        <input type="number" class="form-control" id="jumlah" placeholder="Masukkan nominal" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Batal</button>
                <button type="submit" form="formTransaksi" class="btn btn-primary rounded-pill">Simpan
                    Transaksi</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Detail Transaksi -->
<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content shadow-lg border-0">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title fw-bold" id="detailModalLabel">Detail Transaksi</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Tanggal:</strong> <span id="detailTanggal"></span></li>
                    <li class="list-group-item"><strong>Keterangan:</strong> <span id="detailKeterangan"></span>
                    </li>
                    <li class="list-group-item"><strong>Jenis Transaksi:</strong> <span id="detailJenis"></span>
                    </li>
                    <li class="list-group-item"><strong>Jumlah:</strong> <span id="detailJumlah"></span></li>
                    <li class="list-group-item"><strong>Saldo Setelah Transaksi:</strong> <span id="detailSaldo"></span>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary rounded-pill" onclick="printDetail()">
                    <i class="ti-printer me-1"></i> Cetak Transaksi Ini
                </button>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    const dataKeuangan = document.getElementById('dataKeuangan');
    const formTransaksi = document.getElementById('formTransaksi');

    let totalPemasukan = 820000;
    let totalPengeluaran = 0;
    let saldo = 820000;
    let nomor = 1;

    formTransaksi.addEventListener('submit', function (e) {
        e.preventDefault();

        const tanggal = document.getElementById('tanggal').value;
        const keterangan = document.getElementById('keterangan').value;
        const jenis = document.getElementById('jenis').value;
        const jumlah = parseInt(document.getElementById('jumlah').value);

        let pemasukan = '-';
        let pengeluaran = '-';

        if (jenis === 'pemasukan') {
            pemasukan = `Rp ${jumlah.toLocaleString()}`;
            totalPemasukan += jumlah;
            saldo += jumlah;
        } else {
            pengeluaran = `Rp ${jumlah.toLocaleString()}`;
            totalPengeluaran += jumlah;
            saldo -= jumlah;
        }

        nomor++;

        const row = document.createElement('tr');
        row.innerHTML = `
      <td>${nomor}</td>
      <td>${new Date(tanggal).toLocaleDateString('id-ID')}</td>
      <td>${keterangan}</td>
      <td>${pemasukan}</td>
      <td>${pengeluaran}</td>
      <td>Rp ${saldo.toLocaleString()}</td>
      <td>
        <button class="btn btn-sm btn-outline-info rounded-pill px-3"
          data-bs-toggle="modal"
          data-bs-target="#detailModal"
          data-tanggal="${new Date(tanggal).toLocaleDateString('id-ID')}"
          data-keterangan="${keterangan}"
          data-jenis="${jenis === 'pemasukan' ? 'Pemasukan' : 'Pengeluaran'}"
          data-jumlah="Rp ${jumlah.toLocaleString()}"
          data-saldo="Rp ${saldo.toLocaleString()}">
          <i class="ti-eye"></i> Detail
        </button>
      </td>
    `;
        dataKeuangan.appendChild(row);

        document.getElementById('totalPemasukan').textContent = `Rp ${totalPemasukan.toLocaleString()}`;
        document.getElementById('totalPengeluaran').textContent = `Rp ${totalPengeluaran.toLocaleString()}`;
        document.getElementById('totalSaldo').textContent = `Rp ${saldo.toLocaleString()}`;

        formTransaksi.reset();
        const modal = bootstrap.Modal.getInstance(document.getElementById('tambahTransaksiModal'));
        modal.hide();
    });

    // Detail Modal handler
    const detailModal = document.getElementById('detailModal');
    detailModal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        document.getElementById('detailTanggal').textContent = button.getAttribute('data-tanggal');
        document.getElementById('detailKeterangan').textContent = button.getAttribute('data-keterangan');
        document.getElementById('detailJenis').textContent = button.getAttribute('data-jenis');
        document.getElementById('detailJumlah').textContent = button.getAttribute('data-jumlah');
        document.getElementById('detailSaldo').textContent = button.getAttribute('data-saldo');
    });

    function printDetail() {
        const content = document.querySelector('#detailModal .modal-body').innerHTML;
        const win = window.open('', '', 'width=600,height=400');
        win.document.write('<html><head><title>Cetak Transaksi</title></head><body>');
        win.document.write('<h3>Detail Transaksi</h3>');
        win.document.write('<ul style="list-style:none;padding:0;">' + content + '</ul>');
        win.document.write('</body></html>');
        win.document.close();
        win.print();
    }
</script>