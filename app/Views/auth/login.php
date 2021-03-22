<?= $this->extend('layout/auth_template'); ?>

<?= $this->section('login'); ?>
<div class="bg">
    <div class="card cardview">
        <div class="col-10 mx-auto text">
            <h1 class="mt-1" style="text-align: center;">Masuk</h1>

            <?= session()->getFlashdata('pesan'); ?>

            <form action="/auth/loging" method="post">
                <div class="mb-1">
                    <label for="email" class="form-label mb-1 ml-2">Email address</label>
                    <input type="text" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?> button" id="email" name="email" aria-describedby="emailHelp" placeholder="Alamat Email" value="<?= old('email'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('email'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label mb-1 ml-2">Password</label>
                    <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?> button" id="password" name="password" placeholder="Masukkan Password">
                    <div class="invalid-feedback">
                        <?= $validation->getError('password'); ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary button" name="login">Login</button>
            </form>
            <br>
            <a href="/auth/registration">Tidak Punya Akun?</a>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>