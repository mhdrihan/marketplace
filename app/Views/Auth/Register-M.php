<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Marketplace UMKM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="/assets/css/Auth/style.css">
</head>

<body class="bg-light">
    <div class="d-flex justify-content-center">
        <div class="wrapper">
            <div class="logo">
                <img src="/assets/img/Costumer/Logo.png" alt="Logo">
            </div>
            <div class="text-center mt-4 name">
                Market Place UMKM
            </div>

            <form action="<?= base_url('/register-m/add') ?>" method="post">
                <div class="form-field d-flex align-items-center">
                    <span class="far fa-user"></span>
                    <input type="text" name="name" placeholder="Nama Lengkap" required>
                </div>

                <div class="form-field d-flex align-items-center">
                    <span class="far fa-user-circle"></span>
                    <input type="text" name="username" placeholder="Nama Toko" required>
                </div>

                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-phone"></span>
                    <input type="text" name="phone" placeholder="Nomor Telepon" required>
                </div>

                <div class="form-field d-flex align-items-center">
                    <span class="far fa-envelope"></span>
                    <input type="email" name="email" placeholder="Email" required>
                </div>

                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key"></span>
                    <input type="password" name="password" placeholder="Password" required>
                </div>

                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-lock"></span>
                    <input type="password" name="password_confirm" placeholder="Konfirmasi Password" required>
                </div>

                <button type="submit" class="btn mt-3">Daftar</button>
            </form>

            <div class="text-center fs-6">
                <a href="/login">Sudah punya akun? Login</a>
            </div>
        </div>
    </div>

    <!-- jQuery & SweetAlert handler -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function () {
            <?php if (session()->getFlashdata('error')): ?>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: '<?= session()->getFlashdata('error') ?>',
                    confirmButtonText: 'OK'
                });
            <?php elseif (session()->getFlashdata('success')): ?>
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: '<?= session()->getFlashdata('success') ?>',
                    confirmButtonText: 'OK'
                });
            <?php endif; ?>
        });
    </script>
</body>

</html>