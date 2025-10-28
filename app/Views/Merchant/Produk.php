<!-- Breadcomb area Start-->
<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="notika-icon notika-edit"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2><?= $shop['shop_name'] ?></h2>
                                    <p>Welcome to Shop <span class="bread-ntd">Nama Toko</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                            <div class="breadcomb-report">
                                <button data-toggle="modal" data-target="#TambahProduk" data-placement="left"
                                    title="Tambah Produk" class="btn">Tambah Produk</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcomb area End-->
<!-- Animateions area start-->
<div class="animation-area">
    <div class="container">
        <div class="row">
            <?php if (!empty($product)): ?>
                <?php foreach ($product as $p): ?>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="animation-single-int">
                            <div class="animation-ctn-hd text-center">
                                <h2><?= esc($p['name']) ?></h2>
                                <p><?= esc($p['description']) ?></p>
                            </div>
                            <div class="animation-img mg-b-15 text-center">
                                <img class="animate-one" src="/uploads/products/<?= esc($p['image_url']) ?>"
                                    alt="<?= esc($p['name']) ?>" style="max-width:100%; height:200px; object-fit:cover;" />
                            </div>
                            <div class="text-center">
                                <p><strong>Rp <?= number_format($p['price'], 0, ',', '.') ?></strong></p>
                                <p>Stok: <?= esc($p['stock']) ?></p>
                            </div>
                            <div class="animation-action text-right mt-3">
                                <!-- Tombol Edit -->
                                <button class="btn btn-warning btn-sm mr-2" data-toggle="modal"
                                    data-target="#EditProduk<?= $p['product_id'] ?>">Edit</button>

                                <!-- Tombol Delete -->
                                <form action="<?= base_url('merchant/delete_produk/' . $p['product_id']) ?>" method="post"
                                    style="display:inline;">
                                    <?= csrf_field() ?>
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus produk ini?')">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Edit Produk -->
                    <div class="modal fade" id="EditProduk<?= $p['product_id'] ?>" tabindex="-1" role="dialog"
                        aria-labelledby="EditProdukLabel<?= $p['product_id'] ?>" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <form action="<?= base_url('merchant/update_produk/' . $p['product_id']) ?>" method="post"
                                    enctype="multipart/form-data">
                                    <?= csrf_field() ?>
                                    <div class="modal-header bg-warning text-white">
                                        <h5 class="modal-title" id="EditProdukLabel<?= $p['product_id'] ?>">Edit Produk:
                                            <?= esc($p['name']) ?></h5>
                                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Nama Produk</label>
                                            <input type="text" name="name" class="form-control" value="<?= esc($p['name']) ?>"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea name="description" class="form-control"
                                                rows="3"><?= esc($p['description']) ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input type="number" name="price" class="form-control"
                                                value="<?= esc($p['price']) ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Stok</label>
                                            <input type="number" name="stock" class="form-control"
                                                value="<?= esc($p['stock']) ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Ganti Gambar (Opsional)</label>
                                            <input type="file" name="image_url" class="form-control">
                                            <small>Gambar saat ini: <?= esc($p['image_url']) ?></small>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-warning">Simpan Perubahan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center">
                    <p>Belum ada produk yang ditambahkan.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- Animateions area End-->
<!-- Modal Tambah Produk -->
<div class="modal fade" id="TambahProduk" role="dialog">
    <div class="modal-dialog modals-default">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="namaProduk">Nama Produk</label>
                    <input type="text" class="form-control" id="namaProduk" name="namaProduk" required>
                </div>

                <div class="form-group">
                    <label for="kategoriProduk">Kategori</label>
                    <select class="form-control" id="kategoriProduk" name="kategoriProduk" required>
                        <option value="">-- Pilih Kategori --</option>
                        <option value="makanan">Makanan</option>
                        <option value="minuman">Minuman</option>
                        <option value="elektronik">Elektronik</option>
                        <option value="fashion">Fashion</option>
                        <option value="kecantikan">Kecantikan</option>
                        <!-- Tambahkan kategori lain jika perlu -->
                    </select>
                </div>

                <div class="form-group">
                    <label for="hargaProduk">Harga</label>
                    <input type="number" class="form-control" id="hargaProduk" name="hargaProduk" required>
                </div>

                <div class="form-group">
                    <label for="stokProduk">Stok</label>
                    <input type="number" class="form-control" id="stokProduk" name="stokProduk" required>
                </div>

                <div class="form-group">
                    <label for="deskripsiProduk">Deskripsi</label>
                    <textarea class="form-control" id="deskripsiProduk" name="deskripsiProduk" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="gambarProduk">Gambar Produk</label>
                    <input type="file" class="form-control-file" id="gambarProduk" name="gambarProduk">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Submit</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Tambah Produk -->
<div class="modal fade" id="EditProduk" role="dialog">
    <div class="modal-dialog modals-default">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="namaProduk">Nama Produk</label>
                    <input type="text" class="form-control" id="namaProduk" name="namaProduk" required>
                </div>

                <div class="form-group">
                    <label for="kategoriProduk">Kategori</label>
                    <select class="form-control" id="kategoriProduk" name="kategoriProduk" required>
                        <option value="">-- Pilih Kategori --</option>
                        <option value="makanan">Makanan</option>
                        <option value="minuman">Minuman</option>
                        <option value="elektronik">Elektronik</option>
                        <option value="fashion">Fashion</option>
                        <option value="kecantikan">Kecantikan</option>
                        <!-- Tambahkan kategori lain jika perlu -->
                    </select>
                </div>

                <div class="form-group">
                    <label for="hargaProduk">Harga</label>
                    <input type="number" class="form-control" id="hargaProduk" name="hargaProduk" required>
                </div>

                <div class="form-group">
                    <label for="stokProduk">Stok</label>
                    <input type="number" class="form-control" id="stokProduk" name="stokProduk" required>
                </div>

                <div class="form-group">
                    <label for="deskripsiProduk">Deskripsi</label>
                    <textarea class="form-control" id="deskripsiProduk" name="deskripsiProduk" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="gambarProduk">Gambar Produk</label>
                    <input type="file" class="form-control-file" id="gambarProduk" name="gambarProduk">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Save Changes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>