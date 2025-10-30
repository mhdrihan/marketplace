<!-- Top Header -->
<div class="top-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <small><i class="fas fa-phone me-2"></i> Bantuan: 0800-1234-5678</small>
            </div>
            <div class="col-md-6 text-end">
                <small><i class="fas fa-truck me-2"></i> Gratis Ongkir untuk pembelian di atas Rp 100.000</small>
            </div>
        </div>
    </div>
</div>

<!-- Main Navigation -->
<nav class="main-navbar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-auto">
                <a href="/" class="navbar-brand">
                    <i class="fas fa-store me-2"></i>
                    Marketplace UMKM
                </a>
            </div>

            <div class="col search-container">
                <form class="search-wrapper" role="search">
                    <input type="search" class="search-input" placeholder="Cari produk UMKM favorit Anda..." name="q"
                        autocomplete="off">
                    <button type="submit" class="search-btn">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>

            <div class="col-auto">
                <div class="nav-icons">
                    <a href="/wishlist" class="nav-icon" title="Wishlist">
                        <i class="fas fa-heart"></i>
                        <span class="badge-count">3</span>
                    </a>
                    <a href="/keranjang" class="nav-icon" title="Keranjang">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="badge-count">5</span>
                    </a>
                    <a href="/notifikasi" class="nav-icon" title="notifikasi">
                        <i class="fas fa-bell"></i>
                        <span class="badge-count">2</span>
                    </a>
                    <div class="auth-buttons">
                        <?php if (!session()->get('logged_in')): ?>
                            <a href="/login" class="btn btn-outline-primary">Masuk</a>
                            <a href="/register" class="btn btn-primary">Daftar</a>
                        <?php else: ?>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="userDropdown"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user"></i> <?= esc(session()->get('username')) ?>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="userDropdown">
                                    <li><a class="dropdown-item" href="/Profile"><i class="fas fa-user-circle"></i>
                                            Profile</a></li>
                                    <li><a class="dropdown-item" href="<?= base_url('/logout'); ?>"><i
                                                class="fas fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Category Navigation -->
<nav class="category-nav">
    <div class="container">
        <ul class="nav nav-pills justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="/">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/promo">Promo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/promo">Voucher</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/produk">Produk Terlaris</a>
            </li>

        </ul>
    </div>
</nav>