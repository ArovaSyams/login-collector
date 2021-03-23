<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<h1 class="mt-4">Login Collector</h1>
<hr>
<?php if(session()->getFlashdata('pesan')) :?>
<div class="alert alert-success" role="alert">
    <?= session()->getFlashdata('pesan'); ?> <b><?= session()->get("admin") ?></b> <a href="/panduan">Butuh bantuan?</a>
</div>
<?php endif;?>

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

<?= $this->endSection(); ?>