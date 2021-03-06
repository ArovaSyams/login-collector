<?= $this->extend('layout/auth_template'); ?>

<?= $this->section('login'); ?>
<div class="container>
    <div class="row">
        <div class="card cardview">
        <div class="col-10 mx-auto text">
            <h1 class="mt-1" style="text-align: center;">Registration</h1>
            <form action="/auth/register" method="post">
                <div class="mb-2">
                    <label for="username" class="form-label mb-1 ml-2">Username</label>
                    <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?> button" id="username" name="username" placeholder="Username" value="<?= old('username'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('username'); ?>
                    </div>
                </div>
                <div class="mb-2">
                    <label for="email" class="form-label mb-1 ml-2">Email address</label>
                    <input type="text" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?> button" id="email" name="email" aria-describedby="emailHelp" placeholder="Email Address" value="<?= old('email'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('email'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password1" class="form-label mb-1 ml-2">Password</label>
                    <input type="password" class="form-control <?= ($validation->hasError('password1')) ? 'is-invalid' : ''; ?> button" id="password1" name="password1" placeholder="Enter Password">
                    <div class="invalid-feedback">
                        <?= $validation->getError('password1'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password2" class="form-label mb-1 ml-2">Confirm Password</label>
                    <input type="password" class="form-control button" id="password2" name="password2" placeholder="Confirm Password">
                </div>
                <button type="submit" class="btn btn-primary button" name="daftar">Register</button>
            </form>
            <hr>
            <a href="/auth">Have an account? login</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>