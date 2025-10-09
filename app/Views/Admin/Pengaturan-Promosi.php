<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Manajemen Promo</h4>
                        <p class="card-description">
                            Daftar promo yang tersedia di sistem
                        </p>
                        <div class="d-flex justify-content-end mb-3">
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#tambahPromoModal">
                                <i class="ti-plus"></i> Tambah Promo
                            </button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Promo</th>
                                        <th>Diskon</th>
                                        <th>Periode</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Promo Akhir Tahun</td>
                                        <td>30%</td>
                                        <td>01-12-2025 s/d 31-12-2025</td>
                                        <td><label class="badge badge-success">Aktif</label></td>
                                        <td>
                                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#editPromoModal1"><i class="ti-pencil"></i></button>
                                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#hapusPromoModal1"><i class="ti-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Promo Hari Kemerdekaan</td>
                                        <td>17%</td>
                                        <td>01-08-2025 s/d 17-08-2025</td>
                                        <td><label class="badge badge-secondary">Nonaktif</label></td>
                                        <td>
                                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#editPromoModal2"><i class="ti-pencil"></i></button>
                                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#hapusPromoModal2"><i class="ti-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Promo Ramadhan</td>
                                        <td>25%</td>
                                        <td>01-03-2025 s/d 30-03-2025</td>
                                        <td><label class="badge badge-warning">Segera</label></td>
                                        <td>
                                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#editPromoModal3"><i class="ti-pencil"></i></button>
                                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#hapusPromoModal3"><i class="ti-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Promo -->
<div class="modal fade" id="tambahPromoModal" tabindex="-1" aria-labelledby="tambahPromoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="tambahPromoModalLabel">Tambah Promo Baru</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="formTambahPromo">
                    <div class="mb-3">
                        <label class="form-label">Judul Promo</label>
                        <input type="text" class="form-control" placeholder="Masukkan judul promo" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Diskon (%)</label>
                        <input type="number" class="form-control" placeholder="Contoh: 20" min="0" max="100" required />
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Tanggal Mulai</label>
                            <input type="date" class="form-control" required />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Tanggal Selesai</label>
                            <input type="date" class="form-control" required />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-control" required>
                            <option value="aktif">Aktif</option>
                            <option value="nonaktif">Nonaktif</option>
                            <option value="segera">Segera</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi Promo</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" form="formTambahPromo" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Promo -->
<div class="modal fade" id="editPromoModal1" tabindex="-1" aria-labelledby="editPromoModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="editPromoModalLabel1">Edit Promo Akhir Tahun</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="formEditPromo1">
                    <div class="mb-3">
                        <label class="form-label">Judul Promo</label>
                        <input type="text" class="form-control" value="Promo Akhir Tahun" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Diskon (%)</label>
                        <input type="number" class="form-control" value="30" min="0" max="100" required />
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Tanggal Mulai</label>
                            <input type="date" class="form-control" value="2025-12-01" required />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Tanggal Selesai</label>
                            <input type="date" class="form-control" value="2025-12-31" required />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-control" required>
                            <option value="aktif" selected>Aktif</option>
                            <option value="nonaktif">Nonaktif</option>
                            <option value="segera">Segera</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi Promo</label>
                        <textarea class="form-control" rows="3">Deskripsi promo akhir tahun...</textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" form="formEditPromo1" class="btn btn-warning">Update</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Promo 2 -->
<div class="modal fade" id="editPromoModal2" tabindex="-1" aria-labelledby="editPromoModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="editPromoModalLabel2">Edit Promo Hari Kemerdekaan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="formEditPromo2">
                    <div class="mb-3">
                        <label class="form-label">Judul Promo</label>
                        <input type="text" class="form-control" value="Promo Hari Kemerdekaan" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Diskon (%)</label>
                        <input type="number" class="form-control" value="17" min="0" max="100" required />
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Tanggal Mulai</label>
                            <input type="date" class="form-control" value="2025-08-01" required />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Tanggal Selesai</label>
                            <input type="date" class="form-control" value="2025-08-17" required />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-control" required>
                            <option value="aktif">Aktif</option>
                            <option value="nonaktif" selected>Nonaktif</option>
                            <option value="segera">Segera</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi Promo</label>
                        <textarea class="form-control" rows="3">Deskripsi promo hari kemerdekaan...</textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" form="formEditPromo2" class="btn btn-warning">Update</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Promo 3 -->
<div class="modal fade" id="editPromoModal3" tabindex="-1" aria-labelledby="editPromoModalLabel3" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="editPromoModalLabel3">Edit Promo Ramadhan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="formEditPromo3">
                    <div class="mb-3">
                        <label class="form-label">Judul Promo</label>
                        <input type="text" class="form-control" value="Promo Ramadhan" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Diskon (%)</label>
                        <input type="number" class="form-control" value="25" min="0" max="100" required />
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Tanggal Mulai</label>
                            <input type="date" class="form-control" value="2025-03-01" required />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Tanggal Selesai</label>
                            <input type="date" class="form-control" value="2025-03-30" required />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-control" required>
                            <option value="aktif">Aktif</option>
                            <option value="nonaktif">Nonaktif</option>
                            <option value="segera" selected>Segera</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi Promo</label>
                        <textarea class="form-control" rows="3">Deskripsi promo ramadhan...</textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" form="formEditPromo3" class="btn btn-warning">Update</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Hapus Promo -->
<div class="modal fade" id="hapusPromoModal1" tabindex="-1" aria-labelledby="hapusPromoModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="hapusPromoModalLabel1">Hapus Promo Akhir Tahun</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus promo <strong>Promo Akhir Tahun</strong>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger">Hapus</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="hapusPromoModal2" tabindex="-1" aria-labelledby="hapusPromoModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="hapusPromoModalLabel2">Hapus Promo Hari Kemerdekaan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus promo <strong>Promo Hari Kemerdekaan</strong>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger">Hapus</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="hapusPromoModal3" tabindex="-1" aria-labelledby="hapusPromoModalLabel3" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="hapusPromoModalLabel3">Hapus Promo Ramadhan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus promo <strong>Promo Ramadhan</strong>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger">Hapus</button>
            </div>
        </div>
    </div>
</div>
</div>