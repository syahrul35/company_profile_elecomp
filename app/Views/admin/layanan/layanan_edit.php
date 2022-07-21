<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" />

<div class="row col-lg-12 m-4">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Layanan</h2>
            </div>
            <hr>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="row">
            <div class=" col-md-12 mt-2 mb-4">
                <div class="form-group">
                    <a href="/admin/layanan" class="btn btn-success col-2" role="button">Simpan</a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="mt-2">
                    <label class="mb-2">Gambar</label>
                    <div class="form-group col-lg-8 mb-2">
                        <input type="hidden" name="id" class="form-control">
                        <input type="file" name="gambar_tentang" class="form-control">
                    </div>
                </div>
                <div class="mt-2">
                    <label class="mb-2">Nama Layanan</label>
                    <div class="form-group col-lg-8 mb-2">
                        <input type="text" name="nim" class="form-control">
                    </div>
                </div>
                <div class="mt-2">
                    <label class="mb-2">Nama Layanan (English)</label>
                    <div class="form-group col-lg-8 mb-2">
                        <input type="text" name="nim" class="form-control">
                    </div>
                </div>
                <div class="mt-2">
                    <label class="mb-2">Kategori</label>
                    <div class="form-group col-lg-8 mb-2">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="mt-2">
                    <label class="mb-2">Deskripsi Layanan</label>
                    <div class="form-group col-lg-8">
                        <textarea class="form-control" name="deskripsi_id" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <div class="mt-2">
                    <label class="mb-2">Deskripsi Layanan (English)</label>
                    <div class="form-group col-lg-8">
                        <textarea class="form-control" name="deskripsi_eng" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>