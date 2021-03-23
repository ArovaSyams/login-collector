<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<h1 class="mt-4">Login Collector</h1>
<hr>
<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?> <b><?= session()->get("admin") ?></b> <a href="/panduan">Butuh bantuan?</a>
    </div>
<?php endif; ?>

<div class="row">
    <div class="col-xl-4 col-md-4">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">Social Media Account</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="/social-account">Add</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-4">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">Games Account</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="/games-account">Add</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-4">
        <div class="card bg-info text-white mb-4">
            <div class="card-body">Other Account</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="/other-account">Add</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        <a href="/admin/ppdb">Social Media Account</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered ppdb" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-light">
                    <tr>
                        <th style="width: 50px;">Logo</th>
                        <th>Account</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th style="width: 90px;">Password</th>
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
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#passwordModal" data-password="<?= $s['password']; ?>" data-id="<?= $s['id']; ?>">
                                    <i class="far fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div> 
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        <a href="/admin/ppdb">Social Media Account</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered ppdb" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-light">
                    <tr>
                        <th style="width: 50px;">Logo</th>
                        <th>Account</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th style="width: 90px;">Password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($games as $s) : ?>
                        <tr>
                            <td><img src="img/gmail.svg" alt="" width="40px"></td>
                            <td><?= $s['account']; ?></td>
                            <td><?= $s['username']; ?></td>
                            <td><?= $s['email']; ?></td>
                            <td class="text-center">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#passwordModal" data-password="<?= $s['password']; ?>" data-id="<?= $s['id']; ?>">
                                    <i class="far fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div> 
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        <a href="/admin/ppdb">Social Media Account</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered ppdb" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-light">
                    <tr>
                        <th style="width: 50px;">Logo</th>
                        <th>Account</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th style="width: 90px;">Password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($other as $s) : ?>
                        <tr>
                            <td><img src="img/gmail.svg" alt="" width="40px"></td>
                            <td><?= $s['account']; ?></td>
                            <td><?= $s['username']; ?></td>
                            <td><?= $s['email']; ?></td>
                            <td class="text-center">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#passwordModal" data-password="<?= $s['password']; ?>" data-id="<?= $s['id']; ?>">
                                    <i class="far fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div> 

<!-- Modal  -->
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
<?= $this->endSection(); ?>