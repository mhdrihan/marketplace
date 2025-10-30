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
                                    <p>Welcome to Shop <span class="bread-ntd"><?= $shop['shop_name'] ?></span></p>
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
            <?php if (!empty($products)): ?>
                <?php foreach ($products as $product): ?>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="animation-single-int">
                            <div class="animation-ctn-hd text-center">
                                <h2><?= esc($product['name']) ?></h2>
                                <p><?= esc($product['description']) ?></p>
                            </div>
                            <div class="animation-img mg-b-15 text-center">
                                <img class="animate-one" src="/uploads/products/<?= esc($product['image_url']) ?>"
                                    alt="<?= esc($product['name']) ?>"
                                    style="max-width:100%; height:200px; object-fit:cover;" />
                            </div>
                            <div class="text-center">
                                <p><strong>Rp <?= number_format($product['price'], 0, ',', '.') ?></strong></p>
                                <p>Stok: <?= esc($product['stock']) ?></p>
                            </div>
                            <div class="animation-action text-right mt-3">
                                <button class="btn btn-warning btn-sm mr-2" data-toggle="modal"
                                    data-target="#EditProduk<?= $product['product_id'] ?>">Edit</button>
                                <form action="<?= base_url('merchant/delete_produk/' . $product['product_id']) ?>" method="post"
                                    style="display:inline;">
                                    <?= csrf_field() ?>
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus produk ini?')">Delete</button>
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
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Tambah Produk</h5>
                <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
            </div>

            <form action="<?= base_url('produk-m/add_product'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="namaProduk">Nama Produk</label>
                        <input type="text" class="form-control" id="namaProduk" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="category">Kategori Barang</label>
                        <select name="category_id" id="category" class="form-control" required>
                            <option value="">-- Pilih Kategori --</option>
                            <?php foreach ($categories as $category): ?>
                                <option value="<?= esc($category['category_id']); ?>">
                                    <?= esc($category['name']); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="hargaProduk">Harga</label>
                        <input type="number" class="form-control" id="hargaProduk" name="price" required>
                    </div>

                    <div class="form-group">
                        <label for="stokProduk">Stok</label>
                        <input type="number" class="form-control" id="stokProduk" name="stock" required>
                    </div>

                    <div class="form-group">
                        <label for="deskripsiProduk">Deskripsi</label>
                        <textarea class="form-control" id="deskripsiProduk" name="description" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="gambarProduk">Gambar Produk</label>
                        <input type="file" class="form-control-file" id="gambarProduk" name="image_url"
                            accept="image/*">
                    </div>
                </div>

                <div class="modal-footer">
                    <!-- 🔹 Tombol Submit HARUS type="submit" -->
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
            <!-- 🔹 FORM SELESAI -->
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
                    <label for="category">Kategori Barang</label>
                    <select name="category_id" id="category" class="form-control" required>
                        <option value="">-- Pilih Kategori --</option>
                        <?php foreach ($categories as $category): ?>
                            <option value="<?= esc($category['category_id']); ?>">
                                <?= esc($category['name']); ?>
                            </option>
                        <?php endforeach; ?>
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