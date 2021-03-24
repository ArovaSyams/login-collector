<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<h2 class="mt-3">Add Account</h2>
<hr>
<?= session()->getFlashdata('pesan'); ?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#logoModal">
    Add Logo
</button>

<div class="card my-3">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            <a href="/admin/ppdb">Your Other Account</a>
        </div>
        <div class="card-body">
            <div class="row">
                <?php foreach($logo as $l) :?>
                <div class="col-1">
                    <img src="/img/<?= $l['logo']; ?>" alt="" style="width: 100%" height="55px">
                    <div class="text-muted text-center mt-2 mb-3" style="font-size: 14px;"><?= $l['logo_name']; ?></div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>


<!-- Modal -->
<div class="modal fade" id="logoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Logo Here</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form action="/logo/save" method="post" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <label for="logo">Logo</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input <?= ($validation->hasError('logo')) ? 'is-invalid' : ''; ?>" id="logo" name="logo">
                    <label class="custom-file-label" for="logo">Choose file</label>
                    <div id="account" class="invalid-feedback">
                        <?= $validation->getError('logo'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="logo-name">Logo Name</label>
                <input type="text" class="form-control <?= ($validation->hasError('logo-name')) ? 'is-invalid' : ''; ?>" id="logo-name" name="logo-name" placeholder="Enter logo name">
                <div id="account" class="invalid-feedback">
                    <?= $validation->getError('logo-name'); ?>
                </div>
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>