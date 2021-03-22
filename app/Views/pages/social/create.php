<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div>
    <h2>Add Social Media Account</h2>
    <hr>
    <form action="/social/save" method="post">
        <?= csrf_field(); ?>
        <div class="form-group">
            <label for="account">Account</label>
            <input type="text" class="form-control <?= ($validation->hasError('account')) ? 'is-invalid' : ''; ?>" id="account" name="account" placeholder="Add your account name" value="<?= old('account'); ?>">
            <div id="account" class="invalid-feedback">
                <?= $validation->getError('account'); ?>
            </div>
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="username" name="username" placeholder="Add your username" value="<?= old('username'); ?>">
            <div id="username" class="invalid-feedback">
                <?= $validation->getError('username'); ?>
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" placeholder="Add your email" value="<?= old('username'); ?>">
            <div id="email" class="invalid-feedback">
                <?= $validation->getError('email'); ?>
            </div>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" name="password" placeholder="Add your password">
            <div id="password" class="invalid-feedback">
                <?= $validation->getError('password'); ?>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?= $this->endSection(); ?>