<?= $this->extend('template/navbar_user'); ?>
<?= $this->section('content'); ?>

<div class="landing-page">
    <h2 class="welcome">GALERI FOTO</h2>
</div>

<div class="mt-4 mb-4">
    <h1 class="headline">GALERI FOTO</h1>
</div>

<h1>Pameran</h1>
<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        <div class="card h-100">
            <img src="/assets/images/website2.png" class="card-img-top" alt="...">
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <img src="/assets/images/android.png" class="card-img-top" alt="...">

        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <img src="/assets/images/corel.png" class="card-img-top" alt="...">
        </div>
    </div>

</div>

<div class="row btn-row" >
    <a href="/elecomp/pameran" class="btn btn-danger mt-6 ms-2" role="button" style="max-width: 25%;">Lihat Selengkapnya</a>
</div>

<?= $this->endSection(); ?>