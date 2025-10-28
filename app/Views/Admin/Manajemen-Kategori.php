<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Kategori Produk</h4>
                        <div class="d-flex justify-content-end mb-3">
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#tambahKategoriModal">
                                <i class="ti-plus"></i> Tambah Kategori
                            </button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>ID Kategori</th>
                                        <th>Nama Kategori</th>
                                        <th>Status</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($categories as $category): ?>
                                        <tr>
                                            <td><?= $category['category_id'] ?></td>
                                            <td><?= $category['name'] ?></td>
                                            <td>
                                                <?php if ($category['status'] === 'active'): ?>
                                                    <span class="btn btn-success btn-sm">
                                                        <i class="ti-check"></i>
                                                    </span>
                                                <?php else: ?>
                                                    <span class="btn btn-danger btn-sm">
                                                        <i class="ti-close"></i>
                                                    </span>
                                                <?php endif; ?>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#editKategoriModal1"><i class="ti-pencil"></i></button>
                                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#hapusKategoriModal1"><i class="ti-trash"></i></button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <!-- <td colspan="6" class="text-end"><strong>Total Kategori: 3</strong></td> -->
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Kategori -->
<div class="modal fade" id="tambahKategoriModal" tabindex="-1" aria-labelledby="tambahKategoriModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="tambahKategoriModalLabel">Tambah Kategori Baru</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="formTambahKategori" action="<?= base_url('Kategori/add_kategori') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="mb-3">
                        <label class="form-label">Nama Kategori</label>
                        <input type="text" name="name" class="form-control" placeholder="Masukkan nama kategori"
                            required />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Kategori 1 -->
<div class="modal fade" id="editKategoriModal1" tabindex="-1" aria-labelledby="editKategoriModalLabel1"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="editKategoriModalLabel1">Edit Kategori Elektronik</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="formEditKategori1">
                    <div class="mb-3">
                        <label class="form-label">ID Kategori</label>
                        <input type="text" class="form-control" value="KTG001" readonly />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" value="Elektronik" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control" rows="3"
                            required>Perangkat elektronik seperti smartphone, laptop, dan aksesoris.</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status Kategori</label>
                        <select class="form-control" required>
                            <option value="aktif" selected>Aktif</option>
                            <option value="nonaktif">Nonaktif</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Dibuat</label>
                        <input type="date" class="form-control" value="2024-01-10" readonly />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Diperbarui</label>
                        <input type="date" class="form-control" value="2024-05-15" readonly />
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" form="formEditKategori1" class="btn btn-warning">Update</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Kategori 2 -->
<div class="modal fade" id="editKategoriModal2" tabindex="-1" aria-labelledby="editKategoriModalLabel2"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="editKategoriModalLabel2">Edit Kategori Fashion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="formEditKategori2">
                    <div class="mb-3">
                        <label class="form-label">ID Kategori</label>
                        <input type="text" class="form-control" value="KTG002" readonly />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" value="Fashion" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control" rows="3"
                            required>Pakaian, sepatu, dan aksesoris fashion lainnya.</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status Kategori</label>
                        <select class="form-control" required>
                            <option value="aktif">Aktif</option>
                            <option value="nonaktif" selected>Nonaktif</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Dibuat</label>
                        <input type="date" class="form-control" value="2023-11-20" readonly />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Diperbarui</label>
                        <input type="date" class="form-control" value="2024-04-01" readonly />
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" form="formEditKategori2" class="btn btn-warning">Update</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Kategori 3 -->
<div class="modal fade" id="editKategoriModal3" tabindex="-1" aria-labelledby="editKategoriModalLabel3"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="editKategoriModalLabel3">Edit Kategori Peralatan Rumah</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="formEditKategori3">
                    <div class="mb-3">
                        <label class="form-label">ID Kategori</label>
                        <input type="text" class="form-control" value="KTG003" readonly />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" value="Peralatan Rumah" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control" rows="3"
                            required>Peralatan dan perlengkapan rumah tangga.</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status Kategori</label>
                        <select class="form-control" required>
                            <option value="aktif" selected>Aktif</option>
                            <option value="nonaktif">Nonaktif</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Dibuat</label>
                        <input type="date" class="form-control" value="2024-02-05" readonly />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Diperbarui</label>
                        <input type="date" class="form-control" value="2024-06-01" readonly />
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" form="formEditKategori3" class="btn btn-warning">Update</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Hapus Kategori 1 -->
<div class="modal fade" id="hapusKategoriModal1" tabindex="-1" aria-labelledby="hapusKategoriModalLabel1"
    aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="hapusKategoriModalLabel1">Hapus Kategori Elektronik</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus kategori <strong>Elektronik</strong>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger">Hapus</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Hapus Kategori 2 -->
<div class="modal fade" id="hapusKategoriModal2" tabindex="-1" aria-labelledby="hapusKategoriModalLabel2"
    aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="hapusKategoriModalLabel2">Hapus Kategori Fashion</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus kategori <strong>Fashion</strong>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger">Hapus</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Hapus Kategori 3 -->
<div class="modal fade" id="hapusKategoriModal3" tabindex="-1" aria-labelledby="hapusKategoriModalLabel3"
    aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="hapusKategoriModalLabel3">Hapus Kategori Peralatan Rumah</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus kategori <strong>Peralatan Rumah</strong>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger">Hapus</button>
            </div>
        </div>
    </div>
</div>
</div>