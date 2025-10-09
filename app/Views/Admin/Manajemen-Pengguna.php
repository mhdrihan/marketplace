<!-- Isi Body Halaman Manajemen Pengguna -->
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-12">
            <h2 class="mb-4">Manajemen Pengguna</h2>

            <!-- Nav Tabs -->
            <ul class="nav nav-tabs" id="userManagementTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="penjual-tab" data-bs-toggle="tab" data-bs-target="#penjual"
                        type="button" role="tab" aria-controls="penjual" aria-selected="true">
                        Daftar Penjual
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pembeli-tab" data-bs-toggle="tab" data-bs-target="#pembeli"
                        type="button" role="tab" aria-controls="pembeli" aria-selected="false">
                        Daftar Pembeli
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="verifikasi-tab" data-bs-toggle="tab" data-bs-target="#verifikasi"
                        type="button" role="tab" aria-controls="verifikasi" aria-selected="false">
                        Verifikasi Akun
                    </button>
                </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content" id="userManagementTabsContent">
                <!-- Tab Daftar Penjual -->
                <div class="tab-pane fade show active" id="penjual" role="tabpanel" aria-labelledby="penjual-tab"
                    tabindex="0">
                    <div class="mt-3">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Penjual</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>John Doe</td>
                                        <td>john@example.com</td>
                                        <td>Aktif</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Edit</button>
                                            <button class="btn btn-sm btn-danger">Hapus</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jane Smith</td>
                                        <td>jane@example.com</td>
                                        <td>Tidak Aktif</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Edit</button>
                                            <button class="btn btn-sm btn-danger">Hapus</button>
                                        </td>
                                    </tr>
                                    <!-- Tambahkan baris data dummy lainnya sesuai kebutuhan -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Tab Daftar Pembeli -->
                <div class="tab-pane fade" id="pembeli" role="tabpanel" aria-labelledby="pembeli-tab" tabindex="0">
                    <div class="mt-3">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Pembeli</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Alice Johnson</td>
                                        <td>alice@example.com</td>
                                        <td>Aktif</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Edit</button>
                                            <button class="btn btn-sm btn-danger">Hapus</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Bob Wilson</td>
                                        <td>bob@example.com</td>
                                        <td>Aktif</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Edit</button>
                                            <button class="btn btn-sm btn-danger">Hapus</button>
                                        </td>
                                    </tr>
                                    <!-- Tambahkan baris data dummy lainnya sesuai kebutuhan -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Tab Verifikasi Akun -->
                <div class="tab-pane fade" id="verifikasi" role="tabpanel" aria-labelledby="verifikasi-tab"
                    tabindex="0">
                    <div class="mt-3">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Pengguna</th>
                                        <th>Email</th>
                                        <th>Status Verifikasi</th>
                                        <th>Tanggal Permintaan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Charlie Brown</td>
                                        <td>charlie@example.com</td>
                                        <td>Menunggu</td>
                                        <td>2023-10-01</td>
                                        <td>
                                            <button class="btn btn-sm btn-success">Verifikasi</button>
                                            <button class="btn btn-sm btn-warning">Tolak</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Diana Prince</td>
                                        <td>diana@example.com</td>
                                        <td>Terverifikasi</td>
                                        <td>2023-09-15</td>
                                        <td>
                                            <button class="btn btn-sm btn-info">Lihat Detail</button>
                                        </td>
                                    </tr>
                                    <!-- Tambahkan baris data dummy lainnya sesuai kebutuhan -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pastikan Bootstrap JS dan CSS sudah di-include di layout utama CI4 Anda -->
<!-- Contoh: Di header atau footer layout, tambahkan:
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
-->