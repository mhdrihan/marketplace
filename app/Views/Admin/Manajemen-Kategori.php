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
                                                    data-bs-target="#editKategoriModal<?= $category['category_id'] ?>">
                                                    <i class="ti-pencil"></i>
                                                </button>
                                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#hapusKategoriModal<?= $category['category_id'] ?>">
                                                    <i class="ti-trash"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <!-- Modal Edit Kategori -->
                                        <div class="modal fade" id="editKategoriModal<?= $category['category_id'] ?>"
                                            tabindex="-1"
                                            aria-labelledby="editKategoriModalLabel<?= $category['category_id'] ?>"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-warning text-white">
                                                        <h5 class="modal-title"
                                                            id="editKategoriModalLabel<?= $category['category_id'] ?>">
                                                            Edit Kategori
                                                        </h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form id="formEditKategori<?= $category['category_id'] ?>"
                                                            action="<?= base_url('Kategori/update/' . $category['category_id']) ?>"
                                                            method="post">
                                                            <?= csrf_field() ?>
                                                            <div class="mb-3">
                                                                <label class="form-label">Nama Kategori</label>
                                                                <input type="text" name="name" class="form-control"
                                                                    value="<?= $category['name'] ?>" required />
                                                            </div>

                                                            <div class="mb-3">
                                                                <label class="form-label">Status</label>
                                                                <select name="status" class="form-control" required>
                                                                    <option value="active"
                                                                        <?= ($category['status'] == 'active') ? 'selected' : '' ?>>
                                                                        Active</option>
                                                                    <option value="unactive"
                                                                        <?= ($category['status'] == 'unactive') ? 'selected' : '' ?>>
                                                                        Unactive</option>
                                                                </select>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit"
                                                            form="formEditKategori<?= $category['category_id'] ?>"
                                                            class="btn btn-warning">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
</div>