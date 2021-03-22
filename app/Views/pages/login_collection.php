<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="mt-3">
    <h2>Login Collection</h2>
    <hr>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            <a href="/admin/ppdb">Your Account Information</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered ppdb" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-light">
                        <tr>
                            <th>No.</th>
                            <th>Account</th>
                            <th>Username/Email</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Google</td>
                            <td>Lorem ipsum dolor</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-info align-middle" data-toggle="modal" data-target="#exampleModal">
                                    <i class="far fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Your Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>