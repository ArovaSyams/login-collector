<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="mt-3">
    <h2>Social Media Collection</h2>
    <hr>
    <?= session()->getFlashdata('pesan'); ?>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            <a href="/admin/ppdb">Your Social Media Account</a>
        </div>
        <div class="card-body">
            <a href="/account/create" class="btn btn-primary mb-2">Add Account</a>
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
                                <td><img src="img/<?php $logo = $where->where('logo_name', $s['account'])->first(); echo $logo['logo'];?>" alt="" width="40px" height="40px"></td>
                                <td><?= $s['account']; ?></td>
                                <td><?= $s['username']; ?></td>
                                <td><?= $s['email']; ?></td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#passwordModal" data-password="<?= $s['password']; ?>" data-id="<?= $s['id']; ?>">
                                        <i class="far fa-eye"></i>
                                    </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#socialModal" data-id="<?= $s['id']; ?>" data-account-type="<?= $s['account_type']; ?>" data-account="<?= $s['account']; ?>" data-username="<?= $s['username']; ?>" data-email="<?= $s['email']; ?>" data-password="<?= $s['password']; ?>">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <a href="/account/socialDelete/<?= $s['id']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
<div class="modal fade" id="passwordModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Your Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/account/passwordupdate" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" class="id">
                    <label for="password" class="col-form-label">Password :</label>
                    <input type="text" class="form-control" id="password" name="password">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit Data -->
<div class="modal fade" id="socialModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/account/socialUpdate" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" class="id">
                    <div class="form-group mb-3">
                        <label for="account-type">Account Type</label>
                        <select class="custom-select <?= ($validation->hasError('account-type')) ? 'is-invalid' : ''; ?> account-type" id="account-type" name="account-type">
                            <option selected>--Choose--</option>
                            <option value="1">Social Media Account</option>
                            <option value="2">Games Account</option>
                            <option value="3">Other Account</option>
                        </select>
                        <div id="account" class="invalid-feedback">
                            <?= $validation->getError('account-type'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="account">Account</label>
                        <input type="text" class="form-control <?= ($validation->hasError('account')) ? 'is-invalid' : ''; ?> account" id="account" name="account" placeholder="Add your account name" value="<?= old('account'); ?>">
                        <div id="account" class="invalid-feedback">
                            <?= $validation->getError('account'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?> username" id="username" name="username" placeholder="Add your username" value="<?= old('username'); ?>">
                        <div id="username" class="invalid-feedback">
                            <?= $validation->getError('username'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?> email" id="email" name="email" placeholder="Add your email" value="<?= old('username'); ?>">
                        <div id="email" class="invalid-feedback">
                            <?= $validation->getError('email'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?> password" id="password" name="password" placeholder="Add your password">
                        <div id="password" class="invalid-feedback">
                            <?= $validation->getError('password'); ?>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>