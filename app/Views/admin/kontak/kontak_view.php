<?= $this->extend('template/navbar_admin'); ?>
<?= $this->section('content'); ?>

<div class="row col-lg-12 m-4">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Kontak</h2>
            </div>
            <hr>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-2">
                    <label>Link Alamat Peta</label>
                    <div class="form-group col-lg-8 mb-2">
                        <input type="hidden" name="id" class="form-control">
                        <input type="text" name="nim" class="form-control">
                    </div>
                    <div class="mx-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d42195.4142363259!2d112.63821753781899!3d-7.962087018955721!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x801acd12dda30089!2sElecomp%20Software%20House!5e0!3m2!1sid!2sid!4v1658215039071!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="mt-2">
                    <label>Deskripsi Kontak</label>
                    <div class="form-group col-lg-8">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <div class="mt-2">
                    <label>Deskripsi Kontak (English)</label>
                    <div class="form-group col-lg-8">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <div class="mt-2">
                    <label>E-Mail</label>
                    <div class="form-group col-lg-8">
                        <input type="text" name="nim" class="form-control">
                    </div>
                </div>
                <div class="mt-2 mb-2">
                    <label>No Telepon</label>
                    <div class="form-group col-lg-8">
                        <input type="text" name="nim" class="form-control">
                    </div>
                </div>
            </div>

            <div class=" col-md-12 mt-2">
                <div class="form-group">
                    <button class="btn btn-success col-2">Simpan</button>
                    <button class="btn btn-secondary col-2">Reset</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>