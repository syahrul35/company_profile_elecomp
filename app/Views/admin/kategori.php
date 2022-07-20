<?= $this->extend('template/navbar_admin'); ?>
<?= $this->section('content'); ?>

<?= $this->extend('template/navbar_admin'); ?>
<?= $this->section('content'); ?>

<div class="container m-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Kategori</h2>
            </div>
        </div>
    </div>
    <hr>
    <a href="/Mahasiswa/Add" class="btn btn-primary"><span class="fa fa-plus"></span>Tambah Kategori</a>
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
                        <th>no</th>
                        <th>Nama Kategori</th>
                        <th>Nama Kategori (English)</th>
                        <th>action</th>
                    </tr>

                    <tr>
                        <td class="col-1">1</td>
                        <td class="col-4">Kategori</td>
                        <td class="col-4">Kategori (English)</td>
                        <td class="col-3">
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->endSection(); ?>