<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">User Account</h4>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th> No </th>
                                        <th> Surename </th>
                                        <th> Username </th>
                                        <th> Email </th>
                                        <th> Phone Number </th>
                                        <th> Role </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($users as $user): ?>
                                        <tr>
                                            <td> 1 </td>
                                            <td> <?= $user['name'] ?> </td>
                                            <td> <?= $user['username'] ?> </td>
                                            <td> <?= $user['email'] ?> </td>
                                            <td> <?= $user['phone'] ?> </td>
                                            <td> <?= $user['role'] ?> </td>
                                            <td>
                                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#editUserModal<?= $user['user_id'] ?>"><i
                                                        class="ti-pencil"></i></button>
                                                <button class="btn btn-danger btn-sm btn-delete"
                                                    data-id="<?= $user['user_id'] ?>"
                                                    data-name="<?= esc($user['name']) ?>"><i class="ti-trash"></i></button>
                                            </td>
                                        </tr>

                                        <!-- Modal Edit -->
                                        <div class="modal fade" id="editUserModal<?= $user['user_id'] ?>" tabindex="-1"
                                            aria-labelledby="editUserLabel<?= $user['user_id'] ?>" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <form action="<?= base_url('User/update/' . $user['user_id']) ?>"
                                                        method="post">
                                                        <div class="modal-header bg-warning text-dark">
                                                            <h5 class="modal-title"
                                                                id="editUserLabel<?= $user['user_id'] ?>">Edit User -
                                                                <?= esc($user['name']) ?>
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal"></button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                <label class="form-label">Nama</label>
                                                                <input type="text" name="name"
                                                                    value="<?= esc($user['name']) ?>" class="form-control"
                                                                    required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label">Username</label>
                                                                <input type="text" name="username"
                                                                    value="<?= esc($user['username']) ?>"
                                                                    class="form-control" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label">Email</label>
                                                                <input type="email" name="email"
                                                                    value="<?= esc($user['email']) ?>" class="form-control"
                                                                    required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label">Telepon</label>
                                                                <input type="phone" name="phone"
                                                                    value="<?= esc($user['phone']) ?>" class="form-control">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label">Role</label>
                                                                <select name="role" class="form-select" required>
                                                                    <option value="admin" <?= $user['role'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                                                                    <option value="buyer" <?= $user['role'] == 'buyer' ? 'selected' : '' ?>>Buyer</option>
                                                                    <option value="seller" <?= $user['role'] == 'seller' ? 'selected' : '' ?>>Seller</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-warning">Simpan
                                                                Perubahan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>