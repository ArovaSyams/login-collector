<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="mt-3">
    <h2>Login Collection</h2>
    <hr>
    <?= session()->getFlashdata('pesan'); ?>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            <a href="/admin/ppdb">Your Social Media Account</a>
        </div>
        <div class="card-body">
            <a href="/social/create" class="btn btn-primary mb-2">Add Account</a>
            <div class="table-responsive">
                <table class="table table-bordered ppdb" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-light">
                        <tr>
                            <th style="width: 50px;">Logo</th>
                            <th>Account</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th style="width: 90px;">Password</th>
                            <th style="width: 112px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($social as $s) : ?>
                            <tr>
                                <td><img src="img/gmail.svg" alt="" width="40px"></td>
                                <td><?= $s['account']; ?></td>
                                <td><?= $s['username']; ?></td>
                                <td><?= $s['email']; ?></td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#socialModal" data-password="<?= $s['password']; ?>">
                                        <i class="far fa-eye"></i>
                                    </button>
                                </td>
                                <td>
                                    <a href="" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                    <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="socialModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Your Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label for="recipient-name" class="col-form-label">Password :</label>
                <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>