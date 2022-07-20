<?= $this->extend('template/navbar_admin'); ?>
<?= $this->section('content'); ?>

<div class="container m-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tentang</h2>
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
                        <th>gambar</th>
                        <th>nama depan</th>
                        <th>deskripsi</th>
                        <th>action</th>
                    </tr>

                    <tr>
                        <td class="col-2">gambar</td>
                        <td class="col-3">nama depan</td>
                        <td class="col-6">deskripsi</td>
                        <td class="col-1">
                            <a href="#" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>