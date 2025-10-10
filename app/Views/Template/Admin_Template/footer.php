<!-- partial:partials/_footer.html -->
<footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2025. All rights
            reserved.</span>
    </div>
</footer>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/assets/vendors/Admin/vendors/js/vendor.bundle.base.js"></script>
<script src="/assets/vendors/Admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="/assets/vendors/Admin/vendors/chart.js/chart.umd.js"></script>
<script src="/assets/vendors/Admin/vendors/progressbar.js/progressbar.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="/assets/js/Admin/js/off-canvas.js"></script>
<script src="/assets/js/Admin/js/template.js"></script>
<script src="/assets/js/Admin/js/settings.js"></script>
<script src="/assets/js/Admin/js/hoverable-collapse.js"></script>
<script src="/assets/js/Admin/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="/assets/js/Admin/js/jquery.cookie.js" type="text/javascript"></script>
<script src="/assets/js/Admin/js/dashboard.js"></script>
<!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
<!-- End custom js for this page-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function () {
        document.querySelectorAll('.btn-delete').forEach(button => {
            button.addEventListener('click', function () {
                const userId = this.getAttribute('data-id');
                const userName = this.getAttribute('data-name');

                Swal.fire({
                    title: 'Yakin ingin menghapus?',
                    text: `User "${userName}" akan dihapus secara permanen.`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#6c757d',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = `/User/delete/${userId}`;
                    }
                });
            });
        });
        <?php if (session()->getFlashdata('error')): ?>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
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