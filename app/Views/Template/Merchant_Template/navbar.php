<div class="header-top-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="logo-area">
                    <h3 href="#" class="logo">MARKETPLACE UMKM</h3>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="header-top-menu">
                    <ul class="nav navbar-nav notika-top-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                class="nav-link dropdown-toggle"><span><i
                                        class="notika-icon notika-search"></i></span></a>
                            <div role="menu" class="dropdown-menu search-dd animated flipInX">
                                <div class="search-input">
                                    <i class="notika-icon notika-left-arrow"></i>
                                    <input type="text" />
                                </div>
                            </div>
                        </li>
                        <li class="nav-item nc-al"><a href="#" data-toggle="dropdown" role="button"
                                aria-expanded="false" class="nav-link dropdown-toggle"><span><i
                                        class="notika-icon notika-alarm"></i></span>
                                <div class="spinner4 spinner-4"></div>
                                <div class="ntd-ctn"><span>3</span></div>
                            </a>
                            <div role="menu" class="dropdown-menu message-dd notification-dd animated zoomIn">
                                <div class="hd-mg-tt">
                                    <h2>Notification</h2>
                                </div>
                                <div class="hd-message-info">
                                    <a href="#">
                                        <div class="hd-message-sn">
                                            <div class="hd-message-img">
                                                <img src="/assets/img/Merchant/img/post/1.jpg" alt="" />
                                            </div>
                                            <div class="hd-mg-ctn">
                                                <h3>David Belle</h3>
                                                <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="hd-message-sn">
                                            <div class="hd-message-img">
                                                <img src="/assets/img/Merchant/img/post/2.jpg" alt="" />
                                            </div>
                                            <div class="hd-mg-ctn">
                                                <h3>Jonathan Morris</h3>
                                                <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="hd-message-sn">
                                            <div class="hd-message-img">
                                                <img src="/assets/img/Merchant/img/post/4.jpg" alt="" />
                                            </div>
                                            <div class="hd-mg-ctn">
                                                <h3>Fredric Mitchell</h3>
                                                <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="hd-message-sn">
                                            <div class="hd-message-img">
                                                <img src="/assets/img/Merchant/img/post/1.jpg" alt="" />
                                            </div>
                                            <div class="hd-mg-ctn">
                                                <h3>David Belle</h3>
                                                <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="hd-message-sn">
                                            <div class="hd-message-img">
                                                <img src="/assets/img/Merchant/img/post/2.jpg" alt="" />
                                            </div>
                                            <div class="hd-mg-ctn">
                                                <h3>Glenn Jecobs</h3>
                                                <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="hd-mg-va">
                                    <a href="#">View All</a>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item nc-al">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                class="nav-link dropdown-toggle">
                                <span><i class="notika-icon notika-support"></i></span>
                                <div class="spinner4 spinner-4"></div>
                            </a>

                            <div role="menu" class="dropdown-menu message-dd account-dd animated zoomIn"
                                style="min-width: 200px; max-width: 220px;">
                                <!-- Header -->
                                <div class="hd-mg-tt text-center py-2 border-bottom">
                                    <h5 class="mb-2">Akun</h5>
                                </div>

                                <div class="hd-message-info p-2 text-center">
                                    <div class="mb-2">
                                        <h6 class="mb-0"><?= esc(session()->get('name') ?? 'User'); ?></h6>
                                        <small
                                            class="text-muted"><?= ucfirst(esc(session()->get('role') ?? 'guest')); ?></small>
                                    </div>
                                </div>

                                <hr class="my-1">

                                <div class="hd-message-info px-2 text-center">
                                    <a href="/profile"
                                        class="btn btn-light d-flex align-items-center justify-content-start w-100 mb-2 py-1">
                                        <span class="fw-semibold" style="font-size: 14px;">Profil Saya</span>
                                    </a>
                                    <a href="/settings"
                                        class="btn btn-light d-flex align-items-center justify-content-start w-100 mb-2 py-1">
                                        <span class="fw-semibold" style="font-size: 14px;">Pengaturan</span>
                                    </a>
                                    <a href="<?= base_url('/logout'); ?>"
                                        class="btn btn-danger d-flex align-items-center justify-content-start w-100 mb-2 py-1">
                                        <span class="fw-semibold" style="font-size: 14px;">Logout</span>
                                    </a>
                                </div>
                                <div class="hd-mg-va text-center py-1 border-top bg-light">
                                    <small>&copy; <?= date('Y'); ?> Marketplace UMKM</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Header Top Area -->
<!-- Mobile Menu start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                            <li><a data-toggle="collapse" data-target="#Charts" href="#">Home</a>
                                <ul class="collapse dropdown-header-top">
                                    <li><a href="/dashboard-m">Dashboard</a></li>
                                    <li><a href="/ulasan">Ulasan</a></li>
                                    <li></li>
                                </ul>
                            <li><a data-toggle="collapse" data-target="#demoevent" href="#">Email</a>
                                <ul id="demoevent" class="collapse dropdown-header-top">
                                    <li><a href="/email">Mail</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#democrou" href="#">Shop</a>
                                <ul id="democrou" class="collapse dropdown-header-top">
                                    <li><a href="/produk-m">Product</a></li>
                                    <li><a href="/order">Order</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#demolibra" href="#">Analytic</a>
                                <ul id="demolibra" class="collapse dropdown-header-top">
                                    <li><a href="/analisis-p">Analytic Product</a></li>
                                    <li><a href="/analisis-o">Analytic Order</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu end -->
<!-- Main Menu area start-->
<div class="main-menu-area mg-tb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                    <li><a data-toggle="tab" href="#Home"><i class="notika-icon notika-star"></i>
                            Home</a>
                    </li>
                    <li><a data-toggle="tab" href="#mailbox"><i class="notika-icon notika-mail"></i>
                            Mail</a>
                    </li>
                    <li><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-house"></i> Shop</a>
                    </li>
                    <li><a data-toggle="tab" href="#Charts"><i class="notika-icon notika-bar-chart"></i>
                            Analytic</a>
                    </li>
                </ul>
                <div class="tab-content custom-menu-content">
                    <div id="Home" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="/dashboard-m">Dashboard</a>
                            </li>
                            <li><a href="/ulasan">Ulasan</a>
                            </li>
                        </ul>
                    </div>
                    <div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="/email">Mail</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li>
                                <?php $shop = $shop ?? null; ?>
                                <?php if (!$shop): ?>
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#addShopModal">
                                        <i class="bi bi-shop"></i> Tambah Toko
                                    </button>
                                <?php endif; ?>
                            </li>
                            <li><a href="/produk-m">Product</a>
                            </li>
                            <li><a href="/order">Order</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Charts" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="/analisis-p">Analytic Product</a>
                            </li>
                            <li><a href="/analisis-o">Analytic Order</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Menu area End-->