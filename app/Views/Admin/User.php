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
                                                <button type="button" class="btn btn-danger">Delete</button>
                                                <button type="button" class="btn btn-warning">Edit</button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>