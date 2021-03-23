<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div>
    <h2>Add Account Collection</h2>
    <hr>
    <form action="/account/save" method="post">
        <?= csrf_field(); ?>
        <!-- <div class="form-group mb-3">
            <label for="logo">Logo</label>
            <select class="custom-select" id="logo" name="logo">
                <option selected>--Choose--</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div> -->
        <div class="form-group mb-3">
            <label for="account-type">Account Type</label>
            <select class="custom-select <?= ($validation->hasError('account-type')) ? 'is-invalid' : ''; ?>" id="account-type" name="account-type">
                <option value="" selected>--Choose--</option>
                <option value="1">Social Media Account</option>
                <option value="2">Games Account</option>
                <option value="3">Other Account</option>
            </select>
            <div id="account" class="invalid-feedback">
                <?= $validation->getError('account-type'); ?>
            </div>
            <p>Wajib diisi</p>
        </div>
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