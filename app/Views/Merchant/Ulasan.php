<div class="container my-5">
    <div class="row">
        <div class="col-lg-8 col-md-7 col-sm-12">
            <div class="card shadow-sm border-0 mb-4" style="background-color: #fff;">
                <div class="card-body">
                    <h4 class="fw-bold mb-4 text-center text-dark">Ulasan</h4>
                    <div class="review-item mb-3 border-bottom pb-3">
                        <div class="d-flex">
                            <img src="/assets/img/Merchant/img/post/1.jpg" alt="Pembeli 1" class="rounded me-3"
                                width="60" height="60">
                            <div>
                                <h6 class="fw-bold mb-1">Pembeli 1 - Photocard BTS - RM</h6>
                                <div class="rating mb-2">
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="fas fa-star-half-alt" style="color: gold;"></i>
                                    <span>(4.5)</span>
                                </div>
                                <p class="mb-1">Barangnya bagus banget, sesuai gambar! Pengiriman juga cepat. Makasih ya
                                    seller 😊</p>
                                <p id="response-1"><strong>Respons Penjual:</strong> Terima kasih atas ulasannya! Senang
                                    bisa melayani Anda. Sampai jumpa di pembelian selanjutnya 😉</p>
                                <button class="btn btn-sm btn-primary" onclick="editResponse(1)">Edit Respons</button>
                            </div>
                        </div>
                    </div>

                    <div class="review-item mb-3 border-bottom pb-3">
                        <div class="d-flex">
                            <img src="/assets/img/Merchant/img/post/2.jpg" alt="Pembeli 2" class="rounded me-3"
                                width="60" height="60">
                            <div>
                                <h6 class="fw-bold mb-1">Pembeli 2 - EXO Kai Ver.2</h6>
                                <div class="rating mb-2">
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="far fa-star" style="color: gold;"></i>
                                    <span>(4.0)</span>
                                </div>
                                <p class="mb-1">Produk original, packing rapi. Cuma pengirimannya agak lama, tapi
                                    overall oke.</p>
                                <p id="response-2"><strong>Respons Penjual:</strong> Maaf atas keterlambatan pengiriman.
                                    Kami akan perbaiki untuk kedepannya. Terima kasih ya!</p>
                                <button class="btn btn-sm btn-primary" onclick="editResponse(2)">Edit Respons</button>
                            </div>
                        </div>
                    </div>

                    <div class="review-item mb-3 border-bottom pb-3">
                        <div class="d-flex">
                            <img src="/assets/img/Merchant/img/post/5.jpg" alt="Pembeli 5" class="rounded me-3"
                                width="60" height="60">
                            <div>
                                <h6 class="fw-bold mb-1">Pembeli 5 - Photocard BTS - Jin</h6>
                                <div class="rating mb-2">
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <span>(5.0)</span>
                                </div>
                                <p class="mb-1">Super puas! Barang original dan packing aman. Seller top markotop!</p>
                                <p id="response-5" style="display: none;"></p>
                                <button class="btn btn-sm btn-success" onclick="respondToReview(5)">Berikan
                                    Respons</button>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <a href="#" class="text-decoration-none fw-semibold">Lihat Semua Ulasan</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-5 col-sm-12">
            <div class="email-statis-inner notika-shadow" style="background-color: #fff; padding: 20px;">
                <div class="email-ctn-round">
                    <div class="email-rdn-hd text-center mb-3">
                        <h5 class="fw-bold text-dark">Statistik Rating Produk</h5>
                    </div>
                    <div class="email-statis-wrap text-center mb-4">
                        <div class="email-round-nock">
                            <input type="text" class="knob" value="0" data-rel="85" data-linecap="round"
                                data-width="130" data-bgcolor="#E4E4E4" data-fgcolor="#006eff" data-thickness=".10"
                                data-readonly="true">
                        </div>
                        <div class="email-ctn-nock mt-2">
                            <p class="fw-semibold text-secondary">Rating Rata-Rata</p>
                        </div>
                    </div>
                    <div class="email-round-gp d-flex justify-content-around">
                        <div class="email-round-pro text-center">
                            <input type="text" class="knob" value="0" data-rel="60" data-width="90"
                                data-bgcolor="#E4E4E4" data-fgcolor="#006eff" data-thickness=".10" data-readonly="true"
                                disabled>
                            <p>5 Bintang</p>
                        </div>
                        <div class="email-round-pro text-center">
                            <input type="text" class="knob" value="0" data-rel="25" data-width="90"
                                data-bgcolor="#E4E4E4" data-fgcolor="#006eff" data-thickness=".10" data-readonly="true"
                                disabled>
                            <p>4 Bintang</p>
                        </div>
                        <div class="email-round-pro text-center">
                            <input type="text" class="knob" value="0" data-rel="10" data-width="90"
                                data-bgcolor="#E4E4E4" data-fgcolor="#006eff" data-thickness=".10" data-readonly="true"
                                disabled>
                            <p>3 Bintang</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>