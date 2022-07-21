<?= $this->extend('template/navbar_admin'); ?>
<?= $this->section('content'); ?>

<div class="container m-2">
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Layanan</h2>
            </div>
        </div>
    </div>
    <hr>
    <?php if (!empty(session()->getFlashdata('berhasil'))) { ?>
        <div class="alert alert-success">
            <?php echo session()->getFlashdata('berhasil'); ?>
        </div>
    <?php } ?>

    <div class="row m-auto">
        <div class="col-lg-12">
            <div class="row">
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Foto Layanan</th>
                        <th>Nama Layanan</th>
                        <th>Nama Layanan (English)</th>
                        <th>Deskripsi Layanan</th>
                        <th>Deskripsi Layanan (English)</th>
                        <th>Action</th>
                    </tr>

                    <tr>
                        <td class="col-1">1</td>
                        <td class="col-2">Foto Layanan</td>
                        <td class="col-2">Nama Layanan</td>
                        <td class="col-2">Nama Layanan (English)</td>
                        <td class="col-2">Deskripsi Layanan</td>
                        <td class="col-2">Deskripsi Layanan (English)</td>
                        <td class="col-1">
                            <div class="mb-2">
                                <a href="/admin/layanan/edit" class="btn btn-warning">Edit</a>
                            </div>
                            <div class="mb-2">
                                <a href="#" class="btn btn-danger">Hapus</a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>